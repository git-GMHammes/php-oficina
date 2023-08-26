<?php

namespace App\Models;

use CodeIgniter\Model;

class ColorModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'color';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['color', 'color_br', 'hexadecimal', 'rgb', 'str_grafico'];
    private $dbRead;
    private $dbInsert;
    private $affectedRows;
    private $message;

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
        $allowedFields = [
            'color', 
            'color_br', 
            'hexadecimal', 
            'rgb', 
            'str_grafico'
        ];
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
}
