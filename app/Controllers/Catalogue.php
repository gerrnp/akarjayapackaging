<?php

namespace App\Controllers;

use CodeIgniter\HTTP\URI;
use \App\Models\ColorModels;
use \App\Models\KategoriModels;
use \App\Models\LabelModels;
use \App\Models\MaterialModels;
use \App\Models\MdlModels;
use \App\Models\MerkModels;
use \App\Models\ProdukModels;
use \App\Models\QtyModels;
use \App\Models\VolumeModels;
use \App\Models\VolumeDtlModels;
use \App\Models\WeightModels;

class Catalogue extends BaseController
{
    protected $ColorModels;
    protected $KategoriModels;
    protected $LabelModels;
    protected $MaterialModels;
    protected $MdlModels;
    protected $MerkModels;
    protected $ProdukModels;
    protected $QtyModels;
    protected $VolumeModels;
    protected $VolumeDtlModels;
    protected $WeightModels;
    protected $request;
    public function __construct()
    {
        $this->ColorModels  = new ColorModels();
        $this->KategoriModels  = new KategoriModels();
        $this->LabelModels  = new LabelModels();
        $this->MaterialModels  = new MaterialModels();
        $this->MdlModels  = new MdlModels();
        $this->MerkModels  = new MerkModels();
        $this->ProdukModels  = new ProdukModels();
        $this->QtyModels  = new QtyModels();
        $this->VolumeModels  = new VolumeModels();
        $this->VolumeDtlModels  = new VolumeDtlModels();
        $this->WeightModels  = new WeightModels();
        $this->uri = new \CodeIgniter\HTTP\URI();
    }

    public function index()
    {

        $data = [
            'title' => "Katalog",
            'kategori' => $this->KategoriModels->findAll(),
            'volume' => $this->VolumeDtlModels->findAll(),
            'berat' => $this->WeightModels->findAll(),
            'color' => $this->ColorModels->findAll(),
            'material' => $this->MaterialModels->findAll(),
        ];

        return view('Catalogue/index', $data);
    }

    public function produk($slug_produk_ajp)
    {
        $qtys = 1000;
        $produk = $this->ProdukModels->table('produk_ajp')->where(['slug_produk_ajp' => $slug_produk_ajp, 'id_qty_produk_ajp' => 1]);

        $data = [
            'title' => "Katalog" . $slug_produk_ajp,
            'produk' => $produk->get()->getRowArray(),
            'qty' => $qtys,
            'kategori' => $this->KategoriModels->findAll(),
            'berat' => $this->WeightModels->findAll(),
            'volume' => $this->VolumeModels->findAll(),
            'color' => $this->ColorModels->findAll(),
            'material' => $this->MaterialModels->findAll(),
            'validation' => \Config\Services::validation(),
        ];
        // dd($data['produk']);
        return view('Catalogue/produk', $data);
    }

    public function cek_harga()
    {
        $slug_produk_ajp = $this->request->getVar('produk');
        $qtys = $this->request->getVar('qty');
        $produk_ajp = $this->ProdukModels->table('produk_ajp');
        if ($qtys) {
            if ($qtys < 1000) {
                $produk_ajp = $produk_ajp->where(['slug_produk_ajp' => $slug_produk_ajp, 'id_qty_produk_ajp' => 1])->get()->getRowArray();
            } else
            if ($qtys < 2000) {
                $produk_ajp = $produk_ajp->where(['slug_produk_ajp' => $slug_produk_ajp, 'id_qty_produk_ajp' => 1])->get()->getRowArray();
            } else
            if ($qtys < 5000) {
                $produk_ajp = $produk_ajp->where(['slug_produk_ajp' => $slug_produk_ajp, 'id_qty_produk_ajp' => 2])->get()->getRowArray();
            } else
            if ($qtys < 10000) {
                $produk_ajp = $produk_ajp->where(['slug_produk_ajp' => $slug_produk_ajp, 'id_qty_produk_ajp' => 3])->get()->getRowArray();
            } else
            if ($qtys < 20000) {
                $produk_ajp = $produk_ajp->where(['slug_produk_ajp' => $slug_produk_ajp, 'id_qty_produk_ajp' => 4])->get()->getRowArray();
            } else 
            if ($qtys > 30000) {
                $produk_ajp = $produk_ajp->where(['slug_produk_ajp' => $slug_produk_ajp, 'id_qty_produk_ajp' => 1])->get()->getRowArray();
            }
        } else {
            $produk_ajp = $produk_ajp->where(['slug_produk_ajp' => $slug_produk_ajp, 'id_qty_produk_ajp' => 1]);
            $qtys = 1000;
        }

        $data['harga'] = $produk_ajp['hrg_produk_ajp'];
        $data['total'] = $data['harga'] * $qtys;

        $this->response->setContentType('application/json')->setJSON($data)->send();
    }

    public function filter()
    {
        if ($this->request->isAJAX()) {
            $catalogue = $this->ProdukModels->where(['id_qty_produk_ajp' => 1]);

            if ($kategori = $this->request->getVar('kategori')) {
                $brand_filter = implode(",", $kategori);
                // $catalogue = "
                //  AND product_brand IN('" . $brand_filter . "')
                // ";
                // dd($brand_filter);
                $catalogue = $catalogue->whereIn('produk_ajp.id_kategori_produk_ajp', [$brand_filter]);
            }
            if ($volume = $this->request->getVar('volume')) {
                $catalogue = $catalogue->where(['produk_ajp.id_volume_dtl_produk_ajp' => $volume]);
            }
            if ($warna = $this->request->getVar('warna')) {
                $catalogue = $catalogue->where(['produk_ajp.id_color_produk_ajp' => $warna]);
            }
            if ($berat = $this->request->getVar('berat')) {
                $catalogue = $catalogue->where(['produk_ajp.id_weight_produk_ajp' => $berat]);
            }
            if ($bahan = $this->request->getVar('bahan')) {
                $catalogue = $catalogue->where(['produk_ajp.id_material_produk_ajp' => $bahan]);
            }

            if ($this->request->getVar('sort') == 1) {
                $catalogue = $catalogue->orderBy('produk_ajp.hrg_produk_ajp', 'ASC');
            }
            if ($this->request->getVar('sort') == 2) {
                $catalogue = $catalogue->orderBy('produk_ajp.hrg_produk_ajp', 'DESC');
            }
            if ($this->request->getVar('sort') == 3) {
                $catalogue = $catalogue->orderBy('produk_ajp.updated_at', 'ASC');
            }
            $page = $this->request->getVar('page');
            if ($page) {
                $produk = $catalogue->paginate(12, 'page', $page);
                $pagers = service('pager');

                $page    = (int) ($page ?? 1);
                $perPage = 12;
                $total   = $catalogue->countAll();
                $data['pager'] = $pagers->makeLinks($page, $perPage, $total);
            } else {
                $produk = $catalogue->paginate(12);
                $data['pager'] = $catalogue->pager->Links();
            }

            if ($produk != null) {
                $data['catalogue'] = [];
                foreach ($produk as $prdk) :
                    $data['catalogue'][] = '<a href="' . site_url('Produk/' . $prdk['slug_produk_ajp']) . '" class="col"><div class="card"><img loading="lazy" src="' . site_url('assets/img/produk/' . $prdk['img_produk_ajp']) . '" class="card-img-top" alt=""><div class="card-body"><h6 class="card-title m-0"><b>' . $prdk['nm_produk_ajp'] . ' </b></h6><small class="card-title">Rp. ' . $prdk['hrg_produk_ajp'] . ' /pcs</small><br></div></div></a>';
                endforeach;
            } else {
                $data['catalogue'] = '<div class="alert alert-danger row col-lg-12" role="alert"><span class="text-center">Maaf Data Tidak Ditemukan <i class="fas fa-fw fa-exclamation-circle"></i></span></div>';
            }
            $data['token'] = csrf_hash();

            $this->response->setContentType('application/json')->setJSON($data)->send();
        }
        exit;
    }
}
