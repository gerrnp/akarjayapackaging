<?= $this->extend('Layout/index') ?>
<?= $this->section('Content') ?>
<section id="counts" class="counts mt-4">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col-3 px-4 d-none d-lg-block">
                <div class="row justify-content-between mb-3">
                    <div class="col">
                        <h4><i class="fas fa-fw fa-filter"></i> FILTER</h4>
                    </div>
                </div>
                <?= $this->include('Catalogue/filter_catalogue'); ?>
            </div>
            <div class="col-lg-9 px-4">
                <div class="row justify-content-between mb-3">
                    <div class="col-6">
                        <h3>Katalog</h3>
                    </div>
                    <div class="col-3 d-none d-lg-block">
                        <select class="form-select common_selector sort" name="sort">
                            <option value="4">---</option>
                            <option value="1">Harga Terendah</option>
                            <option value="2">Harga Tertinggi</option>
                            <option value="3">Produk Terbaru</option>
                        </select>
                    </div>
                </div>
                <div class="container-fluid">
                    <a class="navbar-brand"></a>
                </div>
                <div class="row row-cols-2 row-cols-md-4 row-cols-sm-2 g-2 product">

                </div>
                <div class="pager"></div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="modal_filter" aria-hidden="true" aria-labelledby="modal_filterLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_filterLabel"><i class="fas fa-fw fa-filter"></i> Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= $this->include('Catalogue/filter_catalogue'); ?>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_sort" aria-hidden="true" aria-labelledby="modal_sortLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_sortLabel"><i class="fas fa-fw fa-sort"></i> Urutkan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <select class="form-select" name="sort">
                    <option value="4">---</option>
                    <option value="1">Harga Terendah</option>
                    <option value="2">Harga Tertinggi</option>
                    <option value="3">Produk Terbaru</option>
                </select>
            </div>
        </div>
    </div>
</div>
<nav class="navbar fixed-bottom navbar-expand-lg bg-light d-lg-none d-md-block d-sm-block">
    <button type="button" class="btn flex-grow-1 p-3 col text-primary" data-bs-toggle="modal" data-bs-target="#modal_filter"><i class="fas fa-fw fa-filter"></i> Filter</button>
    <button type="button" class="btn flex-grow-1 p-3 col text-primary" data-bs-toggle="modal" data-bs-target="#modal_sort"><i class="fas fa-fw fa-sort"></i> Urutkan</button>
</nav>

<?= $this->endSection() ?>