<?= $this->extend('Layout/index') ?>
<?= $this->section('Content') ?>
<?= $this->include('Layout/hero'); ?>
<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="fas fa-fw fa-smile"></i>
                    <div>
                        <span>5000</span>
                        <p>Klien Reguler</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="fas fa-fw fa-list" style="color: #ee6c20;"></i>
                    <div>
                        <span>10000+</span>
                        <p>Pesanan Berulang</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="fas fa-fw fa-headset" style="color: #15be56;"></i>
                    <div>
                        <span>12/7</span>
                        <p>Pelayanan</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="count-box">
                    <i class="fas fa-fw fa-users" style="color: #bb0852;"></i>
                    <div>
                        <span>15</span>
                        <p>Tenaga Ahli</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Counts Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Portfolio</h2>
            <p>Proses Produksi</p>
            <small>Proses produksi menggunakan mesin dengan teknologi terkini</small>
        </header>

        <div class="row portfolio-container mb-5" data-aos="fade-up" data-aos-delay="200">
            <div class="d-flex justify-content-center">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-3">
                            <img src="<?= $yt_pic['snippet']['thumbnails']['medium']['url']; ?>" width="100" class="my-3 ms-2 img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title"><?= $yt_pic['snippet']['title']; ?></h5>
                                <p><?= $yt_pic['statistics']['subscriberCount']; ?> Subscribers</p>
                                <p>
                                <div class="g-ytsubscribe" data-channelid="UC3dm9iTviPqqslD02_F7Rkw" data-layout="default" data-count="hidden"></div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-4 d-flex justify-content-center">
                <?php
                foreach ($yt_vid as $my_youtube) :
                ?>
                    <div class="col mb-5">
                        <div class="card">
                            <iframe src="https://www.youtube.com/embed/<?= $my_youtube['id']['videoId'] ?>?rel=0" title="YouTube video" allowfullscreen></iframe>
                            <div class="card-body">
                                <h5 class="card-title"><?= $my_youtube['snippet']['title'] ?></h5>
                                <p class="card-text"><?= $my_youtube['snippet']['description'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <header class="section-header">
                <p>Produk Kami</p>
            </header>
            <div class="row row-cols-1 row-cols-md-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <?php
                foreach ($instagram['data'] as $post) :
                ?>
                    <div class="col">
                        <div class="card">
                            <div class="portfolio-wrap">

                                <?php if ('IMAGE' == $post['media_type'] || 'CAROUSEL_ALBUM' == $post['media_type']) : ?>
                                    <img style="height:320px" src="<?= $post['media_url']; ?>" class="img-fluid" alt="" />
                                <?php else : ?>
                                    <video height="240" width="320" controls>
                                        <source src="<?= $post['media_url']; ?>">
                                    </video>
                                <?php endif; ?>

                                <div class="portfolio-info">
                                    <div class="portfolio-links">
                                        <a href="<?= $post['media_url']; ?>" class="portfokio-lightbox"><i class="fas fa-fw fa-image"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>

</section><!-- End Portfolio Section -->


<!-- ======= Services Section ======= -->
<section id="services" class="services">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Jasa Kami</h2>
            <p>Beberapa jasa yang kami berikan untuk solusi usaha anda</p>
        </header>

        <div class="row gy-4">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-box blue">
                    <img src="<?= base_url('assets/img/mini-logo.webp'); ?>" width="50" class="mb-3">
                    <p>Cetak logo di media beberapa jenis cup dari 1 samapi 4</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-box orange">
                    <img src="<?= base_url('assets/img/mini-logo.webp'); ?>" width="50" class="mb-3">
                    <p>Cetak logo di media beberapa jenis paper</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-box green">
                    <img src="<?= base_url('assets/img/mini-logo.webp'); ?>" width="50" class="mb-3">
                    <p>Cetak logo dimedia beberapa jenis cup sealer, standing pouch.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-box red">
                    <img src="<?= base_url('assets/img/mini-logo.webp'); ?>" width="50" class="mb-3">
                    <p>Cetak logo di media kemasan plastik take away</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-box purple">
                    <img src="<?= base_url('assets/img/mini-logo.webp'); ?>" width="50" class="mb-3">
                    <p>Cetak logo di gooody bag</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="service-box pink">
                    <img src="<?= base_url('assets/img/mini-logo.webp'); ?>" width="50" class="mb-3">
                    <p>Cetak logo souvenir di media tumbler</p>
                </div>
            </div>

        </div>

    </div>

</section><!-- End Services Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Testimonials</h2>
            <p> Bagaimana pendapat para Pelanggan kami ?</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i>
                        </div>
                        <p>
                            AJP adalah salah satu mitra kami yang selama ini membantu usaha kami berkembang sejauh ini. Sudah bekerjasama dengan AJP dari tahun 2017, dimana kami memesan hanya 2000 pcs cup sablon per bulan, sampai saat ini 30.000 pcs per minggu, AJP masih tetap dengan kualitas pelayanan dan produk yang terbaik. </p>
                        <div class="profile mt-auto">
                            <img src="<?= base_url('assets/img/testimonials/testimonials-1.webp') ?>" class="testimonial-img" alt="">
                            <h3>Sulasih</h3>
                            <h4>Pemilik Anintea</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i>
                        </div>
                        <p>Hasil printing AJP tidak pernah mengecewakan. Selama ini tim AJP selalu bersedia diajak diskusi desain secara intensif dan komprehensif. Kami merasa diperlakukan seperti mitra kerja prioritas. Bukan hanya hasil cetak yang baik, pengiriman juga selama ini selalu tepat waktu.</p>
                        <div class="profile mt-auto">
                            <img src="<?= base_url('assets/img/testimonials/testimonials-2.webp') ?>" class="testimonial-img" alt="">
                            <h3>Khalimi Abu Rizqi</h3>
                            <h4>Pemilik Happy Tea Jasmine</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i>
                        </div>
                        <p>Kami selama ini sangat dimanjakan dengan profesionalitas dari tim AJP. Pelayanan yang sangat memuaskan, proses pengerjaan cepat, admin fast response. Kualitas ini tetap AJP pertahankan dari awal sampai dengan sekarang.</p>
                        <div class="profile mt-auto">
                            <img src="<?= base_url('assets/img/testimonials/testimonials-3.webp') ?>" class="testimonial-img" alt="">
                            <h3>Paulus</h3>
                            <h4>Owner Representative (MoD) Kebun Buah</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i>
                        </div>
                        <p>Terimakasih banyak tim AJP untuk pelayanan yang sangat responsif & informatif. AJP sangat profesional dan bisa dipercaya. These guys not only care about your money, they got the work done by heart. Discussing design proofing & working on the whole process just like its their own business line.Also, they are good in doing extra miles to fulfill customer satisfaction. Recommended banget, AJP.</p>
                        <div class="profile mt-auto">
                            <img src="<?= base_url('assets/img/testimonials/testimonials-4.webp') ?>" class="testimonial-img" alt="">
                            <h3>Greta</h3>
                            <h4>Pemilik Tungku Rempah</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i>
                        </div>
                        <p>AJP selalu konsisten terhadap pemberian kualitas secara berkelanjutan. Bukan hanya kualitas hasil cetakan yang baik, tetapi selalu fair dan informatif terhadap pemberian informasi kualitas bahan baku mulai dari plastic cup sampai dengan detail cat dan pengerjaan. Kami tidak salah memilih partner bisnis dengan AJP.</p>
                        <div class="profile mt-auto">
                            <img src="<?= base_url('assets/img/testimonials/testimonials-5.webp') ?>" class="testimonial-img" alt="">
                            <h3>Sandi Aji</h3>
                            <h4>Pemilik Kita Steamboat & Yakiniku</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="stars">
                            <i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i><i class="fas fa-fw fa-star-fill"></i>
                        </div>
                        <p>AJP selalu bersinergi dengan visi kami dalam menghasilkan dan menjual produk berkualitas kepada konsumen kami. Kami berharap sinergi “win- win” ini terus berlangsung.</p>
                        <div class="profile mt-auto">
                            <img src="<?= base_url('assets/img/testimonials/testimonials-6.webp') ?>" class="testimonial-img" alt="">
                            <h3>Bayu</h3>
                            <h4>Representatif Segarfredo Zanetti</h4>
                        </div>
                    </div>
                </div><!-- End testimonial item -->


            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- End Testimonials Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Our Clients</h2>
            <p>Temporibus omnis officia</p>
        </header>

        <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="<?= base_url('assets/img/clients/client-1.webp') ?>" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= base_url('assets/img/clients/client-2.webp') ?>" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= base_url('assets/img/clients/client-3.webp') ?>" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= base_url('assets/img/clients/client-4.webp') ?>" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= base_url('assets/img/clients/client-5.webp') ?>" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= base_url('assets/img/clients/client-6.webp') ?>" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= base_url('assets/img/clients/client-7.webp') ?>" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= base_url('assets/img/clients/client-8.webp') ?>" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= base_url('assets/img/clients/client-9.webp') ?>" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= base_url('assets/img/clients/client-10.webp') ?>" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= base_url('assets/img/clients/client-11.webp') ?>" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

</section><!-- End Clients Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
        </header>

        <div class="row">
            <div class="col-lg-6">
                <!-- F.A.Q List 1-->
                <div class="accordion accordion-flush" id="faqlist1">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                Berapa minimum pemesanan kuantitas gelas yang bisa dicetak ?
                            </button>
                        </h2>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                Minimum pemesanan yang Akar Jaya Packaging terima adalah 1000 pcs untuk jenis apapun.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                Berapa rata-rata kapasitas produksi cetak dalam satu hari ?
                            </button>
                        </h2>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                Dalam satu hari Akar Jaya Packaging mampu mencetak rata-rata 30.000 pcs.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                Berapa lama pengerjaan dari proses awal sampai proses selesai ?
                            </button>
                        </h2>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                            <div class="accordion-body">
                                Untuk pengerjaan dari minimum pemesanan sebanyak 1000 pcs, Akar Jaya Packaging mampu komitmen untuk menyelesaikan dalam tempo 2 sampai 3 hari kerja, ini diluar dari proses approval design dan penyelesaian pembayaran.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">

                <!-- F.A.Q List 2-->
                <div class="accordion accordion-flush" id="faqlist2">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                                Apakah ada jasa design logo jika pelanggan belum memiliki konsep design?
                            </button>
                        </h2>
                        <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                Akar Jaya Packaging dengan senang hati akan membantu dalam proses pembuatan design dari pelanggan. Biaya yang dikeluarkan tergantung dari tingkat kerumitan logo. Hubungi kami untuk informasi lebih lanjut.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                                Jika ada perubahan logo dari logo pertama yang sudah dicetak, apakah ada biaya pembuatan film master cetakan?
                            </button>
                        </h2>
                        <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                Tidak ada biaya film master selama desain dari pelanggan sudah sesuai.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                                Jika jumlah pesanan barang jadi yang diterima kurang secara kuantitas dan ada yang reject, apakah ada garansi?
                            </button>
                        </h2>
                        <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                            <div class="accordion-body">
                                Akar Jaya Packaging memastikan kualitas pelayanan garansi untuk produk rusak dan kurang sesuai dengan ketentuan yang berlaku.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>


</section><!-- End F.A.Q Section -->
<?= $this->endSection() ?>