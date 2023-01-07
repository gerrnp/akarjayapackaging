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
                <div class="ms-md-auto py-2 py-md-0">
                    <a href="<?= base_url('My_Blog'); ?>" class="btn btn-light btn-round"><i class="fas fa-fw fa-chevron-left"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row row-card-no-pd">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-head-row card-tools-still-right">
                            <h4 class="card-title">Form Blog</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Created_Blog'); ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <div class="mb-3">
                                        <img src="<?= base_url('assets/img/blog/blog-1.jpg'); ?>" class="img-fluid img-preview" alt="...">
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="mb-3">
                                        <label for="imgblog" class="form-label">Image Blog</label>
                                        <input name="imgblog" class="form-control" onchange="previewImg()" type="file" id="imgblog">
                                    </div>
                                    <div class="mb-3">
                                        <label for="headline" class="form-label">Head Line</label>
                                        <input type="text" name="headline" class="form-control <?= ($validation->hasError('headline')) ? 'is-invalid' : ''; ?>" id="headline" autofocus placeholder="Head Line Blog" value="<?= old('headline'); ?>">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('headline'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="mb-3">
                                        <label for="ContentBlog" class="form-label">Content Blog</label>
                                        <textarea class="form-control <?= ($validation->hasError('contentblog')) ? 'is-invalid' : ''; ?>" name="contentblog" id="editor" rows="5"><?= old('contentblog'); ?></textarea>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('contentblog'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="submit"><i class="fas fa-fw fa-plus"></i> Buat</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>