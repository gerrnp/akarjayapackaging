<?= $this->extend('Layout_Dashboard/index') ?>
<?= $this->section('Dashboard') ?>
<div class="content mt-5">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold"><?= $title; ?></h2>
                </div>
                <div class="ms-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-secondary btn-round"><i class="fas fa-fw fa-edit"></i> Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col">
                <div class="card full-height">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="mb-3">
                                    <label>Role :</label>
                                    <label for="username" class="badge badge-xs badge-primary"><?= user()->username; ?></label>
                                </div>
                                <div class="col-4">
                                    <img class="img-thumbnail img-preview" src="<?= base_url('assets/img/profile/profile.jpg'); ?>" alt="profile.jpg">
                                </div>
                                <div class="col-8">
                                    <div class="row mb-3">
                                        <label for="imgblog" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input name="imgprofile" class="form-control" onchange="previewImg()" type="file" id="imgblog">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" value="<?= (old('email') ? old('email') : user()->email); ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="fullname" class="col-sm-2 col-form-label">Fullname</label>
                                        <div class="col-sm-10">
                                            <input type="fullname" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : ''; ?>" id="fullname" value="<?= (old('fullname') ? old('fullname') : user()->fullname); ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="username" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" value="<?= (old('username') ? old('username') : user()->username); ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword3">
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-sm btn-rounded btn-primary"><i class="fas fa-fw fa-edit"></i> Edit Profile</button>
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