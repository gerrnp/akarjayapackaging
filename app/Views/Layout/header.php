<!-- ======= Header ======= -->
<header id="header" class="header fixed-top header-scrolled">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="<?= base_url('/'); ?>" class="logo d-flex align-items-center">
            <img src="<?= base_url('assets/img/logo.webp') ?>" alt="">
        </a>
        <nav class="navbar navbar-expand-lg" aria-label="Main navigation">
            <div class="container-fluid">
                <button class="navbar-toggler p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="menu">
                    <span class="fas fa-fw fa-bars"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="menu" aria-labelledby="menuLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="menuLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <nav class="nav nav-pills nav-justified flex-column flex-sm-row">
                            <a href="<?= base_url('/'); ?>" class="flex-sm-fill text-sm-center nav-link ps-2 pe-3">Beranda</a>
                            <a href="<?= base_url('/Blog'); ?>" class="flex-sm-fill text-sm-center nav-link ps-2 pe-3">Blog</a>
                            <a href="<?= base_url('/About_Us'); ?>" class="flex-sm-fill text-sm-center nav-link ps-2 pe-3">Tentang Kami</a>
                            <a href="<?= base_url('/Kontak'); ?>" class="flex-sm-fill text-sm-center nav-link ps-2 pe-3">Kontak</a>
                            <a href="<?= base_url('/Katalog'); ?>" class="flex-sm-fill text-sm-center nav-link active ps-2 pe-2" aria-current="page" href="<?= base_url('/Kategori'); ?>">Katalog</a>
                            <?php if (user()) : ?>
                                <a href="<?= base_url('/Dashboard'); ?>" class="flex-sm-fill text-sm-center nav-link ps-2 pe-3">Dashboard</a>
                            <?php endif; ?>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header><!-- End Header -->