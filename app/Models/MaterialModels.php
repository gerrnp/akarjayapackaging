<?php

namespace App\Models;

use CodeIgniter\Model;

class MaterialModels extends Model
{
    protected $table      = 'material_produk_ajp';
    protected $primaryKey = 'id_material_produk_ajp';
    protected $useTimestamps = true;
    protected $allowedFields = ['nm_material_produk_ajp'];
}
