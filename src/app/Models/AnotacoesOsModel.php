<?php 

namespace App\Models;

use CodeIgniter\Model;

class AnotacoesOsModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'anotacoes_os';
    protected $primaryKey = 'idAnotacoes';
    protected $returnType = 'array';
    protected $allowedFields = ['anotacao', 'data_hora', 'os_id'];
}
