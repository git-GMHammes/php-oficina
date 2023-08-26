<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'profile';
    protected $primaryKey = 'id_slug';
    protected $allowedFields = ['id_slug', 'label', 'created_at', 'updated_at', 'deleted_at'];
}
