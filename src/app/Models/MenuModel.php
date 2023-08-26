<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'menu';
    protected $primaryKey = 'id_slug';
    protected $allowedFields = ['id_slug', 'label', 'order', 'position', 'url', 'blank', 'created_at', 'updated_at', 'deleted_at'];
}
