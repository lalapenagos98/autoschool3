<?php 

class clase
{

private $pdo;

	   public $Id_clase;
        public $Profe_clase; 
        public $Vehi_clase  ;
        public $Fecha_clase ;
        public $Hora_clase  ;
        public $id_estu ;
        public $Direc_estu ;
        public $Barrio_estu ;
        public $Cel_estu;
        public $Nom_estu; 
        public $horas_clase;

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

			$stm = $this->pdo->prepare("SELECT * FROM clases2");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}

		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

        public function Listarp()
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

	public function Registrar (clase $data)

    {
    	try
    	{

    		$sql = "INSERT INTO clases2 (Profe_clase,Vehi_clase,Fecha_clase,Hora_clase,id_estu,Direc_estu,Barrio_estu,Cel_estu,Nom_estu, horas_clase)
    		VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    		$this->pdo->prepare($sql)
    		->execute(
    		  	array(		

    		  $data->Profe_clase,
    		  $data->Vehi_clase,
    		  $data->Fecha_clase,
    		  $data->Hora_clase,
              $data->id_estu,
              $data->Direc_estu,
              $data->Barrio_estu,
              $data->Cel_estu,
              $data->Nom_estu,
              $data->horas_clase
              

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

    		$sql = "UPDATE clases2 SET 
    								Profe_clase = ?,
                                    Vehi_clase  = ?,
                                    Fecha_clase = ?,
                                    Hora_clase = ?, 
                                    id_estu = ?, 
                                    Direc_estu  = ?,
                                    Barrio_estu  = ?,
                                    Cel_estu = ?, 
                                    Nom_estu = ?,
                                    horas_clase = ?


    						WHERE Id_clase = ?";		 

    		$this->pdo->prepare($sql)
    		->execute(
    		  	array(		

    		   $data->Profe_clase,
              $data->Vehi_clase,
              $data->Fecha_clase,
              $data->Hora_clase,
              $data->id_estu,
              $data->Direc_estu,
              $data->Barrio_estu,
              $data->Cel_estu,
              $data->Nom_estu,
              $data->horas_clase,
               $data->Id_clase

    		)
    		);

    	}  catch (Exception $e)
    	{
    		  die($e->getMessage());
    	}

    }

    public function Obtener($Id_clase)
    {

    	try 
    	{

    		$stm = $this->pdo
    					->prepare("SELECT * FROM clases2 WHERE Id_clase = ?");

    					$stm->execute(array($Id_clase));
    					return $stm ->fetch(PDO::FETCH_OBJ);
    		
    	}   catch (Exception $e) 
    		{

    			die($e->getMessage());
    		
    		}

    }

        public function Obtener1($id_estu)
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

    public function Eliminar($Id_clase)
    {

   		    	try 
    	{

    		$stm = $this->pdo
    					->prepare("DELETE FROM clases2 WHERE Id_clase = ?");

    					$stm->execute(array($Id_clase));
    		
    	}   catch (Exception $e) 
    		{

    			die($e->getMessage());
    		
    		}


    }       


}


 ?>