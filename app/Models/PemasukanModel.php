<?php

namespace App\Models;

use CodeIgniter\Model;

class PemasukanModel extends Model
{
    protected $table      = 'pemasukan';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['catatan', 'jumlah'];
    protected $useTimestamps = true;
    protected $dateFormat = 'date';
}
