<?php

namespace App\Controllers;

use \App\Models\WishlistModel;
use CodeIgniter\Validation\Rules;

class Wishlist extends BaseController
{
    protected $wishlistModel;
    protected $validation;
    public function __construct()
    {
        $this->wishlistModel = new WishlistModel();
        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        $date1 = date_create(date('Y-m-d'));
        $wishlist = $this->wishlistModel->findAll();
        $data = [
            'wishlist' => $wishlist,
            'currDate' => $date1
        ];

        return view('portfolio/nabung/wishlist/index', $data);
    }
    public function create()
    {
        $data = [
            'val' => $this->validation
        ];
        return view('portfolio/nabung/wishlist/create', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'harga' => [
                'rules' => 'numeric',
                'errors' => [
                    'numeric' => '{field} barang harus angka'
                ]
            ]
        ])) {
            return redirect()->to('/wishlist/create')->withInput();
        }
        $this->wishlistModel->save([
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'target' => $this->request->getVar('target')

        ]);
        session()->setFlashdata('message', 'Data Berhasil Disimpan !');
        return redirect()->to('/wishlist');
    }
    public function edit($id)
    {
        $wishlists = $this->wishlistModel->find($id);
        $data = [
            'wishlist' => $wishlists,
            'val' => $this->validation
        ];
        return view('portfolio/nabung/wishlist/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'harga' => [
                'rules' => 'numeric',
                'errors' => [
                    'numeric' => '{field} barang harus angka'
                ]
            ]
        ])) {
            return redirect()->to('/wishlist/edit/' . $id)->withInput();
        }
        $this->wishlistModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'target' => $this->request->getVar('target')

        ]);
        session()->setFlashdata('message', 'Data Berhasil Diupdate !');
        return redirect()->to('/wishlist');
    }
    public function delete($id)
    {

        $this->wishlistModel->delete($id);
        session()->setFlashdata('message', 'Data Berhasil Di Hapus !');
        return redirect()->to('/wishlist');
    }
    public function nabung($id)
    {
        $wishlist = $this->wishlistModel->find($id);
        $data = [
            'wishlist' => $wishlist,
            'val' => $this->validation
        ];
        return view('portfolio/nabung/wishlist/nabung', $data);
    }
    public function tabung($id)
    {
        if (!$this->validate([
            'nabung' => [
                'rules' => 'numeric',
                'errors' => [
                    'numeric' => '{field}  harus angka'
                ]
            ]
        ])) {
            return redirect()->to('/wishlist/nabung/' . $id)->withInput();
        }
        $tabunganBaru = $this->request->getVar('nabung') + $this->request->getVar('tabunganLama');
        $this->wishlistModel->save([
            'id' => $id,
            'nabung' => $tabunganBaru
        ]);
        session()->setFlashdata('message', 'Kamu Berhasil Nabung!');
        return redirect()->to('/wishlist');
    }
}
