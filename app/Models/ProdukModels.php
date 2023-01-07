<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModels extends Model
{
    protected $table      = 'produk_ajp';
    protected $primaryKey = 'id_produk_ajp';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_kategori_produk_ajp', 'slug_produk_ajp', 'nm_produk_ajp', 'id_qty_produk_ajp', 'id_color_produk_ajp', 'id_material_produk_ajp', 'hrg_produk_ajp', 'id_lbl_produk_ajp', 'id_mdl_produk_ajp', 'id_volume_produk_ajp', 'volume_produk_ajp', 'id_weight_produk_ajp', 'id_merk_produk_ajp', 'desc_produk_ajp', 'img_produk_ajp'];

    public function product($slug_produk_ajp = false)
    {
        if ($slug_produk_ajp) {
            return $this->table('produk_ajp')
                ->where(['produk_ajp.slug_produk_ajp' => $slug_produk_ajp])
                ->get()
                ->getRowArray();
        }
        return $this->table('produk_ajp')
            ->join('kategori_produk_ajp', 'produk_ajp.id_kategori_produk_ajp=kategori_produk_ajp.id_kategori_produk_ajp')
            ->join('qty_produk_ajp', 'produk_ajp.id_qty_produk_ajp=qty_produk_ajp.id_qty_produk_ajp')
            ->join('color_produk_ajp', 'produk_ajp.id_color_produk_ajp=qty_produk_ajp.id_qty_produk_ajp')
            ->join('material_produk_ajp', 'produk_ajp.id_material_produk_ajp=qty_produk_ajp.id_qty_produk_ajp')
            ->join('mdl_produk_ajp', 'produk_ajp.id_mdl_produk_ajp=qty_produk_ajp.id_qty_produk_ajp')
            ->join('volume_produk_ajp', 'produk_ajp.id_volume_produk_ajp=qty_produk_ajp.id_qty_produk_ajp')
            ->join('weight_produk_ajp', 'produk_ajp.id_weight_produk_ajp=qty_produk_ajp.id_qty_produk_ajp')
            ->join('merk_produk_ajp', 'produk_ajp.id_merk_produk_ajp=qty_produk_ajp.id_qty_produk_ajp')
            ->get()
            ->getRowArray();
    }

    public function estimasi_product($warna)
    {
        return $this->table('produk_ajp')
            ->where(['produk_ajp.id_color_produk_ajp' => $warna])
            ->get()
            ->getRowArray();
    }

    public function get_all_produk($slug_kategori = false)
    {
        return $this->table('produk_ajp')
            ->join('kategori_produk_ajp', 'produk_ajp.id_kategori_produk_ajp=kategori_produk_ajp.id_kategori_produk_ajp', 'left')
            ->where('produk_ajp.slug_kategori', $slug_kategori);
    }
}
