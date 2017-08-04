<?php include 'header.php' ?>
<?php $banner = get_theme_mod('banner_home'); ?>
<?php $logos = get_theme_mod('regua_logos'); ?>
<?php if (have_posts()):
    while ( have_posts() ) : the_post(); ?>
        <div class="eventos-content">
            <?php the_title(); ?>
            <?php the_content(); ?>
            <?php the_field('data_do_evento'); ?>
        </div>
<?php endwhile; endif; ?>
<section class="content-logo">
    <img src="<?php echo $logos; ?>" alt="" />
</section>
<?php include 'footer.php' ?>
