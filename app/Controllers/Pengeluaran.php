<?php

namespace App\Controllers;

use \App\Models\PengeluaranModel;
use CodeIgniter\Validation\Rules;

class Pengeluaran extends BaseController
{
    protected $pengeluaranModel;
    protected $validation;
    public function __construct()
    {
        $this->pengeluaranModel = new PengeluaranModel();
        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        $pengeluaran = $this->pengeluaranModel->findAll();
        $data = [
            'pengeluaran' => $pengeluaran
        ];

        return view('portfolio/nabung/pengeluaran/index', $data);
    }
    public function create()
    {
        $data = [
            'val' => $this->validation
        ];
        return view('portfolio/nabung/pengeluaran/create', $data);
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
            return redirect()->to('/pengeluaran/create')->withInput();
        }
        $this->pengeluaranModel->save([
            'catatan' => $this->request->getVar('catatan'),
            'jumlah' => $this->request->getVar('jumlah')

        ]);
        session()->setFlashdata('message', 'Data Berhasil Disimpan !');
        return redirect()->to('/pengeluaran');
    }
    public function edit($id)
    {
        $pengeluaran = $this->pengeluaranModel->find($id);
        $data = [
            'pengeluaran' => $pengeluaran,
            'val' => $this->validation
        ];
        return view('portfolio/nabung/pengeluaran/edit', $data);
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
            return redirect()->to('/pengeluaran/edit/' . $id)->withInput();
        }
        $this->pengeluaranModel->save([
            'id' => $id,
            'catatan' => $this->request->getVar('catatan'),
            'jumlah' => $this->request->getVar('jumlah')

        ]);
        session()->setFlashdata('message', 'Data Berhasil Diupdate !');
        return redirect()->to('/pengeluaran');
    }
    public function delete($id)
    {

        $this->pengeluaranModel->delete($id);
        session()->setFlashdata('message', 'Data Berhasil Di Hapus !');
        return redirect()->to('/pengeluaran');
    }
    // public function nabung($id)
    // {
    //     $wishlist = $this->wishlistModel->find($id);
    //     $data = [
    //         'wishlist' => $wishlist,
    //         'val' => $this->validation
    //     ];
    //     return view('portfolio/nabung/wishlist/nabung', $data);
    // }
    // public function tabung($id)
    // {
    //     if (!$this->validate([
    //         'nabung' => [
    //             'rules' => 'numeric',
    //             'errors' => [
    //                 'numeric' => '{field}  harus angka'
    //             ]
    //         ]
    //     ])) {
    //         return redirect()->to('/wishlist/nabung/' . $id)->withInput();
    //     }
    //     $tabunganBaru = $this->request->getVar('nabung') + $this->request->getVar('tabunganLama');
    //     $this->wishlistModel->save([
    //         'id' => $id,
    //         'nabung' => $tabunganBaru
    //     ]);
    //     session()->setFlashdata('message', 'Kamu Berhasil Nabung!');
    //     return redirect()->to('/wishlist');
    // }
}
