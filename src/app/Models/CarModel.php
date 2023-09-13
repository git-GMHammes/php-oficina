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
    protected $dbInsert;
    protected $affectedRows;
    protected $message;

    public function dbCreate($dbCreate)
    {
        try {
            $this->allowedFields = array_keys($dbCreate);
            $this->dbInsert = $this->insert($dbCreate);
            $this->affectedRows = $this->db->affectedRows();
            // myPrint($this->allowedFields, true);
            // myPrint($dbCreate, true);
            // myPrint($this->dbInsert);
        } catch (\Throwable $th) {
            $this->message['message']['danger'] = array(
                $th->getMessage(),
            );
            session()->set('message',  $this->message);
            session()->markAsTempdata('message', 5);
        }
        return $this;
    }
}
