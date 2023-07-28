<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Gerbang1Controller extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Gerbang1',
            'isi'   => 'v_gerbang1'
        );
        return view('layout/v_wrapper', $data);
    }
}
