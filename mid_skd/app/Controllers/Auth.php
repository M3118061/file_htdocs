<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\AuthModel;


class Auth extends Controller
{
    public function register()
    {
        $val = $this->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ]
        );
        var_dump($val);
        if (!$val) {
            $pesanvalidasi = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with('validate',$pesanvalidasi);
        }

        $kalimat = $this->request->getPost('password');
        $key = 1 ; //angka terakhir dari NIM M338061
        for ($i = 0; $i < strlen($kalimat); $i++) 
		{
			$kode[$i] = ord($kalimat[$i]); //mengubah ASCII ke desimal
			$b[$i] = ($kode[$i] + $key) % 256; //enkripsi
			$c[$i] = chr($b[$i]); //mengubah desimal ke ASCII
        }
                    
        for ($i = 0; $i < strlen($kalimat); $i++) 
		{
			echo $kalimat[$i];
        }
		
        $hsl = '';
        for ($i = 0; $i < strlen($kalimat); $i++) 
		{
			echo $c[$i];
			$hsl = $hsl . $c[$i];
        }
            
        $password = $hsl;

        $data = array(
            'username' => $this->request->getPost('username'),
            'password' => $hsl,
            'role' => $this->request->getPost('role')
        );
        $model = new UserModel();
        $model->insert($data);
        session()->setFlashdata('pesan', 'selamat anda berhasil registrasi');
        return redirect()->to('/');
    }

    public function login()
    {
        $model = new AuthModel();
        $table = 'users';
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $row = $model->get_data_login($username, $table);

        if ($row == NULL) {
            session()->setFlashdata('pesan', 'Username dan Password Tidak Boleh Kosong !');
            return redirect()->to('/');
            }

        $enk=$row->password;
        $hasil = '';
        $key = 1; //NIM SAYA M3118061
            for($i=0;$i<strlen($enk);$i++)
            {
                    $kode[$i]=ord($enk[$i]); // Proses merubah ASCII ke bentuk desimal
                    $b[$i]=($kode[$i] - $key ) % 256; // proses dekripsi Caesar
                    $c[$i]=chr($b[$i]); //Proses merubah hasil dekripsi desimal ke ASCII
                    $hasil = $hasil . $c[$i];
            }

            if ($password==$hasil){
                $data = array(
                    'log' =>TRUE,
                    'username' => $row->username,
                    'role' => $row->role,
                );
                session()->set($data);
                session()->setFlashdata('pesan', 'Selamat Anda Berhasil LOGIN');
                return redirect()->to('/backend');
            }
            else{
                session()->setFlashdata('pesan', 'Username atau Password salah!');
                return redirect()->to('/');
            }
		}

    public function logout()
    {
        $session = session();
        $session->destroy();
        session()->setFlashdata('pesan', 'Berhasil logout');
        return redirect()->to('/');
    }
}
