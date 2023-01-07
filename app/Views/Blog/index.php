<?= $this->extend('Layout/index') ?>
<?= $this->section('Content') ?>
<!-- ======= Blog Section ======= -->
<section id="blog" class="blog mt-5">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-8 entries">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <?php foreach ($all_blog as $ab) : ?>
                        <div class="col">
                            <a href="<?= base_url('Blog/' . $ab['slug_blog_ajp']); ?>">
                                <div class="card h-100">
                                    <img src="<?= base_url('assets/img/blog/' . $ab['img_blog_ajp']) ?>" class="card-img-top" alt="<?= $ab['img_blog_ajp']; ?>">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark"><?= $ab['head_blog_ajp']; ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="blog-pagination">
                    <?= $pager_blog->links(); ?>
                </div>
            </div><!-- End blog entries list -->

            <div class="col-lg-4">

                <div class="sidebar">

                    <h3 class="sidebar-title">Search</h3>
                    <div class="sidebar-item search-form">
                        <form action="">
                            <input type="text">
                            <button type="submit"><i class="fas fa-fw fa-search"></i></button>
                        </form>
                    </div><!-- End sidebar search formn-->

                    <h3 class="sidebar-title">Recent Posts</h3>
                    <?= $this->include('Blog/recent_posts.php'); ?>
                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>

    </div>
</section><!-- End Blog Section -->
<?= $this->endSection() ?>