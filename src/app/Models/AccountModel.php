<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'accounts';
    protected $primaryKey = 'idAccounts';
    protected $returnType = 'array';
    protected $allowedFields = ['account', 'bank', 'number', 'balance', 'registration', 'status', 'type'];
}
