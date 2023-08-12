<?php

namespace App\Controllers;

class Login extends Admin
{
    public function index()
    {
        if (session('id_admin')) {
            return redirect()->to(site_url('/Admin'));
        }
        return view('login/login_view');
    }

    public function loginProses()
    {
        $post = $this->request->getPost();
        $query = $this->adminModel->getWhere(['username' => $post['username']]);
        $admin = $query->getRow();

        if ($admin) {
            if (password_verify($post['password'], $admin->password)) {
                $params = [
                    'id_admin' => $admin->id_admin,
                    'nama' => $admin->nama,
                    'username' => $post['username']
                ];
                session()->set($params);
                return redirect()->to(site_url('/Admin'));
            } else {
                return redirect()->back()->with('error', 'Password tidak sesuai');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan');
        }
    }

    // logout
    public function logout()
    {
        session()->remove('id_admin');
        return redirect()->to('/Login');
    }
}
