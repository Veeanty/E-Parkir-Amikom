<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LaporanController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Laporan',
            'isi'   => 'v_laporan'
        );
        return view('layout/v_wrapper', $data);
    }
}
