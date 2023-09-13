<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'user_customer_emitente';
    protected $primaryKey = 'id_user_customer_emitente';
    protected $returnType = 'array';
    protected $allowedFields = [
        'profile_id_slug',
        'classification',
        'name',
        'gender',
        'rg',
        'cpf',
        'zip_code',
        'street',
        'number',
        'neighborhood',
        'city',
        'state',
        'mail',
        'password',
        'phone',
        'cellphone',
        'asset',
        'registrationDate',
        'expirationDate',
        'contact',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    private $dbInsert;
    private $affectedRows;
    private $message;
    private $dbRead;

    public function dbColumn()
    {
        $query = $this->db->query("SHOW COLUMNS FROM {$this->table}");
        foreach ($query->getResult() as $key => $value) {
            // myPrint($value->Field, 'app\Models\CustomerModel.php', true);
            $dbColumn['field'][] = $value->Field;
            $dbColumn['structure'][] = (array) $value;
        }
        return $dbColumn;
    }

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
            myPrint($th->getMessage(), 'app\Models\CustomerModel.php, Line: 71');
        }
        return $this;
    }

    public function dbRead($keyVariable = NULL, $keyValue = NULL)
    {
        $fields = [
            'name',
            'mail',
            'phone',
            'cellphone',
            'neighborhood',
            'cpf'
        ];
        try {
            if ($keyVariable !== NULL && $keyValue !== NULL) {
                $this->dbRead = $this->where($keyVariable, $keyValue);
            } elseif ($keyVariable !== NULL && $keyValue == NULL) {
                $this->dbRead = $this->select($fields);
            } else {
                $this->dbRead = $this->select($fields);
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
