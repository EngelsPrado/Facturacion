<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table      = 'factura';
    protected $primaryKey = 'ID';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['ID', 'Cliente','Vendedor','Fecha'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


}