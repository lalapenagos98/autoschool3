<?php 

class cliente
{

private $pdo;

	public $id_estu;
    public $cedula_estu;
	public $Nom_estu;
	public $Fena_estu;
	public $Tel_estu;
	public $Email_estu;
    public $Direc_estu;
    public $Nivesc_estu;
    public $Rh_estu;
    public $Cel_estu;
    public $Barrio_estu;
    public $Cat_estu;
    public $Certimedico_estu;
    public $recibodecaja_estu;
    public $remision_estu;



	public function __CONSTRUCT()

	{
		try 
		{
			$this->pdo = Database::StartUp();

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM estudiantes");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar (cliente $data)

    {

    	try
    	{

    		$sql = "INSERT INTO estudiantes (cedula_estu, Nom_estu, Fena_estu, Tel_estu, Email_estu, Direc_estu, Nivesc_estu, Rh_estu, Cel_estu, Barrio_estu,Cat_estu, Certimedico_estu, recibodecaja_estu, remision_estu)
    		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    		$this->pdo->prepare($sql)
    		->execute(
    		  	array(		

              $data->cedula_estu,     
    		  $data->Nom_estu,
    		  $data->Fena_estu,
    		  $data->Tel_estu,
    		  $data->Email_estu,
              $data->Direc_estu,
              $data->Nivesc_estu,
              $data->Rh_estu,
              $data->Cel_estu,
              $data->Barrio_estu,
              $data->Cat_estu,
              $data->Certimedico_estu,
              $data->recibodecaja_estu,
              $data->remision_estu,



    		)
    		);

    	}  catch (Exception $e)
    	{
    		  die($e->getMessage());
    	}
    }


    public function Actualizar($data)

    {

    	    	try
    	{

    		$sql = "UPDATE estudiantes SET cedula_estu = ?,
    								 Nom_estu = ?,
    								 Fena_estu =?, 
    								 Tel_estu =? , 
    								 Email_estu =?,
                                     Direc_estu =?,
                                     Nivesc_estu =?,
                                     Rh_estu =?,
                                     Cel_estu =?,
                                     Barrio_estu =?,
                                     Cat_estu =?,
                                     Certimedico_estu =?,
                                     recibodecaja_estu =?,
                                     remision_estu =?

    						WHERE id_estu = ?";		 

    		$this->pdo->prepare($sql)
    		->execute(
    		  	array(

    		  $data->cedula_estu,
              $data->Nom_estu,
    		  $data->Fena_estu,
    		  $data->Tel_estu,
    		  $data->Email_estu,
              $data->Direc_estu,
              $data->Nivesc_estu,
              $data->Rh_estu,
              $data->Cel_estu,
              $data->Barrio_estu,
              $data->Cat_estu,
              $data->Certimedico_estu,
              $data->recibodecaja_estu,
              $data->remision_estu,
    		   $data->id_estu

    		)
    		);

    	}  catch (Exception $e)
    	{
    		  die($e->getMessage());
    	}

    }

    public function Obtener($id_estu)
    {

    	try 
    	{

    		$stm = $this->pdo
    					->prepare("SELECT * FROM estudiantes WHERE id_estu = ?");

    					$stm->execute(array($id_estu));
    					return $stm ->fetch(PDO::FETCH_OBJ);
    		
    	}   catch (Exception $e) 
    		{

    			die($e->getMessage());
    		
    		}

    }

    public function Eliminar($id_estu)
    {

   		    	try 
    	{

    		$stm = $this->pdo
    					->prepare("DELETE FROM estudiantes WHERE id_estu = ?");

    					$stm->execute(array($id_estu));
    		
    	}   catch (Exception $e) 
    		{

    			die($e->getMessage());
    		
    		}


    }


        public function Obteneraudi($id_estu)
    {

    	try 
    	{

    		$stm = $this->pdo
    					->prepare("SELECT * FROM registros WHERE id_registro = ?");

    					$stm->execute(array($id));
    					return $stm ->fetch(PDO::FETCH_OBJ);
    		
    	}   catch (Exception $e) 
    		{

    			die($e->getMessage());
    		
    		}

    }

        public function Listaraudireg()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM registros WHERE Accion_reg = '1' ");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }



        public function Listaraudiedi()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM registros WHERE Accion_reg = '3' ");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }


        public function Listaraudieli()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM registros WHERE Accion_reg = '2' ");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }


        public function Informe()
    {
        try
        {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM estudiantes");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }




}



 ?>

  <script src="assets/js/datatable.js"></script>
    <script src="plugins/datatables/dataTables.boostrap.js"></script>
        <script src="assets/js/bootstrap.js"></script>
         <script src="plugins/datatables/dataTables.boostrap.css"></script>
         


        <script>
        $(document).ready(function() {
                var dataTable = $('#lookup').DataTable( {
                    
                 "language":    {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                },
 
                    "processing": true,
                    "serverSide": true,
                    "ajax":{
                        url :"ajax-grid-data.php", // json datasource
                        type: "post",  // method  , by default get
                        error: function(){  // error handling
                            $(".lookup-error").html("");
                            $("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                            $("#lookup_processing").css("display","none");
                            
                        }
                    }
                } );
            } );
        </script>
