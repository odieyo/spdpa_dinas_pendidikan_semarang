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
        'jenis_jabatan', 'tugas_tambahan', 'status_kepeg', 'status', 'golongan',
        'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'agama',
        'nuptk', 'no_pes_sertif', 'nrg',
        'pend_terakhir', 'jurusan', 'no_hp', 'alamat',
        'ket', 'ket2', 'tmt', 'created_at', 'updated_at'
    ];
    protected $useTimestamps = true;
    protected $created_field = 'created_at';
    protected $updated_field = 'updated_at';


    public function listSekolah($jenjang)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $sd = $builder->where('jenjang', $jenjang)->orderBy('unit_kerja', 'asc');
        return $sd->get()->getResultArray();
    }
    public function getPegawai($slug)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $pegawai = $builder->getWhere(['slug' => $slug]);
        return $pegawai->getResultArray();
    }

    public function laporanPegawai($tgl_awal, $tgl_akhir, $jenjang)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pegawai');
        // $builder->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir);
        $data = [
            'hKS1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Kepala Sekolah')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hKS2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Kepala Sekolah')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hKS3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Kepala Sekolah')->like('status_kepeg', 'NON')->countAllResults(),
            'hGK1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Kelas')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hGK2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Kelas')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hGK3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Kelas')->like('status_kepeg', 'NON')->countAllResults(),
            'hIs1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Islam')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hIs2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Islam')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hIs3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Islam')->like('status_kepeg', 'NON')->countAllResults(),
            'hKr1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Kristen')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hKr2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Kristen')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hKr3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Kristen')->like('status_kepeg', 'NON')->countAllResults(),
            'hKa1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Katholik')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hKa2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Katholik')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hKa3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Katholik')->like('status_kepeg', 'NON')->countAllResults(),
            'hHi1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Hindu')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hHi2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Hindu')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hHi3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Hindu')->like('status_kepeg', 'NON')->countAllResults(),
            'hBu1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Budha')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hBu2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Budha')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hBu3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Agama Budha')->like('status_kepeg', 'NON')->countAllResults(),
            'hPjok1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Jasmani, Olah Raga dan Kesehatan')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hPjok2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Jasmani, Olah Raga dan Kesehatan')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hPjok3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Jasmani, Olah Raga dan Kesehatan')->like('status_kepeg', 'NON')->countAllResults(),
            'hIn1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Inklusi')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hIn2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Inklusi')->like('status_kepeg', 'PPPK')->like('status_kepeg', 'NON')->countAllResults(),
            'hIn3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Inklusi')->like('status_kepeg', 'NON')->countAllResults(),
            'hPb1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Tenaga Administrasi')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hPb2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Tenaga Administrasi')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hPb3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Tenaga Administrasi')->like('status_kepeg', 'NON')->countAllResults(),
            'hPk1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->like('jenis_jabatan', 'Penjaga Sekolah/Pramu Kebersihan')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hPk2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->like('jenis_jabatan', 'Penjaga Sekolah/Pramu Kebersihan')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hPk3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->like('jenis_jabatan', 'Penjaga Sekolah/Pramu Kebersihan')->like('status_kepeg', 'NON')->countAllResults(),
            'hipa1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Ilmu Pengetahuan Alam')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hipa2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Ilmu Pengetahuan Alam')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hipa3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Ilmu Pengetahuan Alam')->like('status_kepeg', 'NON')->countAllResults(),
            'hips1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Ilmu Pengetahuan Sosial')->like('status_kepeg', 'PNS')->countAllResults(),
            'hips2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Ilmu Pengetahuan Sosial')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hips3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Ilmu Pengetahuan Sosial')->like('status_kepeg', 'NON')->countAllResults(),
            'hsen1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Seni Budaya')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hsen2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Seni Budaya')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hsen3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Seni Budaya')->like('status_kepeg', 'NON')->countAllResults(),
            'htik1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Teknologi Informasi dan Komunikasi')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'htik2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Teknologi Informasi dan Komunikasi')->like('status_kepeg', 'PPPK')->countAllResults(),
            'htik3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Teknologi Informasi dan Komunikasi')->like('status_kepeg', 'NON')->countAllResults(),
            'hpkn1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Kewarganegaraan')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hpkn2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Kewarganegaraan')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hpkn3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Pendidikan Kewarganegaraan')->like('status_kepeg', 'NON')->countAllResults(),
            'hind1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Bahasa Indonesia')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hind2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Bahasa Indonesia')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hind3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Bahasa Indonesia')->like('status_kepeg', 'NON')->countAllResults(),
            'heng1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Bahasa Inggris')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'heng2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Bahasa Inggris')->like('status_kepeg', 'PPPK')->countAllResults(),
            'heng3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Bahasa Inggris')->like('status_kepeg', 'NON')->countAllResults(),
            'hmat1' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Matematika')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hmat2' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Matematika')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hmat3' => $builder->where('jenjang', $jenjang)->where('status', 'Aktif')->where('updated_at >=', $tgl_awal)->where('updated_at <=', $tgl_akhir)->where('jenis_jabatan', 'Guru Matematika')->like('status_kepeg', 'NON')->countAllResults(),
        ];
        return $data;
    }

    public function laporanSeb($tgl_awal, $jenjang)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pegawai');
        // $ntgl = date('Y-m-d', strtotime('-1 months', strtotime($tgl_awal)));
        // $builder->where('updated_at <', $tgl_awal)->where('status', 'Aktif');
        $data = [
            'sKs' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Kepala Sekolah')->countAllResults(),
            'sGk' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Kelas')->countAllResults(),
            'sIs' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Pendidikan Agama Islam')->countAllResults(),
            'sKa' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Pendidikan Agama Katholik')->countAllResults(),
            'sKr' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Pendidikan Agama Kristen')->countAllResults(),
            'sHi' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Pendidikan Agama Hindu')->countAllResults(),
            'sBu' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Pendidikan Agama Budha')->countAllResults(),
            'sPjok' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Pendidikan Jasmani, Olah Raga dan Kesehatan')->countAllResults(),
            'sIn' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Inklusi')->countAllResults(),
            'sPb' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Tenaga Administrasi')->countAllResults(),
            'sPk' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Penjaga Sekolah/Pramu Kebersihan')->countAllResults(),
            'sipa' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Ilmu Pengetahuan Alam')->countAllResults(),
            'sips' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Ilmu Pengetahuan Sosial')->countAllResults(),
            'ssen' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Seni Budaya')->countAllResults(),
            'stik' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Teknologi, Informasi dan Komunikasi')->countAllResults(),
            'spkn' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Pendidikan Kewarganegaraan')->countAllResults(),
            'sind' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Bahasa Indonesia')->countAllResults(),
            'seng' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Bahasa Inggris')->countAllResults(),
            'smat' => $builder->where('jenjang', $jenjang)->where('updated_at <', $tgl_awal)->where('status', 'Aktif')->like('jenis_jabatan', 'Guru Matematika')->countAllResults(),
        ];
        // return $ntgl;
        // return $q->get()->getResultArray();
        return $data;
    }

    public function isExistpgw($nik)
    {
        $builder = $this->builder();
        $query = $builder->where('nik', $nik)->get()->getFirstRow();
        if ($query != null) {
            return true;
        } else {
            return false;
        }
    }

    public function pegawaiN($npsn)
    {

        $db = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $pegawai = $builder->getWhere(['npsn' => $npsn]);
        // $pegawai = $builder->get()->where(['npsn' => $npsn]);
        //->like(['jenis_jabatan' => 'Kepala Sekolah']);
        // $nama_pegawai = $builder->get()->getResultArray();
        return $pegawai->getResultArray();
        // return $nama_pegawai;
    }

    public function getKS($npsn)
    {
        $builder = $this->db->table('pegawai');
        $builder->join('sekolah', 'sekolah.npsn = pegawai.npsn');
        $query = $builder->select('nama_pegawai')->where('pegawai.npsn', $npsn)->like('jenis_jabatan', 'Kepala Sekolah');
        // $query = $builder->select('nama_pegawai')->where('pegawai.npsn', $npsn);
        // $query = $builder->select('nama_pegawai')->like('jenis_jabatan', 'Kepala Sekolah');
        $a = $query->get()->getFirstRow();
        if ($a != null) {
            return $a->nama_pegawai;
        } else {
            return "Tidak Ada Kepala Sekolah";
        }
    }

    public function hitungKS($npsn)
    {
        $builder = $this->db->table('pegawai');
        $builder->join('sekolah', 'sekolah.npsn = pegawai.npsn');
        $query = $builder->where('pegawai.npsn', $npsn)->like('jenis_jabatan', 'Kepala Sekolah')->countAllResults();
        return $query;
    }

    public function hitungGuruKelas($npsn)
    {
        $builder = $this->db->table('pegawai');
        $builder->where('npsn', $npsn);
        $query = $builder->where('pegawai.jenis_jabatan', 'Guru Kelas');
        // $data1 = $query->where('pegawai.status_kepeg', 'PNS')->countAllResults();
        // $data2 = $query->where('pegawai.status_kepeg', 'PPPK')->countAllResults();
        // $data3 = $query->where('pegawai.status_kepeg', 'Non-PNS')->countAllResults();
        $data = [
            'gPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Kelas')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'gPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Kelas')->like('status_kepeg', 'PPPK')->countAllResults(),
            'gNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Kelas')->like('status_kepeg', 'NON')->countAllResults(),
        ];
        // dd($data);
        return $data;
    }
    public function hitungGuruAgama($npsn)
    {
        $builder = $this->db->table('pegawai');
        $builder->where('npsn', $npsn);
        // $query1 = $builder->where('pegawai.jenis_jabatan', 'Guru Pendidikan Agama Islam');
        // $query2 = $builder->where('pegawai.jenis_jabatan', 'Guru Agama Kristen');
        // $query3 = $builder->where('pegawai.jenis_jabatan', 'Guru Agama Katholik');
        // $query4 = $builder->where('pegawai.jenis_jabatan', 'Guru Agama Hindu');
        // $query5 = $builder->where('pegawai.jenis_jabatan', 'Guru Agama Budha');
        $data = [
            'isPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Islam')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'isPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Islam')->like('status_kepeg', 'PPPK')->countAllResults(),
            'isNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Islam')->like('status_kepeg', 'NON')->countAllResults(),
            'krPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Kristen')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'krPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Kristen')->like('status_kepeg', 'PPPK')->countAllResults(),
            'krNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Kristen')->like('status_kepeg', 'NON')->countAllResults(),
            'kaPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Katholik')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'kaPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Katholik')->like('status_kepeg', 'PPPK')->countAllResults(),
            'kaNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Katholik')->like('status_kepeg', 'NON')->countAllResults(),
            'hiPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Hindu')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'hiPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Hindu')->like('status_kepeg', 'PPPK')->countAllResults(),
            'hiNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Hindu')->like('status_kepeg', 'NON')->countAllResults(),
            'buPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Budha')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'buPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Budha')->like('status_kepeg', 'PPPK')->countAllResults(),
            'buNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Agama Budha')->like('status_kepeg', 'NON')->countAllResults(),
        ];
        return $data;
    }

    public function hitungGuruPelajaran($npsn)
    {
        $builder = $this->db->table('pegawai');
        $builder->where('npsn', $npsn);
        $query1 = $builder->where('pegawai.jenis_jabatan', 'Guru IPA');
        $query2 = $builder->where('pegawai.jenis_jabatan', 'Guru IPS');
        $query3 = $builder->where('pegawai.jenis_jabatan', 'Guru Seni Budaya');
        $query4 = $builder->where('pegawai.jenis_jabatan', 'Guru TIK');
        $query5 = $builder->where('pegawai.jenis_jabatan', 'Guru PKN');
        $query6 = $builder->where('pegawai.jenis_jabatan', 'Guru Bahasa Indonesia');
        $query7 = $builder->where('pegawai.jenis_jabatan', 'Guru Bahasa Inggris');
        $query8 = $builder->where('pegawai.jenis_jabatan', 'Guru Matematika');
        $data = [
            'ipaPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Ilmu Pengetahuan Alam')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'ipaPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Ilmu Pengetahuan Alam')->like('status_kepeg', 'PPPK')->countAllResults(),
            'ipaNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Ilmu Pengetahuan Alam')->like('status_kepeg', 'NON')->countAllResults(),
            'ipsPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Ilmu Pengetahuan Sosial')->like('status_kepeg', 'PNS')->countAllResults(),
            'ipsPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Ilmu Pengetahuan Sosial')->like('status_kepeg', 'PPPK')->countAllResults(),
            'ipsNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Ilmu Pengetahuan Sosial')->like('status_kepeg', 'NON')->countAllResults(),
            'senPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Seni Budaya')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'senPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Seni Budaya')->like('status_kepeg', 'PPPK')->countAllResults(),
            'senNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Seni Budaya')->like('status_kepeg', 'NON')->countAllResults(),
            'tikPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Teknologi Informasi dan Komunikasi')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'tikPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Teknologi Informasi dan Komunikasi')->like('status_kepeg', 'PPPK')->countAllResults(),
            'tikNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Teknologi Informasi dan Komunikasi')->like('status_kepeg', 'NON')->countAllResults(),
            'pknPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Kewarganegaraan')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'pknPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Kewarganegaraan')->like('status_kepeg', 'PPPK')->countAllResults(),
            'pknNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Kewarganegaraan')->like('status_kepeg', 'NON')->countAllResults(),
            'indPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Bahasa Indonesia')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'indPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Bahasa Indonesia')->like('status_kepeg', 'PPPK')->countAllResults(),
            'indNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Bahasa Indonesia')->like('status_kepeg', 'NON')->countAllResults(),
            'engPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Bahasa Inggris')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'engPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Bahasa Inggris')->like('status_kepeg', 'PPPK')->countAllResults(),
            'engNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Bahasa Inggris')->like('status_kepeg', 'NON')->countAllResults(),
            'matPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Matematika')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'matPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Matematika')->like('status_kepeg', 'PPPK')->countAllResults(),
            'matNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Matematika')->like('status_kepeg', 'NON')->countAllResults(),
        ];
        return $data;
    }

    public function hitungGuruPJOK($npsn)
    {
        $builder = $this->db->table('pegawai');
        $builder->where('npsn', $npsn);
        // $query = $builder->where('pegawai.jenis_jabatan', 'Guru Pendidikan Jasmani, Olah Raga dan Kesehatan');
        $data = [
            'gPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Jasmani, Olah Raga dan Kesehatan')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'gPPPK' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Jasmani, Olah Raga dan Kesehatan')->like('status_kepeg', 'PPPK')->countAllResults(),
            'gNonPNS' => $builder->where('npsn', $npsn)->where('jenis_jabatan', 'Guru Pendidikan Jasmani, Olah Raga dan Kesehatan')->like('status_kepeg', 'NON')->countAllResults(),
        ];
        // dd($data);
        return $data;
    }
    public function hitungGuruInklusi($npsn)
    {
        $builder = $this->db->table('pegawai');
        $builder->where('npsn', $npsn);
        $query = $builder->where('pegawai.jenis_jabatan', 'Guru Inklusi')->countAllResults();
        return $query;
    }
    public function hitungTenagaPendidik($npsn)
    {
        $builder = $this->db->table('pegawai');
        $builder->where('npsn', $npsn);;
        // $query1 = $builder->like('jenis_jabatan', 'Tenaga Administrasi');
        // $query2 = $builder->like('jenis_jabatan', 'Penjaga Sekolah/Pramu Kebersihan');
        $data = [
            'pbPNS' => $builder->where('npsn', $npsn)->like('jenis_jabatan', 'Tenaga Administrasi')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'pbNonPNS' => $builder->where('npsn', $npsn)->like('jenis_jabatan', 'Tenaga Administrasi')->like('status_kepeg', 'NON')->countAllResults(),
            'pkPNS' => $builder->where('npsn', $npsn)->like('jenis_jabatan', 'Penjaga Sekolah/Pramu Kebersihan')->like('status_kepeg', 'PNS', 'before')->notlike('status_kepeg', 'NON')->countAllResults(),
            'pkNonPNS' => $builder->where('npsn', $npsn)->like('jenis_jabatan', 'Penjaga Sekolah/Pramu Kebersihan')->like('status_kepeg', 'NON')->countAllResults(),
        ];
        return $data;
    }

    public function jns($jenjang, $keyword = null)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $pegawai = $this->builder()->where('jenjang', $jenjang);
        if ($keyword != '') {
            $pegawai->like('unit_kerja', $keyword);
            $pegawai->orlike('nama_pegawai', $keyword);
            $pegawai->orlike('jenis_jabatan', $keyword);
            $pegawai->orlike('status_kepeg', $keyword);
            $pegawai->orlike('status', $keyword);
        }
        return $pegawai;
    }



    public function getNIK($slug)
    {
        $db      = \Config\Database::connect();
        $sql = "SELECT * FROM `pegawai` where slug= :slug:";
        $query = $db->query($sql, [
            'slug' => $slug
        ]);

        return $query->getFirstRow('array');
    }

    public function getJabatan($jenjang)
    {
        $db      = \Config\Database::connect();
        $sql = "SELECT nama_pegawai, jenis_jabatan FROM `pegawai` where jenjang= :jenjang:";
        $query = $db->query($sql, ['jenjang' => $jenjang]);
        return $query->getResult('array');
    }

    public function getJenjangPegawai($nik)
    {
        $db      = \Config\Database::connect();
        $sql = "SELECT * FROM `pegawai` where nik= :nik:";
        $query = $db->query($sql, [
            'nik' => $nik
        ]);

        return $query->getFirstRow('array');
    }
    public function siJenjang($jenjang)
    {
        // $db      = \Config\Database::connect();
        $builder = $this->builder();
        $builder->where('jenjang', $jenjang);
        // $builder = $db->table('pegawai')->where('jenjang', $jenjang);
        // $this->builder()->where('jenjang', $jenjang)->like('jenjang', $jenjang);
        return $this;
    }
    public function getPaginated($num, $jenjang, $keyword = null)
    {
        // $db      = \Config\Database::connect();
        // $builder = $db->table('pegawai');
        // $query = $builder->where('jenjang', $jenjang);
        $query = $this->builder();
        if (($keyword != '')) {
            $query->like('unit_kerja', $keyword);
            $query->orlike('nama_pegawai', $keyword);
            $query->orlike('jenis_jabatan', $keyword);
            $query->orlike('ket', $keyword);
            $query->orlike('ket2', $keyword);
            $query->orlike('tmt', $keyword);
            if (($keyword == 'aktif') || ($keyword == 'pns')) {
                $query->where('jenjang', $jenjang)->orlike('status', 'Aktif')->notLike('status', 'Non-Aktif');
                $query->orlike('status_kepeg', 'PNS')->notLike('status_kepeg', 'Non-PNS')->notLike('status_kepeg', 'PPPK');
            } else {
                $query->orlike('status', $keyword);
                $query->orlike('status_kepeg', $keyword);
            }
        }


        $pegawai = $this->siJenjang($jenjang)->paginate($num);

        return $pegawai;
    }
    public function getJenjangPegawaiS($slug)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $jenjang = $builder->getWhere(['slug' => $slug]);
        foreach ($jenjang->getResultArray() as $jenjangpgw) {
            return $jenjangpgw['jenjang'];
        }
    }

    public function hitungPegawai()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $jml_pgw = $builder->where('status', 'Aktif')->countAllResults();
        return $jml_pgw;
    }
    public function hitungNonPegawai()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $jml_pgw = $builder->where('status', 'Non-Aktif');
        return $jml_pgw->countAllResults();
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
        $db      = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $builder->like('unit_kerja', $keyword);
        $builder->like('nama_pegawai', $keyword);
        $builder->orlike('jenis_jabatan', $keyword);
        $builder->orlike('status_kepeg', $keyword);
        $builder->orlike('status', $keyword);
        return $this;
    }

    public function cekNIK($nik)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('pegawai');
        $pegawai = $builder->getWhere(['nik' => $nik]);
        foreach ($pegawai as $pgw) {
            $nikold = $pegawai['nik'];
        }
        if ($nikold == $this->request->getVar('nik')) {
            $rule_nik = 'required|max_length[16]|min_length[16]|numeric';
        } else {
            $rule_nik = 'required|max_length[16]|min_length[16]|is_unique[pegawai.nik]|numeric';
        }
        return $rule_nik;
    }

    public function getMutasi($nik)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('mutasi1')->orderBy('created_at DESC');
        $mutasi = $builder->getWhere(['id_pegawai' => $nik]);
        return $mutasi->getResultArray();
    }

    public function saveMutasi($nik, $jenis_jabatan, $unit_kerja)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('mutasi1');
        $builder->set('id_pegawai', $nik);
        $builder->set('jabatan', $jenis_jabatan);
        $builder->set('uk', $unit_kerja);
        $builder->insert();
    }
}
