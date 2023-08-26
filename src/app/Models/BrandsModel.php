<?php 

namespace App\Models;

use CodeIgniter\Model;

class BrandsModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'brands';
    protected $primaryKey = 'idBrand';
    protected $returnType = 'array';
    protected $allowedFields = ['brand', 'created_at', 'status'];
}
