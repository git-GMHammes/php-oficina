<?php 

namespace App\Models;

use CodeIgniter\Model;

class AttachmentsModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'attachments';
    protected $primaryKey = 'idAttachment';
    protected $returnType = 'array';
    protected $allowedFields = ['attachment', 'thumb', 'url', 'path', 'os_id'];
}
