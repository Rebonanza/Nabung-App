<?php

namespace App\Models;

use CodeIgniter\Model;

class WishlistModel extends Model
{
    protected $table      = 'wishlist';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'harga', 'target', 'nabung'];
    protected $useTimestamps = true;
    protected $dateFormat = 'date';
}
