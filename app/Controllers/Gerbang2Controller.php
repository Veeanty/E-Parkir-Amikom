<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Gerbang2Controller extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Gerbang2',
            'isi'   => 'v_gerbang2'
        );
        return view('layout/v_wrapper', $data);
    }
}
