<!DOCTYPE html>
<html >
<style type="text/css">
    input, input[date], select{
        width: 200px!important;
    }
    .col-md-offset-4 {
  margin-left: 12.333333%!important;
}
</style>
<head>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Bienvenido</title>
	
	<script>
		var urlajax="<?= base_url('index.php/welcome/')?>";//url del controlador
	</script>

    <script type="text/javascript" src="../../lib/jquery/2.0.3/jquery.min.js"></script>
        <link rel="stylesheet" href="../../lib/bootstrap/3.0.0/css/bootstrap.min.css">
        <script type="text/javascript" src="../../lib/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../js/general.js"></script>
        <script type="text/javascript" src="../../js/Registro.js"></script>
        <script type="text/javascript" >
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
                    <li><a href="<?=base_url("index.php/welcome/control")?>">Control de Alumnos</a></li>  
                    <li ><a href="<?=base_url("index.php/welcome/docentes")?>">Docentes</a></li>         
                    <li><a href="<?=base_url("index.php/welcome/controld")?>">Control Docentes</a></li>   
                    <li class="active"><a href="<?=base_url("index.php/welcome/calificaciones")?>">Calificaciones</a></li>    
                </ul>
            </div>
            <div class="panel-body" >

                <form role="form">
                    <!--<div class="form-group"> -->

                    <div class="span6">       
                    
                    <form  method="post" action="<?=base_url("index.php/welcome/agregaralumno")?>">
                        
                       
                    
                    </form>

                    </div>
                    <input type="submit" value="Registrarse" class="btn btn-info btn-block">
                </form>
                        
            </div>
        </div>       
    
</div>
</body>
</html>
