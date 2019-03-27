<?php 

require_once 'model/profesor.php';

class profesorController{	


	private $model;

	public function __CONSTRUCT(){
		$this->model = new profesor();
	}

	public function Index(){

		require_once "view/header.php";
		require_once "indes.php";
	}


		public function Profesores(){

		require_once "view/header.php";
		require_once "view/profesor/profesor.php";
	}

	public function Crud() {
		
	$profesor = new profesor();

	if (isset($_REQUEST ['id_profesor'])){
        $profesor = $this->model->Obtener($_REQUEST['id_profesor']);


	}

	require_once 'view/header.php';
	require_once 'view/profesor/profesor-editar.php';
	}

	public function Guardar(){
		$profesor = new profesor();

		$profesor->id_profesor = $_REQUEST['id_profesor'];
		$profesor->cedula_profesor = $_REQUEST['cedula_profesor'];
		$profesor->nombre_profesor   = $_REQUEST['nombre_profesor'];
		$profesor->fechana_profesor = $_REQUEST['fechana_profesor'];
		$profesor->telfijo_profesor   = $_REQUEST['telfijo_profesor'];
		$profesor->email_profesor = $_REQUEST['email_profesor'];
		$profesor->direccion_profesor = $_REQUEST['direccion_profesor'];
		$profesor->rh_profesor = $_REQUEST['rh_profesor'];
		$profesor->celular_profesor = $_REQUEST['celular_profesor'];
		$profesor->barrio_profesor = $_REQUEST['barrio_profesor'];
		




	$profesor->id_profesor > 0
	? $this->model->Actualizar($profesor)
	: $this->model->Registrar($profesor);


	header('Location: index.php');

	}

	public function Eliminar()
	{

		$this->model->Eliminar($_REQUEST['id_profesor']);
		header('Location: index.php');

	}




		public function Auditoriareg() {

	$profesor = new profesor();

	if (isset($_REQUEST ['id_profesor'])){
        $profesor = $this->model->Obteneraudi($_REQUEST['id_profesor']);


	}

	require_once 'view/header.php';
	require_once 'view/profesor/profesor-auditoriareg.php';
	}


	public function Auditoriaeli() {

	$profesor = new profesor();

	if (isset($_REQUEST ['id_profesor'])){
        $profesor = $this->model->Obteneraudi($_REQUEST['id_profesor']);


	}

	require_once 'view/header.php';
	require_once 'view/profesor/profesor-auditoriaeli.php';
	}



	public function Auditoriaedi() {

	$profesor = new profesor();

	if (isset($_REQUEST ['id_profesor'])){
        $profesor = $this->model->Obteneraudi($_REQUEST['id_profesor']);


	}

	require_once 'view/header.php';
	require_once 'view/profesor/profesor-auditoriaedi.php';
	}

	public function Excel() {


	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=mi_archivo.xls");
	header("Pragma: no-cache");
	header("Expires: 0");

	require_once 'view/profesor/registro_excel.php';

	}




}



 ?>