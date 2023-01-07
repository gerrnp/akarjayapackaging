<?= $this->extend('Layout/index'); ?>
<?= $this->Section('Content'); ?>
<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container mt-0 pt-0">
        <!-- Outer Row -->
        <div class="row justify-content-center mt-5 p-0">
            <div class="col-lg-6">
                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="contact__content">
                                        <div class="contact__address">
                                            <h5> <i class="fas fa-fw fa-user-circle"></i> Register</h5>
                                            <?= view('Myth\Auth\Views\_message_block') ?>
                                        </div>
                                    </div>
                                    <div class="contact__form mt-0 pt-0">
                                        <form action="<?= base_url(route_to('register')) ?>" method="post">
                                            <?= csrf_field() ?>
                                            <div class="form-row">
                                                <div class="col-sm-12 mb-3">
                                                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                                    <small id="emailHelp" class="form-text text-muted ml-1"><?= lang('Auth.weNeverShare') ?></small>
                                                </div>
                                                <div class="col-sm-12 mb-3">
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                                                </div>
                                                <div class="col-sm-12 mb-3">
                                                    <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                                                </div>
                                                <div class="col-sm-12 mb-3">
                                                    <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-primary" type="button"><?= lang('Auth.register') ?></button>
                                            </div>
                                        </form>
                                        <hr>
                                        <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= base_url(route_to('login')) ?>"><?= lang('Auth.signIn') ?></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Contact Section End -->
<?= $this->endSection(); ?>