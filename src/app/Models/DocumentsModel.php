<?php 

namespace App\Models;

use CodeIgniter\Model;

class DocumentsModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'documents';
    protected $primaryKey = 'idDocument';
    protected $returnType = 'array';
    protected $allowedFields = ['document', 'description', 'file', 'path', 'url', 'created_at', 'category', 'type', 'size'];
}