<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipmentOsModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'equipment_os';
    protected $primaryKey = 'idEquipment_os';
    protected $returnType = 'array';
    protected $allowedFields = ['declared_defect', 'found_defect', 'solution', 'equipment_id', 'os_id'];
}
