<?= $this->extend('Layout/index') ?>
<?= $this->section('Content') ?>
<section id="portfolio" class="portfolio mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="portfolio-wrap">
                    <img alt="<?= $produk['slug_produk_ajp']; ?>" src="<?= base_url('assets/img/produk/' . $produk['img_produk_ajp']) ?>" class="img-fluid img-center mb-4">
                    <div class="portfolio-info">
                        <h4><?= $produk['nm_produk_ajp']; ?></h4>
                        <div class="portfolio-links">
                            <a href="<?= base_url('assets/img/produk/' . $produk['img_produk_ajp']) ?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?= $produk['nm_produk_ajp']; ?>"><i class="fas fa-fw fa-image"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <nav class="navbar bg-white">
                    <h1><b><?= $produk['nm_produk_ajp']; ?></b></h1>
                </nav>
                <p class=" bg-white pb-3 bg-white">
                    <?= $produk['desc_produk_ajp']; ?>
                </p>
                <h3><b>Spesifikasi Produk</b></h3>
                <input type="hidden" class="estimasi" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

                <div class="pb-3 bg-white">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Qty</label>
                        <div class="col-sm-10">
                            <?= csrf_field(); ?>
                            <div class="input-group mb-3">
                                <input type="hidden" name="produk" value="<?= $produk['slug_produk_ajp']; ?>">
                                <input type="text" class="form-control" placeholder="Qty" aria-label="Qty" aria-describedby="qty" value="<?= $qty; ?>" name="qty">
                                <button class="btn btn-sm btn-primary cek_harga" type="submit"><i class="fas fa-fw fa-search"></i> Cek Harga</button>
                            </div>
                        </div>
                    </div>
                </div>
                <h3><b>Estimasi Harga</b></h3>
                <p class="text-danger">(Harga sewaktu-waktu dapat berubah, hubungi kami untuk informasi lebih lanjut).</p>
                <div class="pb-3 bg-white">
                    <div class="table-responsive">
                        <table class="table bg-white">
                            <?php
                            $qtys = $produk['hrg_produk_ajp'];
                            $total = $qty * $produk['hrg_produk_ajp'];
                            ?>
                            <tbody>
                                <tr>
                                    <td>Harga / pcs</td>
                                    <td class="text-end">Rp.<span class="harga"><?= $produk['hrg_produk_ajp']; ?></span>,-</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td class="text-end">Rp.<span class="total"><?= $total; ?></span>,-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="hstack d-none d-lg-block float-end">
                        <a href="whatsapp://send?text=Saya ingin pesan ini <?= $produk['nm_produk_ajp']; ?>&phone=+6282246283108" class="btn btn-primary">
                            <i class="fab fa-fw fa-whatsapp"></i> Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<nav class="navbar fixed-bottom navbar-expand-lg bg-primary d-lg-none d-md-block d-sm-block">
    <div class="container justify-content-center">
        <a class="wa_ajp" href="whatsapp://send?text=Saya ingin pesan ini <?= $produk['nm_produk_ajp'] ?>&phone=+6282246283108" class="text-light p-3">
            <i class="fab fa-fw fa-whatsapp me-2"></i>Pesan Sekarang
        </a>
    </div>
</nav>
<?= $this->endSection() ?>