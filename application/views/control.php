<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Bienvenido</title>
	<script type="text/javascript" src="../../lib/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/general.js"></script>
	<script type="text/javascript" src="../../js/Registro.js"></script>	
    <script type="text/javascript" src="../../js/control.js"></script> 
	<script>
		var urlajax="<?= base_url('index.php/welcome/')?>";//url del controlador
	</script>


</head>
<style type="text/css">

 
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
        background-color: #A9D5E9;
        color: #436477;
        font-weight: bold;
        height: 30px;
        line-height: 30px;
    }

    article.second {
        background-color: #EDFBFF;
        border: 1px solid #95C8DD;
        border-radius: 10px;
        border-top-left-radius: 1px;
        margin: 0px 20px 20px;
        padding: 20px;
        width: 890px;
    }
    article.principal .table {
        margin: auto;
        margin-bottom: 20px;
        width: 756px;
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
        </article>
        </td>
      </tr>

      
    <tr>
        <td>
            <div style="width:50%;text-align:center;margin-top:10%;">
                <div>
                    <form id="form-niveles" >
                    
                        <select id="nivel" name = "nivel">
                            <option value="-1">Seleccione uno</option>
                            <option value="1">Universidad</option>
                        </select>
                        <select id="grupo" name = "grupo">
                            <option value="-1">Seleccione uno</option>
                        </select>
                        <input type="submit" value="Buscar"/>
                        
                    </form>
                </div>
                <section >
                    <section>
                        <article class="second">
                            <section id="contentTable" class="table table_control">
                                    
                            </section>
                        </article>
                    </section>
                </section>
            </div>
        </td>
    </tr>
     
     
    </table></td>
  </tr>
</table>
</body>
</html>
