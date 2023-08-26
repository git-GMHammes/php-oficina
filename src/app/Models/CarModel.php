<?php 

namespace App\Models;

use CodeIgniter\Model;

class CarModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'cars';
    protected $primaryKey = 'idCars';
    protected $returnType = 'array';
    protected $allowedFields = ['idCustomers', 'car', 'licensePlate', 'manufacturer', 'manufacturingYear', 'modelYear', 'color', 'chassis', 'city', 'state', 'status', 'createdAt', 'updatedAt'];
}
