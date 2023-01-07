<?= $this->extend('Layout/index') ?>
<?= $this->section('Content') ?>
<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container mt-5 pt-0">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card o-hidden border-0 shadow-lg">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="contact__content">
                                        <div class="contact__address">
                                            <h5> <i class="fas fa-fw fa-user-circle"></i> <?= lang('Auth.loginTitle') ?></h5>
                                            <?= view('Myth\Auth\Views\_message_block') ?>
                                        </div>
                                    </div>
                                    <div class="contact__form">
                                        <form action="<?= base_url(route_to('login')) ?>" method="post" class="d-inline">
                                            <?= csrf_field() ?>
                                            <div class="form-row">
                                                <div class="col-sm-12 mb-3">
                                                    <?php if ($config->validFields === ['email']) : ?>
                                                        <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                                                        <div class="invalid-feedback ml-1">
                                                            <?= session('errors.login') ?>
                                                        </div>
                                                    <?php else : ?>
                                                        <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                                                        <div class="invalid-feedback ml-1">
                                                            <?= session('errors.login') ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>

                                                <div class="col-sm-12 mb-3">
                                                    <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?> is-invalid <?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                                                    <div class="invalid-feedback">
                                                        <?= session('errors.password') ?>
                                                    </div>
                                                </div>
                                                <?php if ($config->allowRemembering) : ?>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                            <?= lang('Auth.rememberMe') ?>
                                                        </label>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-primary" type="button"><?= lang('Auth.loginAction') ?></button>
                                            </div>
                                        </form>
                                        <hr>
                                        <?php if ($config->allowRegistration) : ?>
                                            <p><a href="<?= base_url(route_to('register')) ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                                        <?php endif; ?>
                                        <?php if ($config->activeResetter) : ?>
                                            <p><a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                                        <?php endif; ?>
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