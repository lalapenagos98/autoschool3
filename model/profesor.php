<?php 

class profesor
{

private $pdo;

	public $id_profesor;
    public $cedula_profesor;
	public $nombre_profesor;
	public $fechana_profesor;
	public $telfijo_profesor;
	public $email_profesor;
    public $direccion_profesor;
    public $rh_profesor;
    public $celular_profesor;
    public $barrio_profesor;



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

			$stm = $this->pdo->prepare("SELECT * FROM profesor");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar (profesor $data)

    {

    	try
    	{

    		$sql = "INSERT INTO profesor (cedula_profesor, nombre_profesor, fechana_profesor, telfijo_profesor, email_profesor, direccion_profesor, rh_profesor, celular_profesor, barrio_profesor)
    		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    		$this->pdo->prepare($sql)
    		->execute(
    		  	array(		

              $data->cedula_profesor,     
    		  $data->nombre_profesor,
    		  $data->fechana_profesor,
    		  $data->telfijo_profesor,
    		  $data->email_profesor,
              $data->direccion_profesor,
              $data->rh_profesor,
              $data->celular_profesor,
              $data->barrio_profesor,



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

    		$sql = "UPDATE profesor SET cedula_profesor = ?,
    								 nombre_profesor = ?,
    								 fechana_profesor =?, 
    								 telfijo_profesor =?, 
    								 email_profesor =?,
                                     direccion_profesor =?,
                                     rh_profesor =?,
                                     celular_profesor =?,
                                     barrio_profesor =?
    						WHERE id_profesor = ? ";		 

    		$this->pdo->prepare($sql)
    		->execute(
    		  	array(

    		  $data->cedula_profesor,
              $data->nombre_profesor,
    		  $data->fechana_profesor,
    		  $data->telfijo_profesor,
    		  $data->email_profesor,
              $data->direccion_profesor,
              $data->rh_profesor,
              $data->celular_profesor,
              $data->barrio_profesor,
    		   $data->id_profesor

    		)
    		);

    	}  catch (Exception $e)
    	{
    		  die($e->getMessage());
    	}

    }

    public function Obtener($id_profesor)
    {

    	try 
    	{

    		$stm = $this->pdo
    					->prepare("SELECT * FROM profesor WHERE id_profesor = ?");

    					$stm->execute(array($id_profesor));
    					return $stm ->fetch(PDO::FETCH_OBJ);
    		
    	}   catch (Exception $e) 
    		{

    			die($e->getMessage());
    		
    		}

    }

    public function Eliminar($id_profesor)
    {

   		    	try 
    	{

    		$stm = $this->pdo
    					->prepare("DELETE FROM profesor WHERE id_profesor = ?");

    					$stm->execute(array($id_profesor));
    		
    	}   catch (Exception $e) 
    		{

    			die($e->getMessage());
    		
    		}


    }


        public function Obteneraudi($id_profesor)
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

            $stm = $this->pdo->prepare("SELECT * FROM profesor");
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
