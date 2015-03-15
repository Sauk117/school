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
<style type="text/css">
body{
	background-image: url("../../img/bg.png");
}
	input{
		border: 1px solid #7f9db9;
		margin: 0px;
	}
	label {
		color: #195977;
		display: inline-block;
		font-size: 11px;
		margin-left: 25px;
		width: 185px;
	}
	 select {
	width: 176px;
	margin: 0px 1px 0px 2px;
	margin-left: 0px;
	border: 1px solid #7f9db9;

	}
	 input[type=submit]{
		border: 1px solid #95C8DD;
		color: #186990;
		cursor: pointer;
		font-weight: bold;
		font-size: 10px;
		margin: auto;
		display: block;
		padding: 0 15px;
		height: 30px;
		margin-top: 10px;

	}
	section{
		background-color: #DAE7ED;
		border: 2px solid #fff;
		border-bottom: 0px;
		border-top: 0px;
		margin: auto;
		height: auto;
		padding: 15px 20px 0px;
		width: 539px;
		border-radius: 10px;
	}
</style>
<body>
	<form  method="post" action="<?=base_url("index.php/welcome/agregarusuario")?>">
		<br>
		<section>	

			<label>Nombre</label>
			<input type="text"  name="nombre" id="nombre" required/> 	
			<label>Apellido P</label>
			<input type="text" name="apellidop" id="apellidop" required>	
			<label>Apellido M</label>
			<input type="text" name="apellidom" id="apellidop" required>
			<label>Tipo</label>
			<select id="usuarios" name="usuarios">
			<option value="-1">Seleccione uno</option>
			<?php foreach($usuario as $usuarios){  ?>
			<option value="<?= $usuarios['id']; ?>"><?= $usuarios['nombre']; ?></option>
			<?php	}
 			?>
 			</select>
			<label>Correo</label>
			<input type="email" name="correo" id=correo"" required>

			<label>contraseña</label>
			<input type="password" name="contrasena" id="contrasena" required>
			<label>confirmar contraseña</label>
			<input type="password" name="contrasena1" id="contrasena1" required>
			
			<label>Pais</label>
			<select id="pais" name="pais">
			<option value="-1">Seleccione uno</option>
			<?php foreach($paises as $pais){  ?>
			<option value="<?= $pais['id']; ?>"><?= $pais['nombre']; ?></option>
			<?php	}
 			?>
			</select>
			<label>Estado</label>
			<select id="estado" name="estado">
				<option value="-1">Vacío</option>
			</select>
			<label>Municipio</label>
			<select id="municipio" name="municipio">
				<option value="-1">Vacío</option>
			</select>
			
			<input type="submit">
		</section>
		
	</form>
	

</body>
</html>