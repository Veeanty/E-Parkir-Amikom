<?php

namespace App\Controllers;

// Gunakan class Model_Auth
use App\Models\Model_Auth;

class Auth extends BaseController
{
    // Inisialisasi Model_Auth
    protected $Model_Auth;

    public function __construct()
    {
        helper('form');
        // Inisialisasi Model_Auth pada konstruktor
        $this->Model_Auth = new Model_Auth();
    }

    public function register()
    {
        $data = array(
            'title' => 'Register',
        );
        return view('v_register', $data);
    }

    public function save_register()
    {
        // Validasi data menggunakan rules tertentu
        if ($this->validate([
            'nama_user' =>[
                'label' => 'Nama User',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong!!!',
                ]
            ],
            'email' =>[
                'label' => 'E-Mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong!!!',
                ]
            ],
            'no_hp' =>[
                'label' => 'No Handphone',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong!!!',
                ]
            ],
            'password' =>[
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong!!!',
                ]
            ]
        ])) {
            // Jika data valid, simpan data ke database menggunakan model Model_Auth
            $data = array(
                'nama_user' => $this->request->getPost('nama_user'),
                'email' => $this->request->getPost('email'),
                'no_hp' => $this->request->getPost('no_hp'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'level' => 3 // Level pengguna, misalnya level 3
            );

            $this->Model_Auth->save_register($data);
            
            // Tambahkan logika sukses jika diperlukan
            session()->setFlashdata('pesan', 'Registrasi berhasil!');
            
            // Redirect ke halaman sukses atau halaman lain yang diinginkan
            return redirect()->to(base_url('sukses'));
        } else {
            // Jika data tidak valid, kirim pesan error dan redirect kembali ke halaman registrasi
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/register'));
        }
    }
}
