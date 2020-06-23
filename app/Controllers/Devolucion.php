<?php namespace App\Controllers;
use CodeIgniter\Controller;

use App\Models\DetalleModel;
use App\Models\DevolucionModel;
class Devolucion extends BaseController
{
	public function index()
	{ 
        
		return view('Devolucion');
	}

	public function Nueva($id){

        $detalle =  new \App\Models\DetalleModel();
        $datos=$detalle->withDeleted()->where('idfactura', $id)->findAll();
        $cont=0;
        $IDs=array();
        foreach ($datos as $item => $value) {
            $IDs[$cont++]=(int)$value["ID"];
            $data['subtotal']+=$value["Subtotal_Articulo"];
            $data['descuento']+=$value["Total_Descuento"];
        }
        
        $data['ID']   = $id;
        $data['datos']   = $datos;
        $data['detalle']   = json_encode($datos);
        $data['IDs']   = $IDs;
       
        $data['IVA']=0;
        echo view('Devolucion',$data);
    } 
    
    public function crearDevolucion(){
        $db = \Config\Database::connect();
        $dev =  new \App\Models\DevolucionModel();

        $ID= isset($_POST['ID']) ? $_POST['ID'] : NULL;
        $idfactura= isset($_POST['idFactura']) ? $_POST['idFactura'] : NULL;
        $NombreProducto= isset($_POST['NombreProducto']) ? $_POST['NombreProducto'] : NULL;
        $Cantidad= isset($_POST['Cantidad']) ? $_POST['Cantidad'] : NULL;
        $PrecioUnidad= isset($_POST['PrecioUnidad']) ? $_POST['PrecioUnidad'] : NULL;
        $Descuento= isset($_POST['Descuento']) ? $_POST['Descuento'] : NULL;
        $data = [
			'ID' => $ID,
			'idfactura'=>$idfactura,
            'Nombre_Producto'=> $NombreProducto, 
            'Cantidad'=>$Cantidad,
            'Precio_Unidad'=>$PrecioUnidad,
            'Descuento'=>$Descuento
		]; 

       
        
        $dev->insert($data);

        var_dump($data);
    } 
	//--------------------------------------------------------------------
  
	
}