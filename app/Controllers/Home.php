<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
		return view('Home');
	}

    public function buscar(){
	 
		
		$email= isset($_POST['email']) ? $_POST['email'] : NULL;
		$db = \Config\Database::connect();
		$query = $db->query('SELECT id, nombre FROM usuarios');
        $row   =  $query->getResultArray();
        echo json_encode($row);
	}
	 

	//--------------------------------------------------------------------
  
	
}
