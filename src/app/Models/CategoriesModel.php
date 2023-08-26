<?php 

namespace App\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'categories';
    protected $primaryKey = 'idCategories';
    protected $returnType = 'array';
    protected $allowedFields = ['category', 'registration', 'status', 'type'];
}
