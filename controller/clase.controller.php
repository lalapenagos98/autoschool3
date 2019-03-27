<?php 

require_once 'model/clase.php';

class ClaseController{	


	private $model;

	public function __CONSTRUCT(){
		$this->model = new clase();
	}

	public function Index(){

		require_once "view/header.php";
		require_once "view/clases/clase.php";
	}


		public function Crud1() {
	
	$clase = new clase();

	if (isset($_REQUEST ['id_estu'])){
        $clase = $this->model->Obtener1($_REQUEST['id_estu']);

	}

	require_once 'view/header.php';
	require_once 'view/clases/clase-crear.php';
	}





	public function Crud() {
		
	$clase = new clase();

	if (isset($_REQUEST ['Id_clase'])){
        $clase = $this->model->Obtener($_REQUEST['Id_clase']);


	}

	require_once 'view/header.php';
	require_once 'view/clases/clase-editar.php';
	}

	public function Guardar(){
		$clase = new clase();

		$clase->Id_clase	= $_REQUEST['Id_clase'];
		$clase->Nom_estu	= $_REQUEST['Nom_estu'];
		$clase->Profe_clase	= $_REQUEST['Profe_clase'];
		$clase->Vehi_clase	= $_REQUEST['Vehi_clase'];
		$clase->Fecha_clase	= $_REQUEST['Fecha_clase'];
		$clase->Hora_clase	= $_REQUEST['Hora_clase'];
		$clase->id_estu	= $_REQUEST['id_estu'];
		$clase->Direc_estu	= $_REQUEST['Direc_estu'];
		$clase->Barrio_estu	= $_REQUEST['Barrio_estu'];
		$clase->Cel_estu	= $_REQUEST['Cel_estu'];
		$clase->horas_clase	= $_REQUEST['horas_clase'];
		

	
	 	$clase->Id_clase > 0
	? $this->model->Actualizar($clase)
	: $this->model->Registrar($clase);


	header('Location: index.php');

	}






	public function Eliminar()
	{

		$this->model->Eliminar($_REQUEST['Id_clase']);
		header('Location: index.php');

	}




		
}