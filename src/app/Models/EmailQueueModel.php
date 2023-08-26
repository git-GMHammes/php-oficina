<?php 

namespace App\Models;

use CodeIgniter\Model;

class EmailQueueModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'email_queue';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['to_address', 'cc', 'bcc', 'message', 'status', 'date', 'headers'];
}