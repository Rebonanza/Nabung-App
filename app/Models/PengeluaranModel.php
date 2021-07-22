<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $table      = 'pengeluaran';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['catatan', 'jumlah'];
    protected $useTimestamps = true;
    protected $dateFormat = 'date';
}
