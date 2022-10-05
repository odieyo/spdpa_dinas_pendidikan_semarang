<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'nik';
    protected $allowedFields =
    [
        'nik', 'nama_pegawai', 'slug', 'nip',
        'unit_kerja', 'npsn', 'kecamatan', 'jenjang',
        'jenis_jabatan', 'tugas_tambahan', 'status', 'golongan',
        'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'agama',
        'nuptk', 'no_pes_sertif', 'nrg',
        'pend_terakhir', 'jurusan', 'no_hp', 'alamant',
        'ket', 'ket2', 'tmt'
    ];

    public function getPegawai($jenjang)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $pegawai = $builder->getWhere(['jenjang' => $jenjang]);
        return $pegawai->getResultArray();
    }

    public function updatePegawai($slug)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $pegawai = $builder->getWhere(['slug' => $slug]);
        return $pegawai->getResultArray();
    }

    public function search($keyword)
    {
        return $this->table('pegawai')->like('nama_pegawai', $keyword);
    }
}
