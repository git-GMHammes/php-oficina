<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'products';
    protected $primaryKey = 'idProducts';
    protected $returnType = 'array';
    protected $allowedFields = ['barcode', 'description', 'unit', 'purchasePrice', 'salePrice', 'stock', 'minimumStock', 'outgoing', 'incoming'];
}
