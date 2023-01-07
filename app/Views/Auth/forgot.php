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
                                            <h5> <i class="fas fa-fw fa-circle-exclamation"></i> <?= lang('Auth.forgotPassword') ?></h5>
                                            <?= view('Myth\Auth\Views\_message_block') ?>

                                            <p><?= lang('Auth.enterEmailForInstructions') ?></p>
                                        </div>
                                    </div>
                                    <div class="contact__form">
                                        <form action="<?= url_to('forgot') ?>" method="post">
                                            <?= csrf_field() ?>

                                            <div class="form-group">
                                                <label for="email"><?= lang('Auth.emailAddress') ?></label>
                                                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
                                                <div class="invalid-feedback">
                                                    <?= session('errors.email') ?>
                                                </div>
                                            </div>

                                            <br>
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-primary" type="button"><?= lang('Auth.sendInstructions') ?></button>
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