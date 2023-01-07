public function filter()
{
if ($this->request->isAJAX()) {
$catalogue = $this->ProdukModels->table('produk_ajp')->where(['id_qty_produk_ajp' => 1]);

if ($kategori = $this->request->getVar('kategori')) {
$catalogue = $catalogue->where(['produk_ajp.id_kategori_produk_ajp' => $kategori]);
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
$pages = $this->request->getVar('page');
if ($pages) {
$produk = $catalogue->paginate(12, 'page', $pages);
$pagers = service('pager');

$page = (int)($this->request->getGet('page') ?? 1);
$perPage = 12;
$total = $catalogue->countAll();
// $data['token'] = csrf_hash();
// $data['pager'] = $catalogue->pager->Links('page', $perPage, $total);
$data['pager'] = $pagers->makeLinks($page, $perPage, $total);
} else {
$produk = $catalogue->paginate(12);
$data['pager'] = $catalogue->pager->Links();
// Call makeLinks() to make pagination links.

// $data['pager'] = $pager->makeLinks($page, $perPage, $total);
}

if ($produk != null) {
$data['catalogue'] = [];
foreach ($produk as $prdk) :
$data['catalogue'][] = '<a href="' . site_url('Produk/' . $prdk['slug_produk_ajp']) . '" class="col">
    <div class="card"><img loading="lazy" src="' . site_url('assets/img/produk/' . $prdk['img_produk_ajp']) . '" class="card-img-top" alt="">
        <div class="card-body">
            <h6 class="card-title m-0"><b>' . $prdk['nm_produk_ajp'] . ' </b></h6><small class="card-title">Rp. ' . $prdk['hrg_produk_ajp'] . ' /pcs</small><br>
        </div>
    </div>
</a>';
endforeach;
} else {
$data['catalogue'] = '<div class="alert alert-warning" role="alert">
    Maaf data Tidak ditemukan!
</div>';
}
$data['token'] = csrf_hash();

$this->response->setContentType('application/json')->setJSON($data)->send();
}
exit;
}