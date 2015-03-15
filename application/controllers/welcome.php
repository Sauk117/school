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
		$data['usuario']=$this->catalogos->getcatalogoinfo('id_tipo','t_usuario','tusuario','');
																			//nombre tabla
		$this->load->view('registrar',$data);


	}
	public function bienvenido()
	{	
		$data['paises']=$this->catalogos->getcatalogoinfo('id_pais','nombre','pais','');
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
		
		$consulta="select * from alumno where nivel $nivel and grupo $grupo";//depende de la condicio de alumnos activos o inactivos
		$data["headers"]=array("Nombre","Turno","Matricula","Acción");
		$data["alumnos"]=$this->usuarios->getElementsFromTable($consulta);
		$this->load->view("vista-de-tabla",$data);
		
	}
	public function getgrupos()
	{
		$consulta="select * from grupos where activo = 1";//depende de la condicio de alumnos activos o inactivos
		$this->usuarios->getElementsFromTable($consulta);
	}
	/*public function getProfesores()
	{
		public function getAlumnos()
	{
		$consulta="select * from Profesores where activo = 1";//depende de la condicio de alumnos activos o inactivos
		$this->usuarios->getElementsFromTable($consulta)
	}
	}*/
}

