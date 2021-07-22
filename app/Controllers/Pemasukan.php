<?php

namespace App\Controllers;

use \App\Models\PemasukanModel;
use CodeIgniter\Validation\Rules;

class Pemasukan extends BaseController
{
    protected $pemasukanModel;
    protected $validation;
    public function __construct()
    {
        $this->pemasukanModel = new PemasukanModel();
        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        $pemasukan = $this->pemasukanModel->findAll();
        $data = [
            'pemasukan' => $pemasukan
        ];

        return view('portfolio/nabung/pemasukan/index', $data);
    }
    public function create()
    {
        $data = [
            'val' => $this->validation
        ];
        return view('portfolio/nabung/pemasukan/create', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'jumlah' => [
                'rules' => 'numeric',
                'errors' => [
                    'numeric' => '{field} uang harus angka'
                ]
            ]
        ])) {
            return redirect()->to('/pemasukan/create')->withInput();
        }
        $this->pemasukanModel->save([
            'catatan' => $this->request->getVar('catatan'),
            'jumlah' => $this->request->getVar('jumlah')

        ]);
        session()->setFlashdata('message', 'Data Berhasil Disimpan !');
        return redirect()->to('/pemasukan');
    }
    public function edit($id)
    {
        $pemasukan = $this->pemasukanModel->find($id);
        $data = [
            'pemasukan' => $pemasukan,
            'val' => $this->validation
        ];
        return view('portfolio/nabung/pemasukan/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'jumlah' => [
                'rules' => 'numeric',
                'errors' => [
                    'numeric' => '{field} uang harus angka'
                ]
            ]
        ])) {
            return redirect()->to('/pemasukan/edit/' . $id)->withInput();
        }
        $this->pemasukanModel->save([
            'id' => $id,
            'catatan' => $this->request->getVar('catatan'),
            'jumlah' => $this->request->getVar('jumlah')

        ]);
        session()->setFlashdata('message', 'Data Berhasil Diupdate !');
        return redirect()->to('/pemasukan');
    }
    public function delete($id)
    {

        $this->pemasukanModel->delete($id);
        session()->setFlashdata('message', 'Data Berhasil Di Hapus !');
        return redirect()->to('/pemasukan');
    }
  
}
