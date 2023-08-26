<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionsModel extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'idTransactions';
    protected $DBGroup = DATABASE_CONNECTION_DATA;

    protected $allowedFields = [
        'description', 'amount', 'dueDate', 'paymentDate', 'paid', 'clientSupplier',
        'paymentMethod', 'type', 'attachment', 'notes', 'clients_id', 'categories_id',
        'accounts_id', 'sales_id', 'users_id'
    ];
}
