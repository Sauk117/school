<?php
class usuarios_m extends CI_Model
{
	function agregarusuarios($post){
		$fecha=$this->getdate();
		$this->db->set("nombre",$post["nombre"]." ".$post["apellidop"]." ".$post["apellidom"]);
		$this->db->set("correo",$post["correo"]);
		$this->db->set("contrasena",$post["contrasena"]);
		$this->db->set("id_tipo",$post["usuario"]);
		$this->db->set("pais",$post["pais"]);
		$this->db->set("estado",$post["estado"]);
		$this->db->set("municipio",$post["municipio"]);
		$this->db->set("estatus",1);
		$this->db->set("falta", $fecha);
		$this->db->set("fmod",$fecha);
		$this->db->set("fbaja",null);
		$this->db->insert("usuario");//aqui ta
		
	}

	function getdate(){
		date_default_timezone_set('America/Mexico_City');
        $date=getdate();
        return $date['year'].'-'.$date['mon'].'-'.$date['mday'].' '.$date['hours'].':'.$date['minutes'];
	}

	function getlogin($post){
		$query=$this->db->query("select * from usuario where correo='$post[correo]'");
		if ($query!=null && $query->num_rows()>0) //validamos que exista o sea correcto el usuario
		{
			$row=$query->row_array();
			if ($row["contrasena"]==$post["contrasena"])//validamos que sea correcta la contraseña
			{
				//variables de sesión
				$_SESSION["NombreUsuario"]=$row["nombre"];//guardamos el nombre del usuario
				$_SESSION["TipoUsuario"]=$row["id_tipo"]; //guardamos el tipo de usuario
				return array("success"=>true,"message"=>"");
			}
			else
				return array("success"=>false,"message"=>"Error: Contraseña incorrecta!");
		}
		else 
			return array("success"=>false,"message"=>"Error: Usuario incorrecto, si no tienes cuenta puedes registrarte!");
	}
	function agregaralumnos($post,$isNew){
		
		$this->db->set("nombre",$post["nombre"]);
		$this->db->set("apellidop",$post["apellidop"]);
		$this->db->set("apellidom",$post["apellidom"]);
		$this->db->set("fnacimiento",$post["fnacimiento"]);
		$this->db->set("curp",$post["curp"]);
		$this->db->set("tutor",$post["tutor"]);
		$this->db->set("pais",$post["pais"]);
		$this->db->set("estados",$post["estado"]);
		$this->db->set("municipio",$post["municipio"]);
		$this->db->set("cp",$post["cp"]);
		$this->db->set("colonia",$post["colonia"]);
		$this->db->set("calle",$post["calle"]);
		$this->db->set("ninterior",$post["ninterior"]);
		$this->db->set("nexterior",$post["nexterior"]);
		$this->db->set("tel",$post["tel"]);
		$this->db->set("cel",$post["cel"]);
		$this->db->set("correo",$post["correo"]);
		$this->db->set("matricula",$post["matricula"]);
		$this->db->set("nivel",$post["nivel"]);
		$this->db->set("grado",$post["grado"]);
		$this->db->set("grupo",$post["grupo"]);
		$this->db->set("sexo",$post["sexo"]);
		$this->db->set("fingreso",$post["fingreso"]);
		$this->db->set("turno",$post["turno"]);
		if($isNew)
			$this->db->insert("alumno");
		else
		{
			$this->db->where("id_alumno",$_POST['id']);
			$this->db->update("alumno");
		}
	}
	function getElementById($tabla,$condiciones)//pide las condiciones y la tabla de donde sacara el registro como un parametros
	{
		$query=$this->db->query("select * from $tabla $condiciones");//genera la consulta a la tablacon la condicion que se indica
		if($query!=null && $query->num_rows()>0)//valida que existandatos
			return $query->row_array();//si existen datos regresa la informacion del alumno
		else
			return null;//si no existen regresa un nulo
	}
	function getElementsFromTable($consulta)//pide las condiciones y la tabla de donde sacara el registro como un parametros
	{
		$query=$this->db->query($consulta);//genera la consulta a la tablacon la condicion que se indica
		if($query!=null && $query->num_rows()>0)//valida que existandatos
		{
			foreach ($query->result_array() as $row) //recorre todos los registros que regrese la tabla
			{
				$elementos[]=$row;//los guarda en el arreglo de elementos
			}
			return $elementos;//si existen datos regresa la informacion de la tabla
		}
		else
			return $elementos=array(null);//si no existen regresa un arreglo nulo
	}


}