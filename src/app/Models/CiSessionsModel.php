<?php

namespace App\Models;

use CodeIgniter\Model;

class CiSessionsModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'ci_sessions';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['ip_address', 'timestamp', 'data'];
}
