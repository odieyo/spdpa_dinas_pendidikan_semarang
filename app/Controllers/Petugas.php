<?php

namespace App\Controllers;

use App\Models\M_Pegawai;
use App\Models\M_Sekolah;
use App\Models\M_User;

class Petugas extends BaseController
{
    public function __construct()
    {
        $this->m_pegawai = new M_Pegawai();
        $this->m_sekolah = new M_Sekolah();
        $this->m_user = new M_User();
    }

    public function index()
    {

        $data = [
            'title' => 'Dashboard Petugas',
            'nama_user' => 'Petugas' #$this->M_User->getVar('nama_user')

        ];

        return view("petugas/dashboard_petugas", $data);
    }

    public function dataPegawai($jenjang)
    {
        $pegawai = $this->m_pegawai->getPegawai($jenjang);
        $data = [
            'title' => 'Data Pegawai ASN',
            'pegawai' => $pegawai,
            'jenjang' => $jenjang
        ];
        return view('petugas/b_dataPegawai', $data);
    }
    public function tambahPegawai($jenjang)
    {
        $uk = $this->m_sekolah->getUnitKerja($jenjang);
        $data = [
            'title' => 'Tambah Pegawai',
            'unit_kerja' => $uk,
            'jenjang' => $jenjang
        ];
        return view('petugas/b_formTambahPegawai', $data);
    }

    public function editPegawaiSD($slug)
    {
        $pegawai = $this->m_pegawai->getPegawai($slug);
        $data = [
            'title' => 'Ubah Pegawai',
            'pegawai' => $pegawai
        ];
        return view('petugas/b_formUbahPegawai', $data);
    }

    public function dataSekolah($jenjang)
    {
        $sekolah = $this->m_sekolah->getSekolah($jenjang);
        $data = [
            'title' => 'Data Sekolah',
            'sekolah' => $sekolah
        ];
        return view('petugas/b_dataSekolah', $data);
    }
    public function detailSD($slug)
    {
        $data = [
            'title' => 'Detail Sekolah Dasar',
            'sekolahdasar' => $this->M_SekolahDasar->getSekolahDasar($slug)
        ];
        if (empty($data['sd'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Sekolah' . $slug . 'tidak ditemukan.');
        };
        return view('petugas/b_formUbahSD', $data);
    }
    public function tambahSD()
    {
        $data = [
            'title' => 'Tambah Sekolah Dasar'
        ];
        return view('petugas/b_formTambahSD', $data);
    }
    public function simpanSD()
    {
        $slug = url_title($this->request->getVar('nama_sekolah'), "-", true);
        $this->M_SekolahDasar->save([
            'npsn' => $this->request->getVar('npsn'),
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'slug' => $slug,
            'kecamatan' => $this->request->getVar('kecamatan'),
            'alamat' => $this->request->getVar('alamat'),
            'rombel' => $this->request->getVar('rombel'),
            'kepala_sekolah' => $this->request->getVar('kepala_sekolah'),
            'guru_kelas' => $this->request->getVar('guru_kelas'),
            'guru_pai' => $this->request->getVar('guru_pai'),
            'guru_katholik' => $this->request->getVar('guru_katholik'),
            'guru_kristen' => $this->request->getVar('guru_kristen'),
            'guru_budha' => $this->request->getVar('guru_budha'),
            'guru_hindu' => $this->request->getVar('guru_hindu'),
            'guru_pjok' => $this->request->getVar('guru_pjok'),
            'guru_inklusi' => $this->request->getVar('guru_inklusi'),
            'pramu_bakti' => $this->request->getVar('pramu_bakti'),
            'penjaga_kebersihan' => $this->request->getVar('penjaga_kebersihan')
        ]);
        session()->setFlashdata('notifikasi', 'Sekolah berhasil ditambahkan.');
        return redirect()->to('/petugas/sd');
    }


    public function editSD($slug)
    {
        $data = [
            'title' => 'Ubah Sekolah Dasar',
            'sekolahdasar' => $this->M_SekolahDasar->getSekolahDasar($slug)
        ];
        return view('petugas/b_formUbahSD', $data);
    }

    public function menuLaporan()
    {
        $data = [
            'title' => 'Menu Laporan',
        ];

        return view("petugas/b_menuLaporan", $data);
    }

    public function lihatLaporan()
    {
        $data = [
            'title' => 'Lihat Laporan',
        ];

        return view("petugas/b_lihatLaporan", $data);
    }

    public function lihatLaporan2()
    {
        $sekolah = $this->m_sekolah->findAll();
        $data = [
            'title' => 'Laporan Sekolah',
            'sekolah' => $sekolah
        ];

        return view("petugas/b_lihatLaporan2", $data);
    }
}
