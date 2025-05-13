<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $session = session();
        $userId = $session->get('user_id');

        $data['user'] = $this->userModel->find($userId);
        return view('profile/view', $data);
    }

    public function edit()
    {
        $session = session();
        $userId = $session->get('user_id');

        $data['user'] = $this->userModel->find($userId);
        return view('profile/edit', $data);
    }

public function update()
{
    $session = session();
    $userId = $session->get('user_id');

    // Ambil data dari form
    $data = [
        'fullname' => $this->request->getPost('fullname'),
        'username' => $this->request->getPost('username'),
        'email'    => $this->request->getPost('email'),
        'bio'      => $this->request->getPost('bio'),
    ];

    // Tambahkan jika user input password baru
    $newPassword = $this->request->getPost('new_password');

    if (!empty($newPassword)) {
        // Hash password baru sebelum menyimpannya ke database
        $data['password'] = $newPassword;

    }

    // Handle upload foto profil
    $file = $this->request->getFile('profile_picture');
    if ($file && $file->isValid() && !$file->hasMoved()) {
        $fileName = $file->getRandomName();
        $file->move('uploads/profile/', $fileName);
        $data['profile_picture'] = 'uploads/profile/' . $fileName;
    }

    // Update data di database
    if ($this->userModel->update($userId, $data)) {
        // Jika password diubah, tidak perlu menyimpannya ke session
        if (!empty($newPassword)) {
            // Tidak perlu set password baru di session, cukup simpan di database
            log_message('debug', 'Password berhasil diupdate di database.');
        }

        // Redirect ke halaman profil dengan pesan sukses
        return redirect()->to('/profile')->with('success', 'Profil berhasil diperbarui');
    } else {
        return redirect()->to('/profile/edit')->with('error', 'Gagal memperbarui profil');
    }
}




}
