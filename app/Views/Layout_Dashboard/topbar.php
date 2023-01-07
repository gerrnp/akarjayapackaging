<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="blue">

        <a href="<?= base_url('/Dashboard'); ?>" class="logo">
            <img src="<?= base_url('assets/assets/img/logo.svg') ?>" alt="navbar brand" class="navbar-brand">
        </a>
        <button class="navbar-toggler sidenav-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fas fa-fw fa-bars"></i>
            </span>
        </button>
        <a class="btn btn-sm btn-primary topbar-toggler more mt--3">
            <div class="avatar-sm">
                <img src="<?= base_url('assets/assets/img/profile.jpg') ?>" alt="..." class="avatar-img rounded-circle">
            </div>
        </a>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="fas fa-fw fa-bars"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

        <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li class="nav-item dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" aria-expanded="true">
                        <div class="avatar-sm">
                            <img src="<?= base_url('assets/assets/img/profile.jpg') ?>" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg"><img src="<?= base_url('assets/assets/img/profile.jpg') ?>" alt="image profile" class="avatar-img rounded"></div>
                                    <div class="u-text">
                                        <h4><?= user()->username; ?></h4>
                                        <p class="text-muted"><?= user()->email; ?></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('My_profile'); ?>">My Profile</a>
                                <a class="dropdown-item" href="#">Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('/logout'); ?>">Logout</a>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>