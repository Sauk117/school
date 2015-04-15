<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();//invoca el constructor
		ini_set('session.gc_maxlifetime', 24*60*60);// modifica el tiempo de vida de la sesion  trabajo por segundos 
		session_start(); //empieza la sesion
		$this->load->model('catalogos_m','catalogos'); //invoca al modelo
		$this->load->model('usuarios_m','usuarios');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function control()
	{
		$this->load->view('control');
	}
	public function controld()
	{
		$this->load->view('controld');
	}
	public function usuariosin()
	{
		$this->load->view('usuariosin');
	}
	public function docentes()
	{
		$data['paises']=$this->catalogos->getcatalogoinfo('id_pais','nombre','pais','');
		$data['consecutivo']=$this->usuarios->getconsecutivod();
		$this->load->view('docentes',$data);
	}
	public function agregarDocentes()
	{
		
		if($_POST['id']==0)
			$this->usuarios->agregarDocente($_POST,true);
		else
			$this->usuarios->agregarDocente($_POST,false);
		redirect("Welcome/docentes");	
	}
	public function calificaciones()
	{
		$this->load->view('calificaciones');
	}
	public function login()
	{
		$login=$this->usuarios->getlogin($_POST);
		if($login['success'])
		{
			$data['paises']=$this->catalogos->getcatalogoinfo('id_pais','nombre','pais','');
			$this->load->view("bienvenido",$data);
			redirect("welcome/bienvenido");
		}
		else
		{
			$this->load->view("login", array('msg' =>$login["message"]));
		}
	}
	public function agregarusuario()
	{
		$this->usuarios->agregarusuarios($_POST);
		redirect("Welcome/index");
	}

	public function registrar()
	{
		$data['paises']=$this->catalogos->getcatalogoinfo('id_pais','nombre','pais','');
		$data['usuario']=$this->catalogos->getcatalogoinfo('id_tipo','t_usuario','tusuario','');			//nombre tabla
		$this->load->view('registrar',$data);
	}
	public function bienvenido()
	{	
		$data['paises']=$this->catalogos->getcatalogoinfo('id_pais','nombre','pais','');
		$data['grupos']=$this->catalogos->getcatalogoinfo('id_grupo','grupo','grupo','');
		$data['consecutivo']=$this->usuarios->getconsecutivo();
		$this->load->view('bienvenido',$data);
		//$this->load->view('registrar',$data);
	}
	public function agregaralumno()
	{
		if($_POST['id']==0)
			$this->usuarios->agregaralumnos($_POST,true);
		else
			$this->usuarios->agregaralumnos($_POST,false);
		redirect("Welcome/bienvenido");
	}
	public function getestados()
	{	
		//pedimos los estados con el pais seleccionado
		$respuesta=$this->catalogos->getcatalogoinfo('id_estado','nombre','estado',"where id_pais=$_POST[pais]");
		//tipo de respuesta del servidor en este caso texto plano
		header('Content-Type: text/plain');
		//convierte el arreglo de datos en un objeto JSON
    	echo  json_encode($respuesta);
	}
	public function getmunicipios()
	{	
		//pedimos los estados con el pais seleccionado
		$respuesta=$this->catalogos->getcatalogoinfo('id_municipio','nombre','municipio',"where id_estado=$_POST[estado]");
		//tipo de respuesta del servidor en este caso texto plano
		header('Content-Type: text/plain');
		//convierte el arreglo de datos en un objeto JSON
    	echo  json_encode($respuesta);
	}
	public function getAlumnoById()
	{
		$info=$this->usuarios->getElementById("alumno","where id_alumno=".$_GET["id"]);
		$data['alumno']=$info;
		$data['paises']=$this->catalogos->getcatalogoinfo('id_pais','nombre','pais','');
		$data['estados']=$this->catalogos->getcatalogoinfo('id_estado','nombre','estado',"where id_pais=$info[pais]");
		$data['municipios']=$this->catalogos->getcatalogoinfo('id_municipio','nombre','municipio',"where id_estado=$info[estados]");
		$data['grupos']=$this->catalogos->getcatalogoinfo('id_grupo','grupo','grupo',"where turno=$info[turno] AND nivel =$info[nivel]");
		$this->load->view('bienvenido',$data);
	}
	public function getAlumnos()
	{
		if($_POST['nivel'] != -1)
			$nivel= "= ".$_POST['nivel'];
		else
			$nivel= "!= 0";

		if($_POST['grupo'] != -1)
			$grupo= "= ".$_POST['grupo'];
		else
			$grupo= "!= 0";
		
		$consulta="select * from alumno where nivel $nivel and grupo $grupo AND activo=1";//depende de la condicio de alumnos activos o inactivos
		$data["headers"]=array("Nombre","Turno","Matricula","Acción");
		$data["alumnos"]=$this->usuarios->getElementsFromTable($consulta);
		$this->load->view("vista-de-tabla",$data);	
	}
	public function getDocenteById()
	{
		$info=$this->usuarios->getElementById("docentes","where id_docente=".$_GET["id"]);
		$data['docentes']=$info;
		$data['paises']=$this->catalogos->getcatalogoinfo('id_pais','nombre','pais','');
		$data['estados']=$this->catalogos->getcatalogoinfo('id_estado','nombre','estado',"where id_pais=$info[pais]");
		$data['municipios']=$this->catalogos->getcatalogoinfo('id_municipio','nombre','municipio',"where id_estado=$info[estado]");
		$this->load->view('docentes',$data);
	}
		public function getDocentes()
	{
		if($_POST['nivel'] != -1)
			$nivel= "= ".$_POST['nivel'];
		else
			$nivel= "!= 0";
		
		$consulta="select * from docentes where nivel $nivel  AND activo=1";//depende de la condicio de alumnos activos o inactivos
		$data["headers"]=array("Nombre","Nivel","Matricula","Acción");
		$data["docentes"]=$this->usuarios->getElementsFromTable($consulta);
		$this->load->view("vista-de-tablad",$data);	
	}
	public function getgrupos()
	{
		$consulta="select * from grupos where activo = 1  ";//depende de la condicio de alumnos activos o inactivos
		$this->usuarios->getElementsFromTable($consulta);
	}
	public function getgruposbyajax()
	{
		//pedimos los estados con el pais seleccionado

		$respuesta=$this->catalogos->getcatalogoinfo('id_grupo','grupo','grupo',"where turno=$_POST[turno] AND nivel =$_POST[nivel]");
		//tipo de respuesta del servidor en este caso texto plano
		header('Content-Type: text/plain');
		//convierte el arreglo de datos en un objeto JSON
    	echo  json_encode($respuesta);
	}
	public function removeAlumnoById()
	{
		$this->usuarios->removeAlumnoById($_GET["id"]);
		redirect("Welcome/control");
	}
	public function removeDocenteById()
	{
		$this->usuarios->removeDocenteById($_GET["id"]);
		redirect("Welcome/controld");
	}
	public function asignar()
	{
		$data["info"]=$this->usuarios->asignar($_GET["id"]);
		$this->load->view("asignar",$data);
	}
	public function getmaterias()
	{
		$consulta="select * from materias where activo = 1  ";//depende de la condicio de alumnos activos o inactivos
		$this->usuarios->getElementsFromTable($consulta);
	}
	public function getmateriasbyajax()
	{
		$respuesta=$this->catalogos->getcatalogoinfo('id_materia','materia','materias',"where  nivel =$_POST[nivel]");
		//tipo de respuesta del servidor en este caso texto plano
		header('Content-Type: text/plain');
		//convierte el arreglo de datos en un objeto JSON
    	echo  json_encode($respuesta);
	}
}

