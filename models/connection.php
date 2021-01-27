<?php 

class Connection
{
	
	static public function connect ()
	{

		try {
			$link = new PDO("mysql:host=localhost;dbname=marketplace","root","");

			$link->exec("uf8 setname");
			
		} catch (PDOException $e) {
			die("Error: ".$e->getMessage());
		}

		return $link;
	}
}

?>