<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Login</title>
   
  <?php
   if (isset($msg))
   { 
  ?>
    <script type="text/javascript" src="../../lib/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/general.js"></script>
    <script type="text/javascript" src="../../js/Registro.js"></script>
    <link rel="stylesheet" href="../../lib/bootstrap/3.0.0/css/bootstrap.min.css">
    <script type="text/javascript" src="../../lib/bootstrap/3.0.0/js/bootstrap.min.js"></script>
 
  <?php
    }
    else
    {
  ?>
      <script type="text/javascript" src="lib/jquery/2.0.3/jquery.min.js"></script>
      <script type="text/javascript" src="js/general.js"></script>
      <script type="text/javascript" src="js/Registro.js"></script>
      <link rel="stylesheet" href="lib/bootstrap/3.0.0/css/bootstrap.min.css">
      <script type="text/javascript" src="lib/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <?php
    }
  ?>
  
  <script>
    var urlajax="<?= base_url('index.php/welcome/')?>";//url del controlador
  </script>
</head>


</style>

<div class="container">

      <form class="form-signin"  method="post" action="<?=base_url("index.php/welcome/login")?>">
      <center>
        <?php 
        if (isset($msg)) {
          echo "<div id=\"divError\" class=\"alert alert-danger\" >$msg</div>";
        }
        ?>
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email </label>
        <input type="email" name="correo" class="form-control" style="width: 300px;" placeholder="Email" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="contrasena" class="form-control" style="width: 300px;" placeholder="Contraseña" required="">
        <div class="checkbox">
        
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" style="  width: 150px;">Iniciar seción</button>
         <a href="<?=base_url("index.php/welcome/registrar")?>">Registrarse</a>
         </center>
      </form>

    </div>
</body>
</html>