<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }

public function loginProcess()
{
    $session = session();
    $model = new \App\Models\UserModel();

    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    // Cari user berdasarkan email
    $user = $model->where('email', $email)->first();

    // Verifikasi email dan password secara langsung tanpa hash
    if (!$user || $password !== $user['password']) {
        $session->setFlashdata('error', 'Email atau password salah');
        return redirect()->to('/login');
    }

    // Set session data setelah berhasil login
    $session->set([
        'user_id' => $user['id'],
        'user_email' => $user['email'],
        'logged_in' => true
    ]);

    return redirect()->to('/homepage');
}





    public function registerProcess()
    {
        $session = session();
        $model = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];

        if ($model->save($data)) {
            $session->setFlashdata('success', 'Akun berhasil dibuat!');
            return redirect()->to('/login');
        } else {
            $session->setFlashdata('error', 'Registrasi gagal, coba lagi.');
            return redirect()->to('/register')->withInput();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
