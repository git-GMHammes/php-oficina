<?php

namespace App\Models;

use CodeIgniter\Model;

class VMenuProfileModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'v_menu_profile';
    protected $primaryKey = 'id_profile_menu_object';

    protected $affectedRows;
    protected $dbRead;
    protected $message;

    protected $returnType = 'array';

    protected $allowedFields = [
        'id_profile_menu_object',
        'profile_created_at',
        'profile_updated_at',
        'profile_deleted_at',
        'slug_profile_id',
        'id_slug_profile',
        'menu_created_at',
        'menu_updated_at',
        'menu_deleted_at',
        'pmo_created_at',
        'pmo_updated_at',
        'pmo_deleted_at',
        'profile_label',
        'slug_menu_id',
        'id_slug_menu',
        'menu_label',
        // 'position',
        // 'order',
        // 'blank',
        // 'url',
        'menu_position',
        'menu_order',
        'menu_blank',
        'menu_url',
    ];

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
}
