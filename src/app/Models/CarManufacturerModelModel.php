<?php

namespace App\Models;

use CodeIgniter\Model;

class CarManufacturerModelModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'car_manufacturer_model';
    protected $primaryKey = 'id_car_manufacturer_model';
    protected $allowedFields = ['car_manufacturer_id_slug', 'car_manufacturer', 'car_model_description', 'car_model'];
    private $affectedRows;
    private $dbInsert;
    private $message;
    private $dbRead;

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

    public function dbRead($keyVariable = NULL, $keyValue = NULL)
    {
        $allowedFields = ['car_manufacturer_id_slug', 'car_manufacturer', 'car_model_description', 'car_model'];
        try {
            if ($keyVariable !== NULL && $keyValue !== NULL) {
                $this->dbRead = $this->where($keyVariable, $keyValue);
            } elseif ($keyVariable !== NULL && $keyValue == NULL) {
                $this->dbRead = $this->select($allowedFields);
            } else {
                $this->dbRead = $this->select($allowedFields);
                $this->affectedRows = $this->db->affectedRows();
            }
        } catch (\Throwable $th) {
            $this->message['message']['danger'] = array(
                $th->getMessage(),
            );
            session()->set('message',  $this->message);
            session()->markAsTempdata('message', 5);
        }
        return $this;
    }

    public function dbUpdateGroup($key, $dbUpdate = array())
    {
        myPrint($key, '', true);
        myPrint($dbUpdate, '', true);
        // $this->where('id_manufacturer', '1');
        // $this->where('id_manufacturer', $key)->update($dbUpdate);
        $this->update(['id_manufacturer', $key], $dbUpdate);
        return $this;
    }

    public function dbUpdate($key, $dbUpdate)
    {
        try {
            if (isset($key) && isset($dbUpdate)) {
                $this->allowedFields = array_keys($dbUpdate);
                // myPrint($this->allowedFields, true);
                $this->update($key, $dbUpdate);
                // myPrint($dbUpdate, true);
            }
            $this->affectedRows = $this->db->affectedRows();
            if ($this->affectedRows > 0) {
                $this->message['success'] = 'Atualização reaizada com sucesso.';
            } else {
                $this->message['warning'] = 'Não foi possível realizar a atulização';
            }
        } catch (\Throwable $th) {
            $this->message['message']['danger'] = array(
                $th->getMessage(),
            );
            session()->set('message',  $this->message);
            session()->markAsTempdata('message', 5);
        }
        return $this;
    }

    public function dBdelete($key = NULL, $dBdelete = NULL)
    {

        try {
            if ($dBdelete !== NULL) {
                $this->where($key, $dBdelete);
                $this->delete();
            } else {
                $this->delete();
                $this->affectedRows = $this->db->affectedRows();
            }
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
