<?php

namespace App\Controllers;
use \App\Models\PengeluaranModel;
use \App\Models\PemasukanModel;
class Nabung extends BaseController
{
    public $db;
    public function __construct()
    {
       $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $query1 = $this->db->query("SELECT SUM(jumlah) as totalPemasukan FROM pemasukan");
        $query2 = $this->db->query("SELECT SUM(jumlah) as totalPengeluaran FROM pengeluaran");
        // dd($query1->getResultArray());
          $data = [
           'totalPemasukan' => $query1->getResultArray(),
           'totalPengeluaran' => $query2->getResultArray(),
        ];
         return view('portfolio/nabung/index', $data);
    }
}
