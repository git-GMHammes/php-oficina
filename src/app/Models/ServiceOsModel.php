<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceOsModel extends Model
{
    protected $table = 'service_os';
    protected $primaryKey = 'idService_os';
    protected $DBGroup = DATABASE_CONNECTION_DATA;

    protected $allowedFields = ['service', 'quantity', 'price', 'os_id', 'service_id', 'subTotal'];
}
