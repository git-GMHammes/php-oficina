<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'idUsers';
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    # --
    protected $dbInsert = NULL;
    protected $dbReplace = NULL;
    protected $dbRead = NULL;
    protected $affectedRows = 0;
    protected $message = NULL;

    protected $allowedFields = [
        'name', 'rg', 'cpf', 'zipCode', 'street', 'number', 'neighborhood', 'city',
        'state', 'email', 'password', 'phone', 'cellphone', 'status', 'registrationDate',
        'permissions_id', 'expirationDate'
    ];

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
        try {
            if ($keyVariable !== NULL && $keyValue !== NULL) {
                $this->dbRead = $this->where($keyVariable, $keyValue);
            } elseif ($keyVariable !== NULL && $keyValue == NULL) {
                $this->dbRead = $this->select($this->allowedFields);
            } else {
                $this->dbRead = $this->select($this->allowedFields);
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
