<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Bienvenido</title>
	<script type="text/javascript" src="../../lib/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/general.js"></script>
	<script type="text/javascript" src="../../js/Registro.js"></script>	
	<script>
		var urlajax="<?= base_url('index.php/welcome/')?>";//url del controlador
	</script>


</head>
<style type="text/css">
 #menu li{
        text-align:center;
        background:#C39;
        list-style:none;
        display:inline-block;
        border-radius:45px;
        margin-left:40px;
        height:30px;
        width:180px;
        font-size:19px;
        font-family:Georgia, "Times New Roman", Times, serif;
        padding:6px;
        color:#FCC;
        box-shadow:#003 5px 5px 10px;
        text-shadow:#003 5px 5px 10px;
        text-align:center;
        text-decoration: none;
        }
body{
	background-image: url("../../img/bg.png");
}
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
   
    #menu li{
        text-align:center;
        background:#1E6F90;
        list-style:none;
        display:inline-block;
        border-radius:45px;
        margin-left:40px;
        height:30px;
        width:180px;
        font-size:19px;
        font-family:Georgia, "Times New Roman", Times, serif;
        padding:6px;
        color:#FCC;
        box-shadow:#003 5px 5px 10px;
        text-shadow:#003 5px 5px 10px;
        text-align:center;
        text-decoration: none;
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
        
        #menu li:hover{
            text-align:center;
            background:#F9F;
            list-style:none;
            display:inline-block;
            border-radius:45px;
            margin-left:40px;
            height:30px;
            width:180px;
            font-size:19px;
            font-family:Georgia, "Times New Roman", Times, serif;
            padding:6px;
            color:#C66;
            box-shadow:#003 5px 5px 10px;
            text-shadow:#003 5px 5px 10px;
            text-align:center;
            text-decoration: none;
        }
        table{
            font: "Palatino Linotype", "Book Antiqua", Palatino, serif;
            font-size:18px;
            color:#C9C;
            text-align:justify;
        
a:link {
    text-decoration: none;
}
a:visited {
    text-decoration: none;
    color: #F6F;
}
a:hover {
    text-decoration: none;
}
a:active {
    text-decoration: none;
}
a:link {
    text-decoration: none;
    color: #F9F;
}
body,td,th {
    color: #F9F;
}

   #menu1 li{
        text-align:center;
        background:#1E6F90;
        list-style:none;
        display:inline-block;
        border-radius:45px;
        margin-left:40px;
        height:30px;
        width:180px;
        font-size:19px;
        font-family:Georgia, "Times New Roman", Times, serif;
        padding:6px;
        color:#FCC;
        box-shadow:#003 5px 5px 10px;
        text-shadow:#003 5px 5px 10px;
        text-align:center;
        text-decoration: none;
        }
       
        
        #menu1 li:hover{
            text-align:center;
            background:#F9F;
            list-style:none;
            display:inline-block;
            border-radius:45px;
            margin-left:40px;
            height:30px;
            width:180px;
            font-size:19px;
            font-family:Georgia, "Times New Roman", Times, serif;
            padding:6px;
            color:#C66;
            box-shadow:#003 5px 5px 10px;
            text-shadow:#003 5px 5px 10px;
            text-align:center;
            text-decoration: none;
        }

       input[date] {
            width: 158px;
        }
</style>
<body background="../../img/bg.png">
<div>
        <h1>Bienvenido&nbsp;<?=$_SESSION["NombreUsuario"]?>!<h1>
    </div>
<table width="100%">
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td><div id="titulo">UCI</div></td>
      </tr>
      <tr>
        <td>

        <nav>  <div id="menu"><center>
                <ul>
                    
                    <li><a class="current" title="Alumnos" href="<?=base_url("index.php/welcome/bienvenido")?>">Agregar Alumno</a></li>
                    <li><a title="Docentes" href="<?=base_url("index.php/welcome/control")?>">Control de alumnos</a></li>
                </ul></div></center>
            </nav>

        </td>
      </tr>

      
      <tr>
        <td>
            
            <div style="width:40%;text-align:center;margin-top:10%;">
        <section>
        <form  method="post" action="<?=base_url("index.php/welcome/agregaralumno")?>">
            <label>Nombre</label>
            <input type="text"  name="nombre" id="nombre" required <?php if(isset($alumno)){echo "value=".$alumno["nombre"];}?> />    
            <label>Apellido P</label>
            <input type="text" name="apellidop" id="apellidop" required <?php if(isset($alumno)){echo "value=".$alumno["apellidop"];}?> />    
            <label>Apellido M</label>
            <input type="text" name="apellidom" id="apellidom" required <?php if(isset($alumno)){echo "value=".$alumno["apellidop"];}?> / >
            <label>Fecha de nacimiento</label>
            <input type="date" class="date" name="fnacimiento" id="fnacimiento" style="width: 155px;" required <?php if(isset($alumno)){echo "value=".$alumno["fnacimiento"];}?> />
            <label>Curp</label>
            <input type="text" name="curp" id="curp" required <?php if(isset($alumno)){echo "value=".$alumno["apellidop"];}?> />  
            <label>Pais</label>
            <select id="pais" name="pais">
            <option value="-1">Seleccione uno</option>
            <?php foreach($paises as $pais){  ?>
            <option value="<?= $pais['id']; ?>" <?php if(isset($alumno)&&$alumno['pais']==$pais['id']){echo "selected='selected'";}?>><?= $pais['nombre']; ?></option>
            <?php   }
            ?>
            </select>
            <label>Estado</label>
            <select id="estado" name="estado">
                <?php
                if(isset($alumno))
                {
                    echo "<option value='-1'>Seleccione uno</option>";
                    $select="";
                    foreach ($estados as $estado)
                    {
                        if($estado['id']==$alumno['estados'])
                            $select="selected='selected'";
                        echo "<option value=".$estado['id']." $select >".$estado['nombre']."</option>";
                    }
                } 
                else
                    echo "<option value='-1'>Vacío</option>";
                ?>
                
            </select>
            <label>Municipio</label>
            <select id="municipio" name="municipio">
                 <?php
                if(isset($alumno))
                {
                    echo "<option value='-1'>Seleccione uno</option>";
                    $select="";
                    foreach ($municipio as $municipios)
                    {
                        if($municipios['id']==$alumno['municipios'])
                            $select="selected='selected'";
                        echo "<option value=".$municipios['id']." $select >".$municipios['nombre']."</option>";
                    }
                } 
                else
                    echo "<option value='-1'>Vacío</option>";
                ?>
            </select>
            <label>CP</label>
            <input type="text" name="cp" id="cp" required <?php if(isset($alumno)){echo "value=".$alumno["cp"];}?> />
            <label>Colonia</label>
            <input type="text" name="colonia" id="colonia" required <?php if(isset($alumno)){echo "value=".$alumno["colonia"];}?> />
            <label>Calle</label>
            <input type="text" name="calle" id="calle" required <?php if(isset($alumno)){echo "value=".$alumno["calle"];}?> />
            <label>Nº Interior</label>
            <input type="text" name="ninterior" id="ninterior" required <?php if(isset($alumno)){echo "value=".$alumno["ninterior"];}?> />
            <label>Nº Exterior</label>
            <input type="text" name="nexterior" id="nexterior" required <?php if(isset($alumno)){echo "value=".$alumno["nexterior"];}?> />
            <label>Telefono</label>
            <input type="text" name="tel" id="tel" required <?php if(isset($alumno)){echo "value=".$alumno["tel"];}?> />
            <label>Celular</label>
            <input type="text" name="cel" id="cel" required <?php if(isset($alumno)){echo "value=".$alumno["cel"];}?> / >
            <label>Correo</label>
            <input type="email" name="correo" id="correo" required <?php if(isset($alumno)){echo "value=".$alumno["correo"];}?> />
            <label>Matricula</label>
            <input type="text" name="matricula" id="matricula" required <?php if(isset($alumno)){echo "value=".$alumno["matricula"];}?> />
            <label>Nivel</label>
            <SELECT name="nivel" id="nivel">
                <option value="1">Universidad</option>
                
            </SELECT>
            <label>Grado</label>
            <input type="text" name="grado" id="grado" required <?php if(isset($alumno)){echo "value=".$alumno["grupo"];}?> />
            <label>Grupo</label>
            <input type="text" name="grupo" id="grupo" required <?php if(isset($alumno)){echo "value=".$alumno["grado"];}?> />
            <label>Turno</label>
            <SELECT  name="turno" id="turno" >
                <option value="1">Matutino</option>
                <option value="2">Vespertino</option>
            </SELECT>
            <label>Sexo</label>
            <SELECT  name="sexo" id="sexo" >
                <option value="1">Maculino</option>
                <option value="2">Femenino</option>
            </SELECT>
            <label>Fecha ingreso</label>
            <input type="date" name="fingreso" id="fingreso" style="width: 155px;" required <?php if(isset($alumno)){echo "value=".$alumno["fingreso"];}?> />
            
            <?php 
            if(isset($alumno)) 
                echo "<input type='hidden' name='id' value=".$alumno['id_alumno']." />";
            else
                echo "<input type='hidden' name='id' value='0' />";
            ?>
            <input type="submit">
            </section>
        </form>
    </div>


        </td>
      </tr>
     
     
    </table></td>
  </tr>
</table>
</body>
</html>
