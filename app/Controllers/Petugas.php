<?php

namespace App\Controllers;

// require 'vendor/autoload.php';
// require_once 'dompdf/autoload.inc.php';

use CodeIgniter\Controller\get_instance;
use App\Models\M_Pegawai;
use App\Models\M_Sekolah;
use App\Models\M_User;
use App\Controllers\Auth;
use PhpParser\Node\Stmt\Echo_;
use \Dompdf\Dompdf;
use CodeIgniter\HTTP\IncomingRequest;

/**
 *@property IncomingRequest $request
 */

class Petugas extends BaseController
{
    public function __construct()
    {
        $this->m_pegawai = new M_Pegawai();
        $this->m_sekolah = new M_Sekolah();
        $this->m_user = new M_User();
        $this->session = session();
        // $this->pager = \Config\Services::pager();
    }

    public function index()
    {
        if ($this->session->role == "Admin") {
            return redirect()->to(site_url('admin'));
        }
        $jml_pgw = $this->m_pegawai->hitungPegawai();
        $non_pgw = $this->m_pegawai->hitungNonPegawai();
        $jml_skl = $this->m_sekolah->hitungSekolah();
        // $id_user = $this->session->id_user;
        $data = [
            'title' => 'Dashboard Petugas',
            'nama_user' => $this->session->nama_user,
            'akses' => $this->session->role,
            'jml_pgw' => $jml_pgw,
            'non_pgw' => $non_pgw,
            'jml_skl' => $jml_skl,
        ];

        return view("petugas/dashboard_petugas", $data);
    }

    public function dataPegawai($jenjang)
    {
        if ($jenjang == "TK") {
            $nama_jenjang = "Taman Kanak-Kanak";
        } else if ($jenjang == "SD") {
            $nama_jenjang = "Sekolah Dasar";
        } else {
            $nama_jenjang = "Sekolah Menengah Pertama";
        }
        $currentPage = $this->request->getVar('page_dataPegawai') ? $this->request->getVar('page_dataPegawai') : 1;
        $pegawai = $this->m_pegawai->listSekolah($jenjang);

        $data = [
            'title' => 'Data Pegawai ASN',
            'pegawai' => $pegawai,
            'jenjang' => $jenjang,
            'nama_jenjang' => $nama_jenjang,
        ];
        return view('petugas/b_dataPegawai', $data);
    }
    public function tambahPegawai($jenjang)
    {
        // session();
        $uk = $this->m_sekolah->getUnitKerja($jenjang);
        $data = [
            'title' => 'Tambah Pegawai',
            'unit_kerja' => $uk,
            'jenjang' => $jenjang,
            'validation' => \Config\Services::validation()
        ];
        return view('petugas/b_formTambahPegawai', $data);
    }

    public function simpanPegawai()
    {
        // Validasi
        $slug = url_title($this->request->getVar('nama_pegawai'), "-", true);
        $jenjang = $this->request->getVar('jenjang');
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|max_length[16]|min_length[16]|is_unique[pegawai.nik]|numeric',
                'errors' => [
                    'required' => 'Kolom wajib diisi.',
                    'min_length' => 'NIK terdiri dari 16 angka.',
                    'max_length' => 'NIK terdiri dari 16 angka.',
                    'is_unique' => 'NIK sudah terdaftar',
                    'numeric' => 'NIK berupa angka'
                ]
            ],
            'nama_pegawai' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'unit_kerja' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'jenis_jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'status_kepeg' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'golongan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'pend_terakhir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'no_hp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            // 'nip' => [
            //     'rules' => 'numeric',
            //     'errors' => [
            //         'numeric' => 'NIP hanya berupa angka'
            //     ]
            // ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(previous_url())->withInput()->with('validation', $validation);
        }

        $uk = $this->request->getVar('unit_kerja');

        $skl = $this->m_sekolah->selectSekolah2($uk);
        // foreach ($skl as $k) {
        $npsn = $skl['npsn'];
        $nama = $skl['nama_sekolah'];
        // }
        $kecamatan = $skl['kecamatan'];
        $jenjang = $skl['jenjang'];
        // 

        $data = [
            'nik' => $this->request->getVar('nik'),
            'nama_pegawai' => $this->request->getVar('nama_pegawai'),
            'slug' => $slug,
            'nip' => $this->request->getVar('nip'),
            'unit_kerja' => $nama,
            'npsn' => $npsn,
            'kecamatan' => $kecamatan,
            'jenjang' => $jenjang,

            'jenis_jabatan' => $this->request->getVar('jenis_jabatan'),
            'tugas_tambahan' => $this->request->getVar('tugas_tambahan'),
            'status_kepeg' => $this->request->getVar('status_kepeg'),
            'status' => $this->request->getVar('status'),
            'golongan' => $this->request->getVar('golongan'),

            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'agama' => $this->request->getVar('agama'),
            'nuptk' => $this->request->getVar('nuptk'),
            'no_pes_sertif' => $this->request->getVar('no_pes_sertif'),
            'nrg' => $this->request->getVar('nrg'),
            'pend_terakhir' => $this->request->getVar('pend_terakhir'),
            'jurusan' => $this->request->getVar('jurusan'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'ket' => $this->request->getVar('ket'),
            'ket2' => $this->request->getVar('ket2'),
            'tmt' => $this->request->getVar('tmt')
        ];
        $this->m_pegawai->insert($data);
        session()->setFlashdata('pesan', 'Pegawai berhasil ditambahkan.');

        if ($jenjang == "TK") {
            return redirect()->to('petugas/pegawai/tk');
        } else if ($jenjang == "SD") {
            return redirect()->to('petugas/pegawai/sd');
        } else {
            return redirect()->to('petugas/pegawai/smp');
        }
    }

    public function profilPegawai($slug)
    {
        $jenjang = $this->m_pegawai->getJenjangPegawaiS($slug);
        $pegawai = $this->m_pegawai->getPegawai($slug);
        foreach ($pegawai as $pgw) {
            $nik = $pgw['nik'];
        }
        $mutasi = $this->m_pegawai->getMutasi($nik);

        $data = [
            'title' => "Profil Pegawai",
            'jenjang' => $jenjang,
            'pegawai' => $pegawai,
            'mutasi' => $mutasi
        ];

        return view('petugas/b_profilPegawai', $data);
    }

    public function editPegawai($slug)
    {
        $jenjang = $this->m_pegawai->getJenjangPegawaiS($slug);
        $unit_kerja = $this->m_sekolah->getUnitKerja($jenjang);
        if ($jenjang == "TK") {
            $nama_jenjang = "Taman Kanak-Kanak";
        } else if ($jenjang == "SD") {
            $nama_jenjang = "Sekolah Dasar";
        } else {
            $nama_jenjang = "Sekolah Menengah Pertama";
        }
        $data = [
            'title' => 'Ubah Pegawai',
            'nama_jenjang' => $nama_jenjang,
            'jenjang' => strtolower($jenjang),
            'unit_kerja' => $unit_kerja,
            'validation' => \Config\Services::validation(),
            'pegawai' => $this->m_pegawai->getPegawai($slug),
            'slug' => $slug
        ];
        return view('petugas/b_formUbahPegawai1', $data);
    }

    public function updatePegawai($nik)
    {
        //Cek NIK
        $slug = $this->request->getVar('slug');
        $oldpgw = $this->m_pegawai->getNIK($slug);
        $old_nik = $oldpgw['nik'];
        if ($old_nik == $this->request->getVar('nik')) {
            $rule_nik = 'required|max_length[16]|min_length[16]|numeric';
        } else {
            $rule_nik = 'required|max_length[16]|min_length[16]|is_unique[pegawai.nik]|numeric';
        }

        // Validasi
        $new_slug = url_title($this->request->getVar('nama_pegawai'), "-", true);
        $npsn = $this->request->getVar('unit_kerja');
        $skl = $this->m_sekolah->selectSekolah2($npsn);
        $uk = $skl['nama_sekolah'];
        $kecamatan = $skl['kecamatan'];
        $jenjang = $skl['jenjang'];

        if (!$this->validate([
            'nik' => [
                'rules' => $rule_nik,
                'errors' => [
                    'required' => 'Kolom wajib diisi.',
                    'min_length' => 'NIK terdiri dari 16 angka.',
                    'max_length' => 'NIK terdiri dari 16 angka.',
                    'is_unique' => 'NIK sudah terdaftar',
                    'numeric' => 'NIK berupa angka'
                ]
            ],
            'nama_pegawai' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'unit_kerja' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'jenis_jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'status_kepeg' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'golongan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'pend_terakhir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'no_hp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            // 'nip' => [
            //     'rules' => 'numeric',
            //     'errors' => [
            //         'numeric' => 'NIP hanya berupa angka'
            //     ]
            // ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/petugas/pegawai/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $this->m_pegawai->save([
            'nik' => $this->request->getVar('nik'),
            'nama_pegawai' => $this->request->getVar('nama_pegawai'),
            'slug' => $this->request->getVar('slug'),
            'nip' => $this->request->getVar('nip'),
            'unit_kerja' => $uk,
            'npsn' => $npsn,
            'kecamatan' => $kecamatan,
            'jenjang' => $jenjang,
            'jenis_jabatan' => $this->request->getVar('jenis_jabatan'),
            'tugas_tambahan' => $this->request->getVar('tugas_tambahan'),
            'status_kepeg' => $this->request->getVar('status_kepeg'),
            'status' => $this->request->getVar('status'),
            'golongan' => $this->request->getVar('golongan'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'agama' => $this->request->getVar('agama'),
            'nuptk' => $this->request->getVar('nuptk'),
            'no_pes_sertif' => $this->request->getVar('no_pes_sertif'),
            'nrg' => $this->request->getVar('nrg'),
            'pend_terakhir' => $this->request->getVar('pend_terakhir'),
            'jurusan' => $this->request->getVar('jurusan'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'ket' => $this->request->getVar('ket'),
            'ket2' => $this->request->getVar('ket2'),
            'tmt' => $this->request->getVar('tmt')
        ]);

        $jenis_jabatan = $oldpgw['jenis_jabatan'];
        $uk = $oldpgw['unit_kerja'];
        if (($this->request->getVar('jenis_jabatan') != $jenis_jabatan) || ($this->request->getVar('unit_kerja') != $uk)) {
            $this->m_pegawai->saveMutasi($nik, $jenis_jabatan, $uk);
        }

        // $new_nik = $this->request->getVar('nik');
        // $data = [
        //     'nik' => $new_nik
        // ];
        // $this->m_pegawai->replace($data);



        session()->setFlashdata('pesan', 'Pegawai berhasil diubah.');

        if ($jenjang == "TK") {
            return redirect()->to('petugas/pegawai/tk');
        } else if ($jenjang == "SD") {
            return redirect()->to('petugas/pegawai/sd');
        } else {
            return redirect()->to('petugas/pegawai/smp');
        }
    }

    public function hapusPegawai($nik)
    {
        $jenjang = $this->m_pegawai->getJenjangPegawai($nik);
        $this->m_pegawai->delete($nik);
        session()->setFlashdata('pesan', 'Pegawai berhasil dihapus');
        return redirect()->to(previous_url());
        // if ($jenjang == "TK") {
        //     return redirect()->to('petugas/pegawai/tk');
        // } else if ($jenjang == "SD") {
        //     return redirect()->to('petugas/pegawai/sd');
        // } else {
        //     return redirect()->to('petugas/pegawai/smp');
        // }
    }



    public function ajaxSearch()
    {
        $db      = \Config\Database::connect();
        if ($this->request->isAjax()) {
            $caridata = $this->request->getVar('search');
            $sekolah = $this->db->table('sekolah')->like('nama_sekolah', $caridata)->get();
            if ($sekolah->getNumRows() > 0) {
                $data = [];
                $key = 0;
                foreach ($sekolah->getResultArray() as $row) {
                    $data[$key]['id'] = $row['npsn'];
                    $data[$key]['text'] = $row['nama_sekolah'];
                    $key++;
                }
                echo json_encode($data);
            }
        }

        json_encode($data);
    }

    public function dataSekolah($jenjang)
    {
        $currentPage = $this->request->getVar('page_dataSekolah') ? $this->request->getVar('page_dataSekolah') : 1;
        $keyword = $this->request->getGet('keyword');

        // $listjabalocalocalosajdtan = $this->m_pegawai->getJabatan($jenjang);
        $sekolah = $this->m_sekolah->getSekolah($jenjang);
        $data = [
            'title' => 'Data Sekolah',
            'sekolah' => $sekolah,
            // 'sekolah' => $this->m_sekolah->paginate(10),
            'pager' => $this->m_sekolah->pager,
            'jenjang' => $jenjang,
            'currentPage' => $currentPage,
            'keyword' => $keyword
        ];

        if ($jenjang == "TK") {
            return view('petugas/b_dataSekolah_tk', $data);
        } else if ($jenjang == "SD") {
            return view('petugas/b_dataSekolah_sd', $data);
        } else {
            return view('petugas/b_dataSekolah_smp', $data);
        }
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
    public function tambahSekolah($jenjang)
    {
        $data = [
            'title' => 'Tambah Sekolah',
            'validation' => \Config\Services::validation()
        ];
        if ($jenjang == "TK") {
            return view('petugas/b_formTambahSekolah_tk', $data);
        } else if ($jenjang == "SD") {
            return view('petugas/b_formTambahSekolah_sd', $data);
        } else {
            return view('petugas/b_formTambahSekolah_smp', $data);
        }
    }
    public function simpanSekolah()
    {
        $slug = url_title($this->request->getVar('nama_sekolah'), "-", true);
        $jenjang = $this->request->getVar('jenjang');

        //  Validasi Form Sekolah
        if (!$this->validate([
            'npsn' => [
                'rules' => 'required|max_length[8]|min_length[8]|is_unique[sekolah.npsn]|numeric',
                'errors' => [
                    'required' => 'Kolom wajib diisi.',
                    'min_length' => 'NPSN terdiri dari 8 angka.',
                    'max_length' => 'NPSN terdiri dari 8 angka.',
                    'is_unique' => 'NPSN sudah terdaftar',
                    'numeric' => 'NPSN berupa angka'
                ]
            ],
            'nama_sekolah' => [
                'rules' => 'required|is_unique[sekolah.nama_sekolah]',
                'errors' => [
                    'required' => 'Kolom wajib diisi.',
                    'is_unique' => 'Nama Sekolah telah terdaftar'
                ]
            ],

            'kecamatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'rombel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(previous_url())->withInput()->with('validation', $validation);
        }

        // Masukkin Data 
        $this->m_sekolah->insert($data = [
            'npsn' => $this->request->getVar('npsn'),
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'slug' => $slug,
            'kecamatan' => $this->request->getVar('kecamatan'),
            'jenjang' => $this->request->getVar('jenjang'),
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
            'guru_ipa' => $this->request->getVar('guru_ipa'),
            'guru_ips' => $this->request->getVar('guru_ips'),
            'guru_senbud' => $this->request->getVar('guru_senbud'),
            'guru_tik' => $this->request->getVar('guru_tik'),
            'guru_pkn' => $this->request->getVar('guru_pkn'),
            'guru_indo' => $this->request->getVar('guru_indo'),
            'guru_eng' => $this->request->getVar('guru_eng'),
            'guru_mat' => $this->request->getVar('guru_mat'),
            'pramu_bakti' => $this->request->getVar('pramu_bakti'),
            'penjaga_kebersihan' => $this->request->getVar('penjaga_kebersihan')
        ]);

        session()->setFlashdata('notifikasi', 'Sekolah berhasil ditambahkan.');

        // Kembali ke Halaman Sekolah
        if ($jenjang == "TK") {
            return redirect()->to('petugas/tk')->withInput();
        } else if ($jenjang == "SD") {
            return redirect()->to('petugas/sd')->withInput();
        } else {
            return redirect()->to('petugas/smp')->withInput();
        }
    }


    public function editSekolah($slug)
    {
        $jenjang = $this->m_sekolah->getJenjang($slug);

        $data = [
            'title' => 'Ubah Sekolah',
            'validation' => \Config\Services::validation(),
            'sekolah' => $this->m_sekolah->getSekolahS($slug),
            'slug' => $slug
        ];
        if ($jenjang == "TK") {
            return view('petugas/b_formUbahSekolah_tk', $data);
        } else if ($jenjang == "SD") {
            return view('petugas/b_formUbahSekolah_sd', $data);
        } else {
            return view('petugas/b_formUbahSekolah_smp', $data);
        }
    }

    public function updateSekolah($npsn)
    {
        // Cek NPSN
        $slug = $this->request->getVar('slug');
        $old_skl = $this->m_sekolah->getNPSN1($slug);
        if ($old_skl == $this->request->getVar('npsn')) {
            $rule_npsn = 'required|max_length[8]|min_length[8]|numeric';
        } else {
            $rule_npsn = 'required|max_length[8]|min_length[8]|is_unique[pegawai.nik]|numeric';
        }
        if (!$this->validate([
            'npsn' => [
                'rules' => $rule_npsn,
                'errors' => [
                    'required' => 'Kolom wajib diisi.',
                    'min_length' => 'NPSN terdiri dari 8 angka.',
                    'max_length' => 'NPSN terdiri dari 8 angka.',
                    'is_unique' => 'NPSN sudah terdaftar',
                    'numeric' => 'NPSN berupa angka'
                ]
            ],
            'nama_sekolah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.',
                    'is_unique' => 'Nama Sekolah telah terdaftar'
                ]
            ],
            'kecamatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],
            'rombel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom wajib diisi.'
                ]
            ],

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(previous_url())->withInput()->with('validation', $validation);
        }

        $this->m_sekolah->save($data = [
            'npsn' => $this->request->getVar('npsn'),
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'slug' => $slug,
            'kecamatan' => $this->request->getVar('kecamatan'),
            'jenjang' => $this->request->getVar('jenjang'),
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
            'guru_ipa' => $this->request->getVar('guru_ipa'),
            'guru_ips' => $this->request->getVar('guru_ips'),
            'guru_senbud' => $this->request->getVar('guru_senbud'),
            'guru_tik' => $this->request->getVar('guru_tik'),
            'guru_pkn' => $this->request->getVar('guru_pkn'),
            'guru_indo' => $this->request->getVar('guru_indo'),
            'guru_eng' => $this->request->getVar('guru_eng'),
            'guru_mat' => $this->request->getVar('guru_mat'),
            'pramu_bakti' => $this->request->getVar('pramu_bakti'),
            'penjaga_kebersihan' => $this->request->getVar('penjaga_kebersihan')
        ]);

        session()->setFlashdata('notifikasi', 'Sekolah berhasil diubah.');

        $jenjang = $this->request->getVar('jenjang');
        // Kembali ke Halaman Sekolah
        if ($jenjang == "TK") {
            return redirect()->to('petugas/tk')->withInput();
        } else if ($jenjang == "SD") {
            return redirect()->to('petugas/sd')->withInput();
        } else {
            return redirect()->to('petugas/smp')->withInput();
        }
    }

    public function hapusSekolah($npsn)
    {
        // $jenjang = $this->m_sekolah->getJenjangN($npsn);
        // Cek apakah dipake oleh pegawai?
        $this->m_sekolah->delete($npsn);
        session()->setFlashdata('notifikasi', 'Sekolah berhasil dihapus');
        return redirect()->to(previous_url());
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
        $tgl_awal = $this->request->getVar('tanggal_awal');
        $tgl_akhir = $this->request->getVar('tanggal_akhir');
        $jenjang = $this->request->getVar('kategori');
        $hpegawai = $this->m_pegawai->laporanPegawai($tgl_awal, $tgl_akhir, $jenjang);
        $spegawai = $this->m_pegawai->laporanSeb($tgl_awal, $jenjang);
        $sekolah = $this->m_sekolah->laporanSekolah($jenjang);
        $data = [
            'title' => 'Lihat Laporan',
            'hpegawai' => $hpegawai,
            'spegawai' => $spegawai,
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir,
            'jenjang' => $jenjang,
            'sekolah' => $sekolah
        ];

        return view("petugas/b_lihatLaporan", $data);
    }

    // public function lihatLaporan2()
    // {
    //     $sekolah = $this->m_sekolah->findAll();
    //     $data = [
    //         'title' => 'Laporan Sekolah',
    //         'sekolah' => $sekolah
    //     ];

    //     return view("petugas/b_lihatLaporan2", $data);
    // }


    public function importCSVSekolah()
    {
        $file = $this->request->getFile('csvSekolah');
        $ext = $file->getClientExtension();
        $jenjang = $this->request->getVar('jenjang');
        if ($ext == 'xlsx' || $ext == "xls") {
            if ($ext == 'xls') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            $spreadsheet = $reader->load($file);
            $sekolah = $spreadsheet->getActiveSheet()->toArray();
            foreach ($sekolah as $key => $value) {
                if ($key === 0) {
                    continue;
                }

                // $cek = $this->m_sekolah->isExist($value[0]);
                // if ($cek = true) {
                //     return redirect()->back()->with('error', 'Sekolah sudah terdaftar');
                // } else {
                //     continue;
                // }
                // Validasi 
                // if (!$this->validate([
                //     $value[0] => [
                //         'rules' => 'required|max_length[8]|min_length[8]|is_unique[sekolah.npsn]|numeric',
                //         'errors' => [
                //             'min_length' => 'NPSN terdiri dari 8 angka.',
                //             'max_length' => 'NPSN terdiri dari 8 angka.',
                //             'is_unique' => 'NPSN sudah terdaftar',
                //             'numeric' => 'NPSN berupa angka'
                //         ]
                //     ],
                //     $value[1] => [
                //         'rules' => 'required|is_unique[sekolah.nama_sekolah]',
                //         'errors' => [
                //             'is_unique' => 'Nama Sekolah telah terdaftar'
                //         ]
                //     ],
                // ])) {
                //     $validation = \Config\Services::validation();
                //     // $errors = [
                //     //     'min_length' => $validation['min_length'],
                //     //     'max_length' => $validation['max_length'],
                //     //     'is_unique' => $validation['is_unique'],
                //     //     'numeric' => $validation['numeric']
                //     // ];
                //     return redirect()->back()->with('error', 'NPSN sudah terdaftar');
                // }


                $slug = url_title($value[1], "-", true);
                if ($jenjang == "TK") {
                    $data = [
                        'npsn' => $value[0],
                        'nama_sekolah' => $value[1],
                        'slug' => $slug,
                        'kecamatan' => $value[2],
                        'jenjang' => "TK",
                        'rombel' => $value[4],
                        'kepala_sekolah' => $value[5],
                        'guru_kelas' => $value[6],
                        'guru_pjok' => $value[7],
                        'guru_inklusi' => $value[8],
                        'pramu_bakti' => $value[9],
                        'penjaga_kebersihan' => $value[10],
                    ];
                } else if ($jenjang == "SD") {
                    $data = [
                        'npsn' => $value[0],
                        'nama_sekolah' => $value[1],
                        'slug' => $slug,
                        'kecamatan' => $value[2],
                        'jenjang' => "SD",
                        'rombel' => $value[4],
                        'kepala_sekolah' => $value[5],
                        'guru_kelas' => $value[6],
                        'guru_pai' => $value[7],
                        'guru_katholik' => $value[8],
                        'guru_kristen' => $value[9],
                        'guru_budha' => $value[10],
                        'guru_hindu' => $value[11],
                        'guru_pjok' => $value[12],
                        'guru_inklusi' => $value[13],
                        'pramu_bakti' => $value[14],
                        'penjaga_kebersihan' => $value[15],
                    ];
                } else {

                    $data = [
                        'npsn' => $value[0],
                        'nama_sekolah' => $value[1],
                        'slug' => $slug,
                        'kecamatan' => $value[2],
                        'jenjang' => "SMP",
                        'rombel' => $value[4],
                        'kepala_sekolah' => $value[5],
                        'guru_pai' => $value[6],
                        'guru_katholik' => $value[7],
                        'guru_kristen' => $value[8],
                        'guru_budha' => $value[9],
                        'guru_hindu' => $value[10],
                        'guru_pjok' => $value[11],
                        'guru_inklusi' => $value[12],
                        'guru_ipa' => $value[13],
                        'guru_ips' => $value[14],
                        'guru_senbud' => $value[15],
                        'guru_tik' => $value[16],
                        'guru_pkn' => $value[17],
                        'guru_indo' => $value[18],
                        'guru_eng' => $value[19],
                        'guru_mat' => $value[20],
                        'pramu_bakti' => $value[21],
                        'penjaga_kebersihan' => $value[22],
                    ];
                }

                $this->m_sekolah->insert($data);
            }
            return redirect()->back()->with('notifikasi', 'Data Berhasil di Import');
        } else {
            return redirect()->back()->with('error', 'Format Berkas Tidak Sesuai');
        }
    }
    public function importCSVPegawai()
    {
        $file = $this->request->getFile('csvPegawai');
        $ext = $file->getClientExtension();
        if ($ext == 'xlsx' || $ext == "xls") {
            if ($ext == 'xls') {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            $spreadsheet = $reader->load($file);
            $pegawai = $spreadsheet->getActiveSheet()->toArray();
            foreach ($pegawai as $key => $value) {
                if ($key === 0) {
                    continue;
                }
                // $cekSekolah = $this->m_sekolah->isExist($value[6]);
                // if ($cekSekolah = true) {
                //     continue;
                // } else {
                //     $slugskl = url_title($value[4], "-", true);
                //     $sekolah = [
                //         'npsn' => $value[6],
                //         'nama_sekolah' => $value[4],
                //         'slug' => $slugskl,
                //         'jenjang' => $value[3],
                //         'kecamatan' => $value[5],
                //     ];
                //     $this->m_sekolah->insert($sekolah);
                //     continue;
                // }

                // $cekPegawai = $this->m_pegawai->isExistpgw($value[0]);
                // if ($cekPegawai = true) {
                //     return redirect()->back()->with('error', 'Pegawai sudah terdaftar');
                // } else {
                //     continue;
                // }

                $jenjang = $value[3];
                if ($value[12] == "L") {
                    $jenis_kelamin = "Laki-Laki";
                } else {
                    $jenis_kelamin = "Perempuan";
                }

                $slug = url_title($value[1], "-", true);
                $data = [
                    'nik' => $value[0],
                    'nama_pegawai' => $value[1],
                    'nip' => $value[2],
                    'slug' => $slug,
                    'unit_kerja' => $value[4],
                    'npsn' => $value[6],
                    'kecamatan' => $value[5],
                    'jenjang' => $jenjang,
                    'jenis_jabatan' => $value[7],
                    'tugas_tambahan' => $value[8],
                    'status_kepeg' => $value[9],
                    'status' => $value[10],
                    'golongan' => $value[11],
                    'jenis_kelamin' => $jenis_kelamin,
                    'tempat_lahir' => $value[13],
                    'tanggal_lahir' => $value[14],
                    'agama' => $value[15],
                    'nuptk' => $value[16],
                    'no_pes_sertif' => $value[17],
                    'nrg' => $value[18],
                    'pend_terakhir' => $value[19],
                    'jurusan' => $value[20],
                    'no_hp' => $value[21],
                    'alamat' => $value[22],
                    'ket' => $value[23],
                    'ket2' => $value[24],
                    'tmt' => $value[25],
                ];

                $this->m_pegawai->insert($data);
            }
            return redirect()->back()->with('notifikasi', 'Data Berhasil di Import');
        } else {
            return redirect()->back()->with('error', 'Format Berkas Tidak Sesuai');
        }
    }

    public function exportPDF()
    {
        $tgl_awal = $this->request->getVar('tgl_awal');
        $tgl_akhir = $this->request->getVar('tgl_akhir');
        $jenjang = $this->request->getVar('jenjang');
        // dd($tgl_awal, $tgl_akhir, $jenjang);
        $hpegawai = $this->m_pegawai->laporanPegawai($tgl_awal, $tgl_akhir, $jenjang);
        $spegawai = $this->m_pegawai->laporanSeb($tgl_awal, $jenjang);
        $sekolah = $this->m_sekolah->laporanSekolah($jenjang);
        $dompdf = new \Dompdf\Dompdf();
        // $data = $this->db->table("laporan")->get()->getResult();
        $kop_surat = base_url('dist/img/kop_surat.jpeg');
        $data = [
            'kop_surat' => $kop_surat,
            'tgl_awal' => $tgl_awal,
            'tgl_akhir' => $tgl_akhir,
            'hpegawai' => $hpegawai,
            'spegawai' => $spegawai,
            'jenjang' => $jenjang,
            'sekolah' => $sekolah
        ];
        $view = view('petugas/export_laporan', $data);
        $dompdf->loadHTML($view);
        $dompdf->setPaper('A4', 'potrait');
        // $dompdf->set_option('isRemoteEnabled', true);
        $dompdf->render();
        $dompdf->stream('laporan-bulanan', array("Attachment" => false));

        return redirect()->back();
    }
}
