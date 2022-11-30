<?php

namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_User';

    protected $userAutoIncrement = true;

    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_User', 'nama_user', 'slug', 'username', 'password', 'akses'];

    protected $useTimestamps = false;
    protected $validationRules    = [];

    public function getUser($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function hitungUser()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $jml_usr = $builder->countAll();
        return $jml_usr;
    }

    public function getNamaUser($nama_user)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->getWhere(['nama_user' => $nama_user]);
    }

    public function getAdmin()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        echo $builder->where('nama_user', "admin");
    }

    public function countUser()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $akses = $builder->get('akses');
        $builder->getWhere(['akses' => $akses]);
        echo $builder->countAllResults();
    }

    public function updateaksesUser($id_user, $akses)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->update($id_user, ['akses' => $akses]);
    }

    public function search($keyword)
    {
        return $this->table('users')->like('nama_user', $keyword);
    }
}
