<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table         = 'users';
    protected $primaryKey     = 'id_user';

    protected $userAutoIncrement = true;
    #protected $useSoftDeletes = true;

    protected $allowedFields = [
        'nama_user', 'slug', 'username', 'password', 'akses'
    ];
    protected $useTimestamps = false;
    #protected $createdField  = 'created_at';
    #protected $updatedField  = 'updated_at';
    #protected $deletedField  = 'deleted_at';

    #protected $validationRules    = [];
    #protected $validationMessages = [];
    #protected $skipValidation     = false;

    //Callbacks 
    protected $allowCallBacks   = true;
    protected $beforeInsert = "['hashpassword']";

    public function findUser()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
    }
}
