<?php 

class Database 
{

	public static function StartUp()

	{
		$pdo = new PDO('mysql:host=localhost;dbname=autoschool;charset=utf8','root','ixSUyqErTZQma8');
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $pdo;
	}
}


 ?>