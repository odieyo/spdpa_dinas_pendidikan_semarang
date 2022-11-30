<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Sekolah extends Model
{
    protected $table = 'sekolah';
    protected $primaryKey = 'npsn';
    protected $allowedFields = [
        'npsn', 'nama_sekolah', 'slug', 'alamat', 'kecamatan',
        'jenjang', 'rombel', 'kepala_sekolah', 'guru_kelas', 'guru_pai',
        'guru_katholik', 'guru_kristen', 'guru_budha', 'guru_hindu',
        'guru_ipa', 'guru_ips', 'guru_senbud', 'guru_tik', 'guru_pkn',
        'guru_indo', 'guru_eng', 'guru_mat',
        'guru_pjok', 'guru_inklusi', 'pramu_bakti', 'penjaga_kebersihan'
    ];

    public function getSekolah($jenjang)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('sekolah');
        $sd = $builder->where(['jenjang' => $jenjang])->orderBy('nama_sekolah', 'asc');
        return $sd->get()->getResultArray();
    }
    public function hitungSekolah()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('sekolah');
        $jml_skl = $builder->countAll();
        return $jml_skl;
    }

    public function laporanSekolah($jenjang)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('sekolah');
        // $sd = $builder->where('jenjang', $jenjang);

        $data = [
            'ks' => $builder->where('jenjang', $jenjang)->selectsum('kepala_sekolah')->get()->getFirstRow(),
            'gk' => $builder->where('jenjang', $jenjang)->selectsum('guru_kelas')->get()->getFirstRow(),
            'is' => $builder->where('jenjang', $jenjang)->selectsum('guru_pai')->get()->getFirstRow(),
            'ka' => $builder->where('jenjang', $jenjang)->selectsum('guru_katholik')->get()->getFirstRow(),
            'kr' => $builder->where('jenjang', $jenjang)->selectsum('guru_kristen')->get()->getFirstRow(),
            'hi' => $builder->where('jenjang', $jenjang)->selectsum('guru_hindu')->get()->getFirstRow(),
            'bu' => $builder->where('jenjang', $jenjang)->selectsum('guru_budha')->get()->getFirstRow(),
            'pjok' => $builder->where('jenjang', $jenjang)->selectsum('guru_pjok')->get()->getFirstRow(),
            'in' => $builder->where('jenjang', $jenjang)->selectsum('guru_inklusi')->get()->getFirstRow(),
            'pb' => $builder->where('jenjang', $jenjang)->selectsum('pramu_bakti')->get()->getFirstRow(),
            'pk' => $builder->where('jenjang', $jenjang)->selectsum('penjaga_kebersihan')->get()->getFirstRow(),
            'ipa' => $builder->where('jenjang', $jenjang)->selectsum('guru_ipa')->get()->getFirstRow(),
            'ips' => $builder->where('jenjang', $jenjang)->selectsum('guru_ips')->get()->getFirstRow(),
            'sen' => $builder->where('jenjang', $jenjang)->selectsum('guru_senbud')->get()->getFirstRow(),
            'tik' => $builder->where('jenjang', $jenjang)->selectsum('guru_tik')->get()->getFirstRow(),
            'pkn' => $builder->where('jenjang', $jenjang)->selectsum('guru_pkn')->get()->getFirstRow(),
            'ind' => $builder->where('jenjang', $jenjang)->selectsum('guru_indo')->get()->getFirstRow(),
            'eng' => $builder->where('jenjang', $jenjang)->selectsum('guru_eng')->get()->getFirstRow(),
            'mat' => $builder->where('jenjang', $jenjang)->selectsum('guru_mat')->get()->getFirstRow(),
        ];
        return $data;
    }

    public function isExist($npsn)
    {
        $builder = $this->builder();
        $query = $builder->where('npsn', $npsn)->get()->getFirstRow();
        if ($query != null) {
            return true;
        } else {
            return false;
        }
    }

    public function getSekolahS($slug)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('sekolah');
        $sd = $builder->getWhere(['slug' => $slug]);
        return $sd->getResultArray();
    }


    public function getUnitKerja($jenjang)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('sekolah');
        $unit_kerja = $builder->Where('jenjang', $jenjang)->orderBy('nama_sekolah', 'ASC');
        return $unit_kerja->get()->getResultArray();
    }

    public function getJenjang($slug)
    {
        $db      = \Config\Database::connect();
        $sql = "SELECT * FROM `sekolah` where slug= :slug:";
        $query = $db->query($sql, [
            'slug' => $slug
        ]);
        $jenjang = $query->getFirstRow('array');
        return $jenjang['jenjang'];
    }
    public function getNPSN1($slug)
    {
        $db      = \Config\Database::connect();
        $sql = "SELECT * FROM `sekolah` where slug= :slug:";
        $query = $db->query($sql, [
            'slug' => $slug
        ]);
        $npsn = $query->getFirstRow('array');
        return $npsn['npsn'];
    }


    public function siJenjang($jenjang)
    {
        $db      = \Config\Database::connect();
        $builder = $this->builder();
        $builder->where('jenjang', $jenjang);
        return $this;
    }

    public function siKS($npsn)
    {
        $builder = $this->builder();
        $builder->select('nama_pegawai')->join('pegawai', 'pegawai.npsn = sekolah.npsn');
        return $this;
    }

    public function getPaginated($num, $jenjang, $keyword = null)
    {
        $db      = \Config\Database::connect();
        // $builder = $db->table('pegawai');
        $builder = $db->table('sekolah');
        // $query = $builder->where(['jenjang' => $jenjang]);

        if ($keyword != '') {
            $builder->like('npsn', $keyword);
            $builder->orlike('nama_sekolah', $keyword);
            $builder->orlike('kecamatan', $keyword);
            $builder->orlike('slug', $keyword);
        }

        // $npsn =  $builder->get('npsn')->getResultArray();

        // if ($keyword == 'Aktif') {
        //     $builder->get('status', 'Aktif');
        // }

        $data =  $this->siJenjang($jenjang)->paginate($num);

        return $data;
    }

    public function getPaginated2($num, $jenjang, $keyword = null)
    {
        $db      = \Config\Database::connect();
        $builder = $this->db->table('sekolah');

        $builder->where('jenjang', $jenjang);
        if ($keyword != '') {
            $builder->like('nama_sekolah', $keyword)
                ->orlike('kecamatan', $keyword)
                ->orlike('slug', $keyword);
        }

        dd($builder->get()->getResultArray());
    }



    public function selectSekolah($npsn)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('sekolah');
        $query = $builder->getWhere(['npsn' => $npsn]);
        return $query->getFirstRow();
    }

    public function selectSekolah2($npsn)
    {
        $db      = \Config\Database::connect();
        $sql = "SELECT * FROM `sekolah` where npsn= :npsn:";
        $query = $db->query($sql, [
            'npsn' => $npsn
        ]);

        return $query->getFirstRow('array'); //
    }

    public function getNPSN($jenjang)
    {
        $db      = \Config\Database::connect();
        $sql = "SELECT * FROM `sekolah` where jenjang= :jenjang:";
        $query = $db->query($sql, [
            'jenjang' => $jenjang
        ]);
        $sekolah = $query->getResult('array');
        return $sekolah;
    }

    public function selectNPSN($uk)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('sekolah');
        $query = $builder->getWhere(['nama_sekolah' => $uk]);
        $npsn = $query['npsn'];
        return $npsn->getResult();
    }
    public function selectKecamatan($uk)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('sekolah');
        $query = $builder->getWhere(['nama_sekolah' => $uk]);
        foreach ($query as $q) {
            $kecamatan = $q['kecamatan'];
        }
        return $kecamatan->getResultArray();
    }
    public function getUnitKerjaS($slug, $jenjang)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('sekolah');
        $unit_kerja = $builder->getWhere(['slug' => $slug, 'jenjang' => $jenjang]);
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
