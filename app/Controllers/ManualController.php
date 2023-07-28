<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ManualController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Manual',
            'isi'   => 'v_manual'
        );
        return view('layout/v_wrapper', $data);
    }
}
