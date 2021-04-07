<?php

namespace App\Controllers;

use App\Models\M_User;

class User extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Form Login',
      'tampil' => 'login',
    ];
    echo view('template/wrapper', $data);
  }

  public function register()
  {
    $data = [
      'title' => 'Form Register',
      'tampil' => 'register',
    ];
    echo view('template/wrapper', $data);
  }

  public function regist()
  {
    $userData = new M_User();
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $userData->insert($_POST);
    $session = session();
    session()->setFlashdata('message', 'Selamat Registrasi Berhasil!');
    return redirect()->to(base_url('user'));
  }
}

?>