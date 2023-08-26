<?php

namespace App\Models;

use CodeIgniter\Model;

class SalesModel extends Model
{
    protected $table = 'sales';
    protected $primaryKey = 'idSales';
    protected $DBGroup = DATABASE_CONNECTION_DATA;

    protected $allowedFields = [
        'saleDate', 'totalAmount', 'discount', 'invoiced', 'notes', 'customerNotes',
        'customers_id', 'users_id', 'invoices_id'
    ];
}
