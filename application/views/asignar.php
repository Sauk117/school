<!DOCTYPE html>
<html >

<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Bienvenido</title>
    <script type="text/javascript" src="../../lib/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../../lib/bootstrap/3.0.0/css/bootstrap.min.css">
    <script type="text/javascript" src="../../lib/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/general.js"></script>
    <!--<script type="text/javascript" src="../../js/Registro.js"></script> -->
    <script type="text/javascript" src="../../js/control.js"></script> 
    <script>
        var urlajax="<?= base_url('index.php/welcome/')?>";//url del controlador
        var Docente=<?=$docente['id_docente']?>;
        var adding=false;
        $(document).ready(function(){
            $("#nivel").change(function(){
                if(!adding)
                {
                    adding=true;
                    $.post(
                        "<?=base_url('index.php/welcome/getGradosByNivel')?>",
                        {nivel:$(this).val()},
                        function(data){
                            var d = $.parseJSON(data);
                            if(d != null)
                            {
                                $("#asignar").fadeOut("fast");
                                $("#grado option").remove();
                                $("#grado").append("<option value='0'>-Seleccione uno</option>");
                                $("#grupo option").remove();
                                $("#grupo").append("<option value='0'>-Vacío</option>");
                                $("#materia option").remove();
                                $("#materia").append("<option value='0'>-Vacío</option>");
                                for(i = 0; i < d.length; i++)
                                {
                                    $("#grado").append("<option value='" + d[i].id + "'>" + d[i].nombre + "</option>");
                                }
                            }
                            adding=false;
                    });
                }
            });
            $("#grado").change(function(){
                if(!adding)
                {
                    adding=true;
                    $.post(
                        "<?=base_url('index.php/welcome/getGruMatByGrado')?>",
                        {nivel:$("#nivel").val(),grado:$(this).val()},
                        function(data){
                            var d = $.parseJSON(data);
                            if(d != null)
                            {
                                $("#asignar").fadeOut("fast");
                                $("#grupo option").remove();
                                $("#grupo").append("<option value='0'>-Seleccione uno</option>");
                                for(i = 0; i < d.g.length; i++)
                                {
                                    $("#grupo").append("<option value='" + d.g[i].id + "'>" + d.g[i].nombre + "</option>");
                                }
                                $("#materia option").remove();
                                $("#materia").append("<option value='0'>-Seleccione uno</option>");
                                for(i = 0; i < d.m.length; i++)
                                {
                                    $("#materia").append("<option value='" + d.m[i].id + "'>" + d.m[i].nombre + "</option>");
                                }
                            }
                            else
                            {
                                $("#asignar").fadeOut("fast");
                                $("#grupo option").remove();
                                $("#grupo").append("<option value='0'>-Vacío</option>");
                                $("#materia option").remove();
                                $("#materia").append("<option value='0'>-Vacío</option>");
                            }
                            adding=false;
                    });
                }
            });
            $("#materia").change(function(){
                if($("#nivel").val()!=0 && $("#grado").val()!=0 && $("#grupo").val()!=0 && $(this).val()!=0)
                    $("#asignar").fadeIn("fast");
                else
                    $("#asignar").fadeOut("fast");
            });
            $("#grupo").change(function(){
                if($("#nivel").val()!=0 && $("#grado").val()!=0 && $("#materia").val()!=0 && $(this).val()!=0)
                    $("#asignar").fadeIn("fast");
                else
                    $("#asignar").fadeOut("fast");
            });
            $("#asignar").click(function(e){
                e.preventDefault();
                if(!adding)
                {
                    adding=true;
                    $.post(
                        "<?=base_url('index.php/welcome/addAsignacion')?>",
                        {docente : Docente, nivel : $("#nivel").val(), grupo : $("#grupo").val(), materia : $("#materia").val()},
                        function(html){
                            $("#msg").fadeIn("fast");
                            adding=false;
                            $("#tablaAsign").empty();
                            $("#tablaAsign").append(html);

                    });
                }
            });
        });
    </script>
    <style type="text/css">
        input, input[date], select{
            width: 200px!important;
        }
        article.second {
            padding: 20px;
            width: 768px;
              margin-left: 159px;
        }
        article.second .table .table_th {
            background-color: #A9D5E9;
            color: #436477;
            font-weight: bold;
            height: 30px;
            line-height: 30px;
        }
        article.second .table div {
            background-color: #fff;
            border: 1px solid #95C8DD;
            color: #195977;
            display: inline-block;
            font-size: 11px;
            height: 25px;
            line-height: 25px;
            padding-left: 5px;
            width: 182px;
        }   
        select{
            float: left;
            margin-right: 20px!important;
        }
        
    </style>

</head>

<body background="../../img/bg.png">


<div class="container" id="container1" >
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title text-center">Bienvenido&nbsp;<?=$_SESSION["NombreUsuario"]?>!</h3>
        </div>
        <div class="navbar navbar-inverse">
            <a class="navbar-brand" href="#"></a>   
            <ul class="nav navbar-nav">             
                <li ><a href="<?=base_url("index.php/welcome/bienvenido")?>">Alumnos</a></li>
                <li ><a href="<?=base_url("index.php/welcome/control")?>">Control de Alumnos</a></li>  
                <li ><a href="<?=base_url("index.php/welcome/docentes")?>">Docentes</a></li>         
                <li class="active"><a href="<?=base_url("index.php/welcome/controld")?>">Control Docentes</a></li>   
                <li><a href="<?=base_url("index.php/welcome/calificaciones")?>">Calificaciones</a></li>
                <li ><a href="<?=base_url("index.php/welcome/usuarios")?>">Usuarios</a></li>      
            </ul>
        </div>
        <div class="panel-body" >
            <div class="form-group">        
                <section>
                    <div class="form-group">  
                        <div style="width:100%;text-align:center;margin-top:10px;">
                            <h3><strong>Nombre del profesor:&nbsp;</strong><?=$docente["nombre"]?>&nbsp;<?=$docente["apellidop"]?>&nbsp;<?=$docente["apellidom"]?></h3>
                            <select id="nivel" name="nivel">
                                <?php
                                echo "<option value='0'>- Seleccione uno</option>";
                                foreach ($niveles as $nivel) 
                                {
                                ?>
                                    <option value="<?=$nivel['id']?>"><?=$nivel['nivel']?></option>
                                <?php
                                }
                                ?>    
                            </select>
                            <select id="grado" name="grado">
                                <option value="0">- Vacío</option>
                            </select>
                            <select id="grupo" name="grupo">
                                <option value="0">- Vacío</option>
                            </select>
                            <select id="materia" name="materia">
                                <option value="0">- Vacío</option>
                            </select>
                            <input type="submit" id="asignar"style="float:left;display:none" value="Asignar" class="btn btn-info btn-xs"><br/><br/>
                            <div class="alert alert-success alert-dismissible" id="msg" style="display:none;" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>¡La asignación se realizó de manera exitosa!</strong>
                            </div>
                            <div id="tablaAsign">
                                <?php $this->load->view('tabla-asignacion',$asignaciones)?>
                            </div>
                        </div> 
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
</html>