<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ProfilController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Profil',
            'isi'   => 'v_profil'
        );
        return view('layout/v_wrapper', $data);
    }
}
