<?php 

require_once 'model/cliente.php';

class clienteController{	


	private $model;

	public function __CONSTRUCT(){
		$this->model = new cliente();
	}

	public function Index(){

		require_once "view/header.php";
		require_once "indes.php";
	}


		public function Estudiantes(){

		require_once "view/header.php";
		require_once "view/cliente/cliente.php";
	}

	public function Crud() {
		
	$cliente = new cliente();

	if (isset($_REQUEST ['id_estu'])){
        $cliente = $this->model->Obtener($_REQUEST['id_estu']);


	}

	require_once 'view/header.php';
	require_once 'view/cliente/cliente-editar.php';
	}

	public function Guardar(){
		$cliente = new cliente();

		$cliente->id_estu = $_REQUEST['id_estu'];
		$cliente->cedula_estu = $_REQUEST['cedula_estu'];
		$cliente->Nom_estu   = $_REQUEST['Nom_estu'];
		$cliente->Fena_estu = $_REQUEST['Fena_estu'];
		$cliente->Tel_estu   = $_REQUEST['Tel_estu'];
		$cliente->Email_estu = $_REQUEST['Email_estu'];
		$cliente->Direc_estu = $_REQUEST['Direc_estu'];
		$cliente->Nivesc_estu = $_REQUEST['Nivesc_estu'];
		$cliente->Rh_estu = $_REQUEST['Rh_estu'];
		$cliente->Cel_estu = $_REQUEST['Cel_estu'];
		$cliente->Barrio_estu = $_REQUEST['Barrio_estu'];
		$cliente->Cat_estu = $_REQUEST['Cat_estu'];
		$cliente->Certimedico_estu = $_REQUEST['Certimedico_estu'];
		$cliente->recibodecaja_estu = $_REQUEST['recibodecaja_estu'];
		$cliente->remision_estu = $_REQUEST['remision_estu'];



	$cliente->id_estu > 0
	? $this->model->Actualizar($cliente)
	: $this->model->Registrar($cliente);


	header('Location: index.php');

	}

	public function Eliminar()
	{

		$this->model->Eliminar($_REQUEST['id_estu']);
		header('Location: index.php');

	}




		public function Auditoriareg() {

	$cliente = new cliente();

	if (isset($_REQUEST ['id_estu'])){
        $cliente = $this->model->Obteneraudi($_REQUEST['id_estu']);


	}

	require_once 'view/header.php';
	require_once 'view/cliente/cliente-auditoriareg.php';
	}


	public function Auditoriaeli() {

	$cliente = new cliente();

	if (isset($_REQUEST ['id_estu'])){
        $cliente = $this->model->Obteneraudi($_REQUEST['id_estu']);


	}

	require_once 'view/header.php';
	require_once 'view/cliente/cliente-auditoriaeli.php';
	}



	public function Auditoriaedi() {

	$cliente = new cliente();

	if (isset($_REQUEST ['id_estu'])){
        $cliente = $this->model->Obteneraudi($_REQUEST['id_estu']);


	}

	require_once 'view/header.php';
	require_once 'view/cliente/cliente-auditoriaedi.php';
	}

	public function Excel() {


	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=mi_archivo.xls");
	header("Pragma: no-cache");
	header("Expires: 0");

	require_once 'view/cliente/registro_excel.php';

	}




}



 ?>