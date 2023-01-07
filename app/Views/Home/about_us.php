<?= $this->extend('Layout/index') ?>
<?= $this->section('Content') ?>
<section id="about" class="about mt-4">

    <div class="container" data-aos="fade-up">
        <!-- Feature Tabs -->
        <div class="row feture-tabs" data-aos="fade-up">
            <div class="col-lg-6">
                <h2>VISI, & MISI</h2>

                <!-- Tabs -->
                <ul class="nav nav-pills mb-3">
                    <li>
                        <a class="nav-link active" data-bs-toggle="pill" href="#visi">VISI</a>
                    </li>
                    <li>
                        <a class="nav-link" data-bs-toggle="pill" href="#misi">MISI</a>
                    </li>
                </ul><!-- End Tabs -->

                <!-- Tab Content -->
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="visi">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-fw fa-circle"></i>
                            <p class="text-justify ms-3 pt-4">Menjadi perusahaan percetakan yang terpercaya dan dapat memenuhi permintaan pelanggan dengan produk berkualitas.</p>
                        </div>
                    </div><!-- End Tab 1 Content -->

                    <div class="tab-pane fade show" id="misi">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-fw fa-circle"></i>
                            <h6 class="mt-2">&nbsp; Menjaga kualitas dan kepuasan pelanggan.</h6>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-fw fa-circle"></i>
                            <h6 class="mt-2">&nbsp; Memberikan design / jasa cetak yang ekonomis.</h6>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-fw fa-circle"></i>
                            <h6 class="mt-2">&nbsp; Mengembangkan SDM yang profesional.</h6>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-fw fa-circle"></i>
                            <h6 class="mt-2">&nbsp; Meningkatkan komunikasi serta layanan yang terbaik.</h6>
                        </div>
                    </div><!-- End Tab 2 Content -->
                </div>

            </div>

            <div class="col-lg-6">
                <img src="<?= base_url('assets/img/about_us_1.webp') ?>" class="img-fluid" alt="">
            </div>

        </div><!-- End Feature Tabs -->
        <div class="row feture-tabs ">

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h3>SIAPAKAH KAMI ?</h3>
                    <h2>Akar Jaya Packaging (AJP) terbentuk dari semangat pendiri dan pekerja didalamnya yang terus berkembang untuk semakin professional.</h2>
                    <p>
                        AJP adalah mitra tepat dan cocok yang telah melayani banyak pelaku usaha UMKM makanan, minuman, merchandise selama lebih dari 5 tahun. AJP mengedepankan pelayanan terbaik dengan kualitas dan harga yang kompetitif.
                    </p>
                    <ul>
                        <li>Berdiri sejak 2015</li>
                        <li>Melayani lebih dari 1000 merek dagang UMKM</li>
                        <li>Mencetak lebih dari 500.000 pcs per bulan</li>
                        <li>4 variasi pilihan komposisi warna desain</li>
                        <li>Menjual berbagai produk pelengkap untuk mendukung penjualan anda</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="<?= base_url('assets/img/about.jpg') ?>" class="img-fluid" alt="">
            </div>

        </div>
    </div>

</section><!-- End About Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">

    <div class="container" data-aos="fade-up">

        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up">
            <h3>PERCAYAKAN KEPADA KAMI</h3>

            <div class="row">

                <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/trust.webp" class="img-fluid p-4" alt="">
                </div>

                <div class="col-xl-8 d-flex content">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6 icon-box" data-aos="fade-up">
                            <i class="ri-line-chart-line"></i>
                            <div>
                                <h4>Target Pesanan yang terukur</h4>
                                <p>Jumlah pesanan yang telah disepakati adalah amanah dan target yang harus ditepati.</p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="ri-stack-line"></i>
                            <div>
                                <h4>Administrasi yang tertib dan lengkap</h4>
                                <p>AJP memastikan semua urusan administrasi yang tertib dan teratur, untuk memudahkan pelanggan menerima tagihan, histori nota belanja, dan lainnya secara lengkap.</p>
                            </div>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i class="ri-command-line"></i>
                            <div>
                                <h4>Kolaborasi dan diskusi</h4>
                                <p>Staff kami dengan senang hati menerima masukan dan kritik membangun. Kami selalu menganggap pelanggan kami sebagai mitra untuk maju bersama</p>
                            </div>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class="ri-magic-line"></i>
                            <div>
                                <h4>Mitra tepat maju bersama</h4>
                                <p>AJP dengan senang hati membantu usaha anda ke level yang lebih baik dengan potensi pengembangan packaging untuk usaha anda.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div><!-- End Feature Icons -->
        <?= $this->endSection() ?>