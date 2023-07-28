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
                'password' =>$this->request->getPost('password'),
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

    public function login()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('v_login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong!!!',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dan tidak boleh kosong!!!',
                ]
                ],
        ])) {
            // Jika data login valid, ambil inputan email dan password
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            // Panggil model Model_Auth untuk melakukan proses login
            $cek = $this->Model_Auth->login($email, $password);
            if ($cek) {
                // Jika login berhasil, set data user ke session
                session()->set('log', true);
                session()->set('nama_user', $cek['nama_user']);
                session()->set('email', $cek['email']);
                session()->set('level', $cek['level']);
                //login
                return redirect()->to(base_url('/home')); // Ganti '/dashboard' dengan halaman setelah login berhasil
            } else {
                // Jika login gagal, tampilkan pesan error
                session()->setFlashdata('pesan','Login Gagal');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            // Jika validasi gagal, kembalikan ke halaman login dengan pesan error
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }
    }
    
    public function logout()
    {
        session()->remove('log');
        session()->remove('nama_user');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Logout Suksess');
        return redirect()->to(base_url('auth/login'));

    }

}
