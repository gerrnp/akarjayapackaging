<?php

namespace App\Models;

use CodeIgniter\Model;

class WeightModels extends Model
{
    protected $table      = 'weight_produk_ajp';
    protected $primaryKey = 'id_weight_produk_ajp';
    protected $useTimestamps = true;
    protected $allowedFields = ['nm_weight_produk_ajp', 'slug_weight_produk_ajp'];
}
