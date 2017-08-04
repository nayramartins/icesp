<?php include 'header.php' ?>
<?php $banner = get_theme_mod('banner_home'); ?>
<?php $logos = get_theme_mod('regua_logos'); ?>
<div class="breadcrumb">
    <div class="container">
        <?php wp_custom_breadcrumbs(); ?>
    </div>
</div>
<div class="search page">
    <div class="page--content">
        <div class="search-content">
            <div class="title-content">
                <h3><?php pll_e( 'Resultados para:'); ?><span><?php echo $_GET['s']; ?></span></h3>
            </div>
        </div>
        <?php if (have_posts()): ?>
            <ul class="search-result--content">
                <?php while ( have_posts() ) : the_post(); ?>
                    <li>
                        <span class="search-text">
                            <a href="<?php the_permalink(); ?>">
                                <p class="title"><?php the_title(); ?></p>
                                <p class="text-content"><?php the_excerpt(); ?></p>
                            </a>
                        </span>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <div> <?php pll_e( 'nenhum post' ); ?></div>
        <?php endif; ?>
    </div>
</div>
<section class="content-logo">
    <img src="<?php echo $logos; ?>" alt="" />
</section>
<?php include 'footer.php' ?>
