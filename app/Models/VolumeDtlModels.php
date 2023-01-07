<?php

namespace App\Models;

use CodeIgniter\Model;

class VolumeDtlModels extends Model
{
    protected $table      = 'volume_dtl_produk_ajp';
    protected $primaryKey = 'id_volume_dtl_produk_ajp';
    protected $useTimestamps = true;
    protected $allowedFields = ['nm_volume_dtl_produk_ajp', 'slug_volume_dtl_produk_ajp'];
}
