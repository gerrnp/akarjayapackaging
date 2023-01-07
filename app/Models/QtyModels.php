<?php

namespace App\Models;

use CodeIgniter\Model;

class QtyModels extends Model
{
    protected $table      = 'qty_produk_ajp';
    protected $primaryKey = 'id_qty_produk_ajp';
    protected $useTimestamps = true;
    protected $allowedFields = ['nm_qty_produk_ajp'];
}
