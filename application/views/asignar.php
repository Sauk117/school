<!DOCTYPE html>
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
                <li class="active"><a href="<?=base_url("index.php/welcome/controld")?>">Control Docentes</a></li>   
                <li><a href="<?=base_url("index.php/welcome/calificaciones")?>">Calificaciones</a></li>
                <li ><a href="<?=base_url("index.php/welcome/usuarios")?>">Usuarios</a></li>      
            </ul>
        </div>
        <div class="panel-body" >
<div class="form-group">        
    <section>
        <div class="form-group">  
            <div style="width:100%;text-align:center;margin-top:10%;">
                <form>
                    <h3><strong>Nombre del profesor:&nbsp;</strong><?=$docente["nombre"]?>&nbsp;<?=$docente["apellidop"]?>&nbsp;<?=$docente["apellidom"]?></h3><br/>
                    <div style="text-align:left;">
                        <?php 
                        var_dump($info);
                        foreach ($info as $nivel) 
                        {
                        ?>
                            <input type="checkbox" value="<?=$nivel['nivel']['nivel']?>" name="nivel[]" id="nivel<?=$nivel['nivel']['id']?>" /><?=$nivel['nivel']['nivel']?><br/>
                        <?php
                             foreach ($nivel['contenido'] as $nivelCont) 
                            {
                        ?>      <input type="checkbox" value="<?=$nivelCont['grado']['grado']?>" name="nivel[]" id="nivel<?=$nivelCont['grado']['id_grado']?>" /><?=$nivelCont['grado']['grado']?><br/>

                        <?php
                            }
                        }
                        ?>
                    </div>
                 <center><input type="submit" style="margin-left: 70px;" value="Guardar" class="btn btn-info btn-block"></center>  
                </form>
             </div> 
        </div>
    </section>
</div>
        </div>
    </div>
</body>
</html>