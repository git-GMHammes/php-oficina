<?php 

namespace App\Models;

use CodeIgniter\Model;

class CarsOsModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'cars_os';
    protected $primaryKey = 'idCars_os';
    protected $returnType = 'array';
    protected $allowedFields = ['car', 'os_id', 'car_id'];
}
