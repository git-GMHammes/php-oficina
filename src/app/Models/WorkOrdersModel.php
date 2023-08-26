<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkOrdersModel extends Model
{
    protected $table = 'work_orders';
    protected $primaryKey = 'idWorkOrders';
    protected $DBGroup = DATABASE_CONNECTION_DATA;

    protected $allowedFields = [
        'startDate', 'endDate', 'warranty', 'productDescription', 'defect', 'status',
        'observations', 'technicalReport', 'totalValue', 'clients_id', 'users_id',
        'invoice', 'billed', 'warranties_id'
    ];
}
