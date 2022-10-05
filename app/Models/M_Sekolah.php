<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Sekolah extends Model
{
    protected $table = 'sekolah';
    protected $primaryKey = 'npsn';
    protected $allowedFields = ['npsn', 'nama_sekolah', 'slug', 'alamat_sekolah', 'kecamatan', 'jenjang', 'kepala_sekolah', 'rombel', 'guru_kelas', 'guru_pai', 'guru_katholik', 'guru_kristen', 'guru_budha', 'guru_hindu', 'guru_pjok', 'guru_inklusi', 'pramu_bakti', 'penjaga_kebersihan'];

    public function getSekolah($jenjang)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('sekolah');
        $sd = $builder->getWhere(['jenjang' => $jenjang]);
        return $sd->getResultArray();
    }

    public function getUnitKerja($jenjang)
    {
        $db      = \Config\Database::connect();
        $subquery = $db->table('sekolah');
        $builder = $subquery->select('nama_sekolah, kecamatan, npsn')->where('jenjang', $jenjang);
        $unit_kerja = $builder->get();
        return $unit_kerja->getResultArray();
    }

    public function getKecamatanUK($unit_kerja)
    {
        $db      = \Config\Database::connect();
        $subquery = $db->table('sekolah');
        $builder = $subquery->select('kecamatan')->where('nana_sekolah', $unit_kerja);
        $kecamatanuk = $builder->get();
        return $kecamatanuk->getResultArray();
    }

    public function getKecamatUK($unit_kerja)
    {
        $db      = \Config\Database::connect();
        $subquery = $db->table('sekolah');
        $builder = $subquery->select('kecamatan')->where('nana_sekolah', $unit_kerja);
        $kecamatanuk = $builder->get();
        return $kecamatanuk->getResultArray();
    }

    public function search($keyword)
    {
        return $this->table('sekolah')->like('nama_sekolah', $keyword);
    }
}
