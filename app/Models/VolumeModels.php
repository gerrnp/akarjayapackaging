<?php

namespace App\Models;

use CodeIgniter\Model;

class VolumeModels extends Model
{
    protected $table      = 'volume_produk_ajp';
    protected $primaryKey = 'id_volume_produk_ajp';
    protected $useTimestamps = true;
    protected $allowedFields = ['nm_volume_produk_ajp'];
}
