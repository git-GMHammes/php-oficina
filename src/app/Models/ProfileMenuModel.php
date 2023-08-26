<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileMenuModel extends Model
{
    protected $DBGroup = DATABASE_CONNECTION_DATA;
    protected $table = 'profile_menu';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'profile_id', 'menu_id', 'created_at', 'updated_at', 'deleted_at'];

    public function __construct()
    {
        parent::__construct();
    }

    public function getMenu($profileId)
    {
        return $this->where('profile_id', $profileId)->findAll();
    }
}
