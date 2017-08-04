<?php include 'header.php' ?>
<?php $banner = get_theme_mod('banner_home'); ?>
<?php $logos = get_theme_mod('regua_logos'); ?>
<div class="search-content">
    <div class="title-content">
        <h3><?php pll_e( 'Resultados para:'); ?><span><?php echo $_GET['s']; ?></span></h3>
    </div>
</div>
<?php if (have_posts()): ?>
    <?php while ( have_posts() ) : the_post(); ?>
<?php endwhile; endif; ?>
<section class="content-logo">
    <img src="<?php echo $logos; ?>" alt="" />
</section>
<?php include 'footer.php' ?>
