<?php

namespace App\Models;

use CodeIgniter\Model;

class LabelModels extends Model
{
    protected $table      = 'label_produk_ajp ';
    protected $primaryKey = 'id_label_produk_ajp ';
    protected $useTimestamps = true;
    protected $allowedFields = ['nm_label_produk_ajp'];
}
