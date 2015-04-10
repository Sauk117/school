<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>

		<script type="text/javascript" src="../../lib/jquery/2.0.3/jquery.min.js"></script>
		<link rel="stylesheet" href="../../lib/bootstrap/3.0.0/css/bootstrap.min.css">
		<script type="text/javascript" src="../../lib/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../../js/general.js"></script>
		<script type="text/javascript" src="../../js/Registro.js"></script>
		<script type="text/javascript" >
		var urlajax="<?= base_url('index.php/welcome/')?>";//url del controlador
		</script>
</head>
<body>
	
	<div class="container" id="container1">
     	<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Por favor  Registrese</h3>
                </div>
            <div class="panel-body">
                <form role="form">
                   	<div class="form-group">     	
                      	<label>Nombre</label>
			            <input type="text"  name="nombre" id="nombre" class="form-control input-sm"  required/>    
			            <label>Apellido P</label>
			            <input type="text" name="apellidop" id="apellidop" class="form-control input-sm"  required>    
			            <label>Apellido M</label>
			            <input type="text" name="apellidom" id="apellidop" class="form-control input-sm"  required>
			            <label>Tipo</label>
			            <select id="usuarios" name="usuarios" class="form-control input-sm">
			            <option value="-1">Seleccione uno</option>
			            <?php foreach($usuario as $usuarios){  ?>
			            <option value="<?= $usuarios['id']; ?>"><?= $usuarios['nombre']; ?></option>
			            <?php   }
			            ?>
			            </select>
			            <label>Correo</label>
			            <input type="email" name="correo" id=correo"" class="form-control input-sm"  required> 
			            <label>Contraseña</label>
			            <input type="password" name="contrasena" id="contrasena" class="form-control input-sm" >
			            <label>Confirmar contraseña</label>
			            <input type="password" name="contrasena1" id="contrasena1" class="form-control input-sm" >
			            <label>Pais</label>
			            <select id="pais" name="pais" class="form-control input-sm" >
			            <option value="-1">Seleccione uno</option>
			            <?php foreach($paises as $pais){  ?>
			            <option value="<?= $pais['id']; ?>"><?= $pais['nombre']; ?></option>
			            <?php   }
			            ?>
			            </select>
			            <label>Estado</label>
			            <select id="estado" name="estado" class="form-control input-sm" >
			                <option value="-1">Vacío</option>
			            </select>
			            <label>Municipio</label>
			            <select id="municipio" name="municipio" class="form-control input-sm" >
			                <option value="-1">Vacío</option>
			            </select>
                    </div>
                        <input type="submit" value="Registrarse" class="btn btn-info btn-block">
                </form>
                    
            </div>
        </div>       
    </div>
</body>
</html>