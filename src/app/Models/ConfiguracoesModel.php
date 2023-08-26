<?php 

namespace App\Models;

use CodeIgniter\Model;

class ConfiguracoesModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'configuracoes';
    protected $primaryKey = 'idConfig';
    protected $returnType = 'array';
    protected $allowedFields = ['config', 'valor'];
}
