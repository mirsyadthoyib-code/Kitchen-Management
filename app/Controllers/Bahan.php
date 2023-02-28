<?php

namespace App\Controllers;

use App\Models\BahanModel;

class Bahan extends BaseController
{
    protected $bahanModel;

    public function __construct()
    {
        $this->bahanModel = new BahanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Bahan',
            'bahan' => $this->bahanModel->getBahan()
        ];

        return view('/bahan/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Bahan'
        ];
        return view('/bahan/create', $data);
    }

    public function save()
    {
        $this->bahanModel->save([
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'satuan_beli' => $this->request->getVar('satuan_beli'),
            'satuan_pakai' => $this->request->getVar('satuan_pakai'),
            'konversi' => $this->request->getVar('konversi'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Bahan',
            'bahan' => $this->bahanModel->getBahan($id)
        ];

        return view('/bahan/edit', $data);
    }

    public function update($id)
    {
        $this->bahanModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'satuan_beli' => $this->request->getVar('satuan_beli'),
            'satuan_pakai' => $this->request->getVar('satuan_pakai'),
            'konversi' => $this->request->getVar('konversi'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah.');

        return redirect()->to('/');
    }

    public function delete($id)
    {
        $this->bahanModel->delete($id);

        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');

        return redirect()->to('/');
    }
}
