<?php

namespace App\Models;

use CodeIgniter\Model;

class PermissionsModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'permissions';
    protected $primaryKey = 'idPermission';
    protected $returnType = 'array';
    protected $allowedFields = ['name', 'permissions', 'status', 'date'];
}
