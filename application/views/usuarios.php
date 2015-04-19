<html >
<style type="text/css">
    input, input[date], select{
        width: 200px!important;
    }


    article.second {
        padding: 20px;
        width: 768px;
        margin-left: 159px;
    }
    table{
        width:100%;
    }

    .table_th {
        background-color: #A9D5E9;
        color: #436477;
        font-weight: bold;
        height: 30px;
        line-height: 30px;
        text-align: center;
        border: solid 1pt;
        width: 25%;
    }
    td{
          border: solid 1px darkcyan;
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
    .ajaxMsg{
        width:100%; 
        margin-bottom:0!important; 
        display:none;
        padding: 0!important;
    }
</style>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Bienvenido</title>
    <script type="text/javascript" src="../../lib/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" href="../../lib/bootstrap/3.0.0/css/bootstrap.min.css">
    <script type="text/javascript" src="../../lib/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/general.js"></script>
    <script type="text/javascript" src="../../js/Registro.js"></script> 
    <script type="text/javascript" src="../../js/control.js"></script> 
    <script>
        var urlajax="<?= base_url('index.php/welcome/')?>";//url del controlador
    </script>


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
                <li><a href="<?=base_url("index.php/welcome/controld")?>">Control Docentes</a></li>   
                <li><a href="<?=base_url("index.php/welcome/calificaciones")?>">Calificaciones</a></li>
                <li class="active"><a href="<?=base_url("index.php/welcome/usuarios")?>">Usuarios</a></li>      
            </ul>
        </div>
        <article class="second">
            <table>
                <thead>
                    <th class="table_th">Nombre</th>
                    <th class="table_th">Correo</th>
                    <th class="table_th">Fecha de alta</th>
                    <th class="table_th">Activo</th>
                </thead>
                <tbody>
                <?php
                    if($usuarios!=null && $usuarios>0)
                    { 
                    $counter=0; 
                    foreach ($usuarios as $usuario):  $counter++; 
                    ?>
                        <tr>
                            <td><?php echo $usuario['nombre'] ?></td>
                            <td><?= $usuario['correo'] ?></td>
                            <td><?php echo $usuario['falta'] ?></td>
                            <td style="text-align:center">
                                <input type="checkbox" class="check" <?php if($usuario['estatus']==1){echo "checked='checked'"; }?> name ="<?= $usuario['id'] ?>" value="<?= $usuario['estatus'] ?>" />
                                <div class="alert alert-info ajaxMsg"  role="alert">Guardando...</div>
                            </td>
                        </tr>
                    <?php endforeach; 
                    }?>  
                </tbody>
            </table>
            <script>
            var actcheck;
                $(document).ready(function(){
                    $(document).on("click",".check",function(e){
                        var $estatus;
                        actcheck = $(this);
                        $(".check").fadeOut('fast');
                        $(".ajaxMsg").fadeIn('fast');
                        if(actcheck.val()==1)
                            $estatus=0;
                        else if(actcheck.val()==0)
                            $estatus=1;

                        $.post("<?=base_url('index.php/welcome/cambiar_estatus')?>",{"id":actcheck.attr("name"),"value":actcheck.val()},function(){
                            $(".check").fadeIn('fast');
                            $(".ajaxMsg").fadeOut('fast');
                            actcheck.val($estatus);
                        });
                    });
                });
            </script>
        </article>    
                         
                     
    </div>
</body>
</html>
