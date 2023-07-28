<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ParkirController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Parkir',
            'isi'   => 'v_parkir'
        );
        return view('layout/v_wrapper', $data);
    }
}
