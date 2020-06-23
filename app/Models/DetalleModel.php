<?php namespace App\Models;

use CodeIgniter\Model;

class DetalleModel extends Model
{

    protected $table      = 'detalle_factura';
    protected $primaryKey = 'ID';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['ID', 'idfactura','Nombre_Producto','Descripcion','Cantidad','Precio_Unitario'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


}