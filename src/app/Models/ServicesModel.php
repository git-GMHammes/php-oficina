<?php

namespace App\Models;

use CodeIgniter\Model;

class ServicesModel extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'idServices';
    protected $DBGroup = DATABASE_CONNECTION_DATA;

    protected $allowedFields = ['name', 'description', 'price'];
}
