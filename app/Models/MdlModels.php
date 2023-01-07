<?php

namespace App\Models;

use CodeIgniter\Model;

class MdlModels extends Model
{
    protected $table      = 'mdl_produk_ajp';
    protected $primaryKey = 'id_mdl_produk_ajp';
    protected $useTimestamps = true;
    protected $allowedFields = ['nm_mdl_produk_ajp'];
}
