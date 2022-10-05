<?php

namespace App\Controllers;

use App\Models\M_User;

class Admin extends BaseController
{


    public function __construct()
    {
        $this->m_user = new M_User();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'nama_user' => 'Admin',
        ];

        return view("admin/dashboard_admin", $data);
    }

    public function dataUser()
    {
        $users = $this->m_user->findAll();
        $data = [
            'title' => 'Data Pengguna',
            'users' => $users,
        ];
        return view('admin/b_dataPengguna', $data);
    }

    public function cariUser($nama_user)
    {
        $user = $this->m_user->findColumn(['nama_user' => $nama_user]);
        $data = [
            'title' => 'Data Pengguna',
            'user' => $user
        ];
        echo ($user);
    }

    public function tambahUser()
    {
        $data = [
            'title' => 'Tambah Pengguna'
        ];
        return view('admin/b_tambahPengguna', $data);
    }

    public function simpanUser()
    {
        $slug = url_title($this->request->getVar('nama_user'), "-", true);
        if ($this->request->getPost()) {
            $data = [
                'nama_user' => $this->request->getVar('nama_user'),
                'slug' => $slug,
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
                'akses' => $this->request->getVar('akses'),
            ];
            $this->m_user->insert($data);
            session()->setFlashdata('notifikasi', 'Pengguna berhasil ditambahkan.');
            return redirect()->to(base_url('/admin/user'));
        }
        return view('admin/b_tambahPengguna');
    }

    public function editUser($slug)
    {
        $data = [
            'title' => 'Ubah Akses Pengguna',
            'users' => $this->m_user->getUser($slug)
        ];
        return view('admin/b_ubahaksesPengguna', $data);
    }

    public function updateaksesUser($id_user)
    {
        $slug = url_title($this->request->getVar('nama_user'), '-', true);
        $data = [
            'id_user' => $id_user,
            'nama_user' => $this->request->getVar('nama_user'),
            'slug' => $slug,
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'akses' => $this->request->getVar('akses')
        ];
        $this->m_user->save($data);
        session()->setFlashdata('notifikasi', 'Akses pengguna berhasil diubah');
        return redirect()->to('/admin/user');
    }

    public function deleteUser($id_user)
    {
        $this->m_user->delete($id_user);
        session()->setFlashdata('notifikasi', 'Pengguna berhasil dihapus.');

        return redirect()->to('/admin/user');
    }
}
