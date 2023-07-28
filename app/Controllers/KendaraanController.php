<?php

namespace App\Controllers;

use App\Models\KendaraanModel;

class KendaraanController extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Kendaraan',
            'isi'   => 'kendaraan/index'
        );
        $kendaraanModel = new KendaraanModel();
        $data['kendaraan'] = $kendaraanModel->findAll();

        return view('layout/v_wrapper', $data);
    }

    public function create()
    {
        $data = array(
            'title' => 'Kendaraan',
            'isi'   => 'kendaraan/create'
        );
        return view('layout/v_wrapper', $data);
    }

    public function store()
    {
        $kendaraanModel = new KendaraanModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'brand' => $this->request->getPost('brand'),
            'stnk' => $this->request->getPost('stnk'),
            'tanggal_keluar' => $this->request->getPost('tanggal_keluar'),
        ];

        $kendaraanModel->insert($data);

        return redirect()->to('/kendaraan');
    }

    public function edit($id)
    {
        $kendaraanModel = new KendaraanModel();
        $data['kendaraan'] = $kendaraanModel->find($id);

        return view('kendaraan/edit', $data);
    }

    public function update($id)
    {
        $kendaraanModel = new KendaraanModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'brand' => $this->request->getPost('brand'),
            'stnk' => $this->request->getPost('stnk'),
            'tanggal_keluar' => $this->request->getPost('tanggal_keluar'),
        ];

        $kendaraanModel->update($id, $data);

        return redirect()->to('/kendaraan');
    }

    public function delete($id)
    {
        $kendaraanModel = new KendaraanModel();
        $kendaraanModel->delete($id);

        return redirect()->to('/kendaraan');
    }
}
