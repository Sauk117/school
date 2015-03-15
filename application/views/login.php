<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Login</title>
	<script type="text/javascript" src="../../lib/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/general.js"></script>
	<script type="text/javascript" src="../../js/Registro.js"></script>	
	<script>
		var urlajax="<?= base_url('index.php/welcome/')?>";//url del controlador
	</script>
		<script>
		<?php 
				if (isset($msg)) 
					echo "var show=true;";
				else
					echo "var show=false;";
				?>
			if(show)
			{
				echo "<label>$msg</label> ";
			}	
		</script>
</head>

<style type="text/css">


	input{
		border: 1px solid #7f9db9;
		margin: 0px;
		-webkit-writing-mode: horizontal-tb;
		font: normal normal normal 13.3333330154419px/normal Arial;
		text-rendering: auto;
		color: initial;
		letter-spacing: normal;
		word-spacing: normal;
		text-transform: none;
		text-indent: 0px;
		text-shadow: none;
		display: inline-block;
		text-align: start;
	}
	label {
		text-align: left;
		color: #195977;
		display: inline-block;
		font-size: 11px;
		margin-left: 25px;
		width: 185px;
	}
	 select {
	width: 158px;
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
		width: 800px;
		border-radius: 10px;
		margin-left: 176px;

	}
   
   
        #titulo{
            text-align:center;
            background:#1E6F90;
            border-radius:45px;
            font-size:36px;
            font-family:Georgia, "Times New Roman", Times, serif;
            border-radius:45px;
            width:1200px;
            color:#FCC;
            box-shadow:#003 5px 5px 10px;
            text-shadow:#003 5px 5px 10px;
        }
        
        
       
body,td,th {
    color: #F9F;
}

   
    
</style>

<body background="../../img/bg.png">
	<div style="width:40%;text-align:center;margin-left:30%;margin-top:10%;">
		<form  method="post" action="<?=base_url("index.php/welcome/login")?>">
			<div class="form-group" >
				<?php 
				if (isset($msg)) {
					echo "<label>$msg</label><br/>";
				}
				?>
				<label>Usuario</label>
				<input type="text" class="form-control" name="correo" id="correo" maxlength="255" required  placeholder="zaira"/>
			</div>
			<div class="form-group" >	
				<label>Contraseña</label>
				<input type="password" class="form-control" name="contrasena" id="contrasena" maxlength="20" required  /><br/>
			</div>

			<input type="submit" class="btn btn-default" value="Entrar" /><br/>

			<a href="<?=base_url("index.php/welcome/registrar")?>">Registrarse</a>
			
			</section>
		</form>
	</div>
	

</body>
</html>