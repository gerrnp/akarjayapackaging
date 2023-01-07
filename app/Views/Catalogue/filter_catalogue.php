<div class="accordion accordion-flush" id="accordionFlushExample">

    <input type="hidden" class="estimasi" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingKategori">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseKategori" aria-expanded="false" aria-controls="flush-collapseKategori">
                Kategori
            </button>
        </h2>
        <div id="flush-collapseKategori" class="accordion-collapse collapse" aria-labelledby="flush-headingKategori">
            <div class="accordion-body">
                <div class="list-group list-group-flush">
                    <?php foreach ($kategori as $k) : ?>
                        <input type="radio" class="btn-check common_selector kategori" name="kategori" id="<?= $k['nm_kategori_produk_ajp']; ?>" autocomplete="off" value="<?= $k['id_kategori_produk_ajp']; ?>">
                        <label class="btn btn-outline-primary mb-2" for="<?= $k['nm_kategori_produk_ajp']; ?>"><?= $k['nm_kategori_produk_ajp']; ?></label>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingVolume">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseVolume" aria-expanded="false" aria-controls="flush-collapseVolume">
                Volume
            </button>
        </h2>
        <div id="flush-collapseVolume" class="accordion-collapse collapse" aria-labelledby="flush-headingVolume">
            <div class="accordion-body">
                <div class="list-group list-group-flush">
                    <?php foreach ($volume as $v) : ?>
                        <input type="radio" class="btn-check common_selector volume" name="volume" id="<?= $v['nm_volume_dtl_produk_ajp']; ?>" autocomplete="off" value="<?= $v['id_volume_dtl_produk_ajp']; ?>">
                        <label class="btn btn-outline-primary mb-2" for="<?= $v['nm_volume_dtl_produk_ajp']; ?>"><?= $v['nm_volume_dtl_produk_ajp']; ?> oz</label>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingWeight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseWeight" aria-expanded="false" aria-controls="flush-collapseWeight">
                Berat
            </button>
        </h2>
        <div id="flush-collapseWeight" class="accordion-collapse collapse" aria-labelledby="flush-headingWeight">
            <div class="accordion-body">
                <div class="list-group list-group-flush">
                    <?php foreach ($berat as $b) : ?>
                        <input type="radio" class="btn-check common_selector berat" name="berat" id="<?= $b['nm_weight_produk_ajp']; ?>" autocomplete="off" value="<?= $b['id_weight_produk_ajp']; ?>">
                        <label class="btn btn-outline-primary mb-2" for="<?= $b['nm_weight_produk_ajp']; ?>"><?= $b['nm_weight_produk_ajp']; ?></label>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingProduk">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseProduk" aria-expanded="false" aria-controls="flush-collapseProduk">
                Bahan
            </button>
        </h2>
        <div id="flush-collapseProduk" class="accordion-collapse collapse" aria-labelledby="flush-headingProduk">
            <div class="accordion-body">
                <div class="list-group list-group-flush">
                    <?php foreach ($material as $m) : ?>
                        <input type="radio" class="btn-check common_selector bahan" name="bahan" id="<?= $m['nm_material_produk_ajp']; ?>" autocomplete="off" value="<?= $m['id_material_produk_ajp']; ?>">
                        <label class="btn btn-outline-primary mb-2" for="<?= $m['nm_material_produk_ajp']; ?>"><?= $m['nm_material_produk_ajp']; ?></label>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingColor">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseColor" aria-expanded="false" aria-controls="flush-collapseColor">
                Warna
            </button>
        </h2>
        <div id="flush-collapseColor" class="accordion-collapse collapse" aria-labelledby="flush-headingColor">
            <div class="accordion-body">
                <div class="list-group list-group-flush">
                    <?php foreach ($color as $c) : ?>
                        <input type="radio" class="btn-check common_selector warna" name="warna" id="<?= $c['nm_color_produk_ajp']; ?>" autocomplete="off" value="<?= $c['id_color_produk_ajp']; ?>">
                        <label class="btn btn-outline-primary mb-2" for="<?= $c['nm_color_produk_ajp']; ?>"><?= $c['nm_color_produk_ajp']; ?></label>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>