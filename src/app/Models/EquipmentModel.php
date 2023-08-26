<?php 

namespace App\Models;

use CodeIgniter\Model;

class EquipmentModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'equipment';
    protected $primaryKey = 'idEquipment';
    protected $returnType = 'array';
    protected $allowedFields = ['equipment', 'serial_number', 'model', 'color', 'description', 'voltage', 'power', 'voltage_rating', 'manufacture_date', 'brand_id', 'client_id'];
}
