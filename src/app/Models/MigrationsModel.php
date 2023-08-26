<?php

namespace App\Models;

use CodeIgniter\Model;

class MigrationsModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'migrations';
    protected $primaryKey = 'version';
    protected $returnType = 'array';
}
