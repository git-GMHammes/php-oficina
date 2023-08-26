<?php

namespace App\Models;

use CodeIgniter\Model;

class LogsModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'logs';
    protected $primaryKey = 'idLogs';
    protected $returnType = 'array';
    protected $allowedFields = ['user', 'task', 'date', 'time', 'ip'];
}
