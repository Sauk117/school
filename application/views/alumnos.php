<!doctype html>
<html>

<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Video Juegos</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
<table width="100%">
  <tr>
    <td><table width="100%" border="0">
      <tr>
        <td><div id="titulo">Videojuegos</div></td>
      </tr>
      <tr>
        <td>

        <nav>  <div id="menu">
                <ul>
                    
                    <li><a class="current" title="Alumnos" href="">Alumnos</a></li>
                    
                    <li><a title="Docentes" href="">Docentes</a></li>
                    <li><a  title="Calificaciones" href="">Calificaciones</a></li>
                    
                </ul></div>
            </nav>

        </td>
      </tr>
      <tr>
        <td>
            
            <div style="width:40%;text-align:center;margin-top:10%;">
        <section>
        <form  method="post" action="<?=base_url("index.php/welcome/agregaralumno")?>">
            <label>Nombre</label>
            <input type="text"  name="nombre" id="nombre" required/>    
            <label>Apellido P</label>
            <input type="text" name="apellidop" id="apellidop" required>    
            <label>Apellido M</label>
            <input type="text" name="apellidom" id="apellidom" required>
            <label>Fecha de nacimiento</label>
            <input type="date" class="date" name="fnacimiento" id="fnacimiento" required>
            <label>Curp</label>
            <input type="text" name="curp" id="curp" required>  
            <label>Tutor</label>
            <input type="text" name="tutor" id="tutor" required>    
            <label>Pais</label>
            <select id="pais" name="pais">
            <option value="-1">Seleccione uno</option>
            <?php foreach($paises as $pais){  ?>
            <option value="<?= $pais['id']; ?>"><?= $pais['nombre']; ?></option>
            <?php   }
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
            <label>CP</label>
            <select id="cp" name="cp">
                <option value="-1">Vacío</option>
            </select>
            <label>Colonia</label>
            <input type="text" name="colonia" id="colonia" required>
            <label>Calle</label>
            <input type="text" name="calle" id="calle" required>
            <label>Nº Interior</label>
            <input type="text" name="ninterior" id="ninterior" required>
            <label>Nº Exterior</label>
            <input type="text" name="nexterior" id="nexterior" required>
            <label>Telefono</label>
            <input type="text" name="tel" id="tel" required>
            <label>Celular</label>
            <input type="text" name="cel" id="cel" required>
            <label>Correo</label>
            <input type="email" name="correo" id="correo" required>
            <label>Matricula</label>
            <input type="text" name="matricula" id="matricula" required>
            <label>Nivel</label>
            <SELECT name="nivel" id="nivel">
                <option>Universidad</option>
                
            </SELECT>
            <label>Grado</label>
            <input type="text" name="grado" id="grado" required>
            <label>Grupo</label>
            <input type="text" name="grupo" id="grupo" required>
            <label>Sexo</label>
            <SELECT  name="sexo" id="sexo" >
                <option>Maculino</option>
                <option>Femenino</option>
            </SELECT>
            <label>Fecha ingreso</label>
            <input type="date" name="fingreso" id="fingreso" required>
            <input type="submit">
            </section>
        </form>
    </div>


        </td>
      </tr>
     
      <tr>
        <td><div id="pie">Pie</div></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>