<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsOsModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'products_os';
    protected $primaryKey = 'idProducts_os';
    protected $returnType = 'array';
    protected $allowedFields = ['quantity', 'description', 'price', 'os_id', 'products_id', 'subTotal'];
}
