<?= $this->extend('Layout/index') ?>
<?= $this->section('Content') ?>
<!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog mt-5">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-8 entries">

                <article class="entry entry-single">

                    <div class="entry-img">
                        <img src="<?= base_url('assets/img/blog/' . $blog['img_blog_ajp']); ?>" alt="" class="img-fluid">
                    </div>
                    <title> <?= $blog['head_blog_ajp']; ?></title>
                    <h2 class="entry-title">
                        <?= $blog['head_blog_ajp']; ?>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="fas fa-fw fa-clock"></i><?= date($blog['created_at']); ?></li>
                            <li class="d-flex align-items-center"><i class="fas fa-fw fa-comments"></i> <a href="#blog-comments"><?= count($blog_comment); ?> Comments</a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <p>
                            <?= $blog['content_blog_ajp']; ?>
                        </p>
                    </div>

                    <div class="entry-footer">
                        <ul class="tags">
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                    </div>

                </article><!-- End blog entry -->
                <hr>
                <div class="blog-comments" id="blog-comments">

                    <h4 class="comments-count mb-3"><?= count($blog_comment); ?> Comments</h4>
                    <div class="comments">
                        <!-- add comments -->
                        <form class="form-block" action="<?= base_url('Add_Comment'); ?>" method="POST">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="slug" class="form-control" value="<?= $blog['slug_blog_ajp']; ?>">
                            <div class="be-comment">
                                <div class="be-img-comment">
                                    <a href="blog-detail-2.html">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment">
                                    </a>
                                </div>
                                <div class="be-comment-content">
                                    <p class="be-comment-text">
                                    <form>
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="text" name="name" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" placeholder="Name" value="<?= old('name'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('name'); ?>
                                                </div>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <input type="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" placeholder="email" value="<?= old('email'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('email'); ?>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <textarea name="comment" class="form-control <?= ($validation->hasError('comment')) ? 'is-invalid' : ''; ?>" rows="3"><?= old('comment'); ?></textarea>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('comment'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </p>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button class="btn btn-primary" type="submit">Comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- reply comments -->

                        <div class="be-comment-block">
                            <?php
                            $btn_reply = 1;
                            $form_reply = 1;
                            $balasan = 1;
                            $content_balasan = 1;
                            $reply_balasan = 1;
                            $form_reply_balasan = 1;
                            foreach ($blog_comment as $bc) : ?>
                                <div class="be-comment mb-4">
                                    <div class="be-img-comment">
                                        <a href="blog-detail-2.html">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment">
                                        </a>
                                    </div>
                                    <div class="be-comment-content">

                                        <span class="be-comment-name">
                                            <a href="blog-detail-2.html"><?= $bc['name_user_blog_comment_ajp']; ?> <?= $bc['created_at']; ?></a>
                                        </span>
                                        <div class="row">
                                            <div class="col-10">
                                                <?= $bc['blog_comment_ajp']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div><!-- End blog comments -->

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
</section><!-- End Blog Single Section -->
<?= $this->endSection() ?>