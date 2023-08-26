<?php

namespace App\Models;

use CodeIgniter\Model;

class WarrantiesModel extends Model
{
    protected $table = 'warranties';
    protected $primaryKey = 'id_warranties';
    protected $DBGroup = DATABASE_CONNECTION_DATA;

    protected $allowedFields = [
        'users_id',
        'date', 
        'warrantyReference', 
        'warrantyText'
    ];
}
