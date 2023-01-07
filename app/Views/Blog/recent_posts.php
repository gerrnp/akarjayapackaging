<div class="sidebar-item recent-posts">
    <?php foreach ($recent_posts as $rp) : ?>
        <div class="post-item clearfix">
            <img src="<?= base_url('assets/img/blog/' . $rp['img_blog_ajp']) ?>" alt="">
            <h4><a href="<?= base_url('Blog/' . $rp['slug_blog_ajp']); ?>"><?= $rp['head_blog_ajp']; ?></a></h4>
            <time datetime="2020-01-01">Jan 1, 2020</time>
        </div>
    <?php endforeach; ?>

</div><!-- End sidebar recent posts-->