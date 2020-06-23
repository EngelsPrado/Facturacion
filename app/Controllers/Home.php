<?php namespace App\Controllers;

<<<<<<< HEAD
use CodeIgniter\Controller;

use App\Models\UserModel;

class Home extends BaseController
{	
=======
class Home extends BaseController
{
>>>>>>> fdd3daaedff9bd1e86739c0b6f24fb429e22323c
	public function index()
	{
		
		return view('Home');
	}

    public function buscar(){
<<<<<<< HEAD
		$db = \Config\Database::connect();
		
		$factura =  new \App\Models\UserModel();
	/*	$data = [
			'ID' => '4',
			'Cliente'=>'Engels Prado',
			'Vendedor'    => 'd.vader@theempire.com', 
		];

		$factura->insert($data);
		*/
		$buscar= isset($_POST['buscar']) ? $_POST['buscar'] : NULL;
		//var_dump($buscar);
		//$data=$factura->withDeleted()->where('ID', $buscar)->findAll();
		//echo json_encode($data);
		if ($buscar!='')
	    {	
		$query = $db->query("SELECT * FROM factura WHERE ID='$buscar' or  Cliente LIKE '%$buscar%'");
		$row   =  $query->getResultArray();
		
	    echo  json_encode($row);
		}else {
			return ;
		}

		
=======
	 
		
		$email= isset($_POST['email']) ? $_POST['email'] : NULL;
		$db = \Config\Database::connect();
		$query = $db->query('SELECT id, nombre FROM usuarios');
        $row   =  $query->getResultArray();
        echo json_encode($row);
>>>>>>> fdd3daaedff9bd1e86739c0b6f24fb429e22323c
	}
	 

	//--------------------------------------------------------------------
  
	
}
