<?= $this->extend('Layout_Dashboard/index') ?>
<?= $this->section('Dashboard') ?>
<div class="content">
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('message'); ?>"></div>
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold"><?= $title; ?></h2>
                </div>
                <div class="ms-md-auto py-2 py-md-0 d-none d-md-block">
                    <a href="<?= base_url('Created_Blog'); ?>" class="btn btn-light btn-round"><i class="fas fa-fw fa-plus"></i> Add Blog</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($blog as $b) : ?>
                <a href="<?= base_url('Updated_Blog/' . $b['slug_blog_ajp']); ?>" class="col">
                    <div class="card h-100">
                        <img src="<?= base_url('assets/img/blog/' . $b['img_blog_ajp']); ?>" class="card-img-top" alt="<?= $b['img_blog_ajp']; ?>">
                        <div class="card-body">
                            <h1 class="card-title"><?= htmlspecialchars($b['head_blog_ajp']); ?></h4>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>


    </div>
</div>
<nav class="navbar sticky-bottom bg-light d-block d-md-none d-sm-none">
    <div class="container-fluid">
        <div class="d-grid gap-2 col-12 mx-auto">
            <a href="#" class="btn btn-primary" type="button">Button</a>
        </div>
    </div>
</nav>

<?= $this->endSection() ?>