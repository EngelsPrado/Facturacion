<?php namespace App\Models;

use CodeIgniter\Model;

class DevolucionModel extends Model
{

    protected $table      = 'devolucion';
    protected $primaryKey = 'ID';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['ID', 'idfactura','Nombre_Producto','Cantidad','Precio_Unidad','Descuento'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


}