<!DOCTYPE html>
<html >
<style type="text/css">
    

 input, input[date], select{
        width: 200px!important;
        margin-right: 57px!important;
        margin-top: 8px!important;
    }
    .col-md-offset-4 {
        margin-left: 12.333333%!important;
    }
    .form-control {
         display: table-row-group!important;
    }
    label{
        margin-right: 20px;
          width: 200px;
          margin-left: 70px;
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
         <?php
        if(!isset($docentes))
        {
        ?>
            <script type="text/javascript">
            var consecutivo= '<?= $consecutivo ?>';
            var anio="2015";
           
            $(document).ready(
                function(){
                    $("#matricula").val(anio+consecutivo);
                  
                });
            </script>
        <?php
        }
        ?>


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
                    <li class="active"><a href="<?=base_url("index.php/welcome/docentes")?>">Docentes</a></li>          
                    <li><a href="<?=base_url("index.php/welcome/controld")?>">Control Docentes</a></li>  
                    <li ><a href="<?=base_url("index.php/welcome/calificaciones")?>">Calificaciones</a></li>
                    <li ><a href="<?=base_url("index.php/welcome/usuarios")?>">Usuarios</a></li>    
                </ul>
            </div>
            <div class="panel-body" >

                
                    <!--<div class="form-group"> -->

                    <div class="span6">       
                    
                    <form role="form" id="docente"  method="post" action="<?=base_url("index.php/welcome/agregarDocentes")?>">
                        <div class="span6">
                
                <label>Nombre</label>
                <input type="text"  name="nombre" id="nombre" class="form-control input-sm let" required  <?php if(isset($docentes)){echo "value=".$docentes["nombre"];}?> />    
                <label>Apellido P</label>
                <input type="text" name="apellidop" id="apellidop" class="form-control input-sm let" required <?php if(isset($docentes)){echo "value=".$docentes["apellidop"];}?>  />    
                <label>Apellido M</label>
                <input type="text" name="apellidom" id="apellidom" class="form-control input-sm let" required <?php if(isset($docentes)){echo "value=".$docentes["apellidom"];}?>  / >
                <label>Fecha de nacimiento</label>
                <input type="date"  name="fnacimiento" class="form-control input-sm" id="fnacimiento" style="width: 155px;" required <?php if(isset($docentes)){echo "value=".$docentes["fnacimiento"];}?>  />
                <label>Curp</label>
                <input type="text" name="curp" id="curp" class="form-control input-sm" required <?php if(isset($docentes)){echo "value=".$docentes["curp"];}?>  />  
                <label>Pais</label>
                <select id="pais" name="pais" class="form-control input-sm">
                <option value="-1">Seleccione uno</option>
                <?php foreach($paises as $pais){  ?>
                <option value="<?= $pais['id']; ?>" <?php 
                if(isset($docentes)&&$docentes['pais']==$pais['id'])
                    {echo "selected='selected'";}?>><?= $pais['nombre']; ?>
                </option>
                <?php   }
                ?>
                </select>
                <label>Estado</label>
                <select id="estado" name="estado" class="form-control input-sm">
                    <?php
                    if(isset($docentes))
                    {
                        echo "<option value='-1'>Seleccione uno</option>";
                        $select="";
                        foreach ($estados as $estado)
                        {
                            if($estado['id']==$docentes['estados'])
                                $select="selected='selected'";
                            echo "<option value=".$estado['id']." $select >".$estado['nombre']."</option>";
                        }
                    } 
                    else
                        echo "<option value='-1'>Vacío</option>";
                    ?>
                    
                </select>
                <label>Municipio</label>
                <select id="municipio" name="municipio" class="form-control input-sm">
                     <?php
                    if(isset($docentes))
                    {
                        echo "<option value='-1'>Seleccione uno</option>";
                        $select="";
                        foreach ($municipios as $municipio)
                        {
                            if($municipio['id']==$docentes['municipio'])
                                $select="selected='selected'";
                            echo "<option value=".$municipio['id']." $select >".$municipio['nombre']."</option>";
                        }
                    } 
                    else
                        echo "<option value='-1'>Vacío</option>";
                    ?>
                </select>
                <label>CP</label>
                <input type="text"  name="cp" id="cp" class="form-control input-sm num" required <?php if(isset($docentes)){echo "value=".$docentes["cp"];}?>  />
                <label>Colonia</label>
                <input type="text" name="colonia" id="colonia" class="form-control input-sm " required  />
                <label>Calle</label>
                <input type="text" name="calle" id="calle" class="form-control input-sm" required  />
                <label>Nº Interior</label>
                <input type="text" name="ninterior" id="ninterior" class="form-control input-sm" required  />
                <label>Nº Exterior</label>
                <input type="text" name="nexterior" id="nexterior" class="form-control input-sm" required  />
                <label>Telefono</label>
                <input type="text" name="tel" id="tel" class="form-control input-sm num" required  />
                <label>Celular</label>
                <input type="text" name="cel" id="cel" class="form-control input-sm num" required  / >
                <label>Correo</label>
                <input type="email" name="correo" id="correo" class="form-control input-sm" required  />
                <label>Matricula</label>
                <input type="text" name="matricula" id="matricula" class="form-control input-sm num" required disabled/>
                <label>Nivel</label>
                <SELECT name="nivel" id="nivel" class="form-control input-sm">
                    <option value="1">Universidad</option>
                    <option value="2">Secundaria</option>
                    <option value="3">Primaria</option>
                    
                </SELECT>
                
                <label>Sexo</label>
                <SELECT  name="sexo" id="sexo" class="form-control input-sm" >
                    <option value="1">Maculino</option>
                    <option value="2">Femenino</option>
                </SELECT>
                <label>Fecha ingreso</label>
                <input type="date" name="fingreso" id="fingreso" style="width: 155px;" class="form-control input-sm" required  />
                <br>
                <?php 
                if(isset($docentes)) 
                    echo "<input type='hidden' name='id' value=".$docentes['id_docente']." />";
                else
                    echo "<input type='hidden' name='id' value='0' />";
                ?>
                <center><input type="submit" style="margin-left: 70px;" value="Registrarse" class="btn btn-info btn-block"></center>
            </div>
                       
                    
                    </form>

                    </div>
                   
               
                        
            </div>
        </div>       
    
</div>
</body>
</html>
