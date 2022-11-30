<?php

namespace App\Controllers;



class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to(site_url('login'));
    }

    public function login()
    {
        // dd(session('id_user'));
        // return view('auth/login');
        if (session('id_user')) {
            return redirect()->to(site_url('login'));
        } else {
            return view('auth/login');
        }
    }

    public function loginProcess()
    {
        $db      = \Config\Database::connect();
        $post = $this->request->getPost();
        $query = $db->table('users')->getWhere(['username' => $post['username']]);
        $dbuser = $query->getFirstRow('array');
        $pass = $this->request->getVar('password');
        // dd($post);
        $user = $query->getRow();
        if ($user) {
            if ($post['password'] === $pass) {
                if ($dbuser['akses'] === "Admin") {
                    $params = [
                        'id_user' => $user->id_user,
                        'nama_user' => $user->nama_user,
                        'role' => $user->akses
                    ];
                    session()->set($params);
                    return redirect()->to(site_url('admin'));
                } else {
                    $params = [
                        'id_user' => $user->id_user,
                        'nama_user' => $user->nama_user,
                        'role' => $user->akses
                    ];
                    session()->set($params);
                    return redirect()->to(site_url('petugas'));
                }
            } else {
                return redirect()->to(site_url('login'))->with('error', 'Password tidak sesuai');
            }
        } else {
            return redirect()->to(site_url('login'))->with('error', 'Username tidak ditemukan');
        }
    }

    public function logout()
    {
        session()->remove('id_user');
        return redirect()->to(site_url('login'));
    }
}
