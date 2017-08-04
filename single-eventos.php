<?php include 'header.php' ?>
<?php $banner = get_theme_mod('banner_home'); ?>
<?php $logos = get_theme_mod('regua_logos'); ?>
<div class="breadcrumb">
    <div class="container">
        <?php wp_custom_breadcrumbs(); ?>
    </div>
</div>
<?php if (have_posts()):
    while ( have_posts() ) : the_post(); ?>
    <div class="eventos">
       <div class="sidebar">
        <ul class="event-box">
            <li><?php pll_e( 'outros eventos' ); ?></li>
            <?php $args = array( 'post_type' => 'eventos', 'posts_per_page' => 6 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            $date = get_field('data_do_evento');
            ?>
            <li><a href="<?php the_permalink(); ?>"><span class="date"><?php echo $date; ?> - </span> <?php the_title(); ?></a></li>
        <?php endwhile; ?>
    </ul>
</div>
<div class="eventos-content page--content">
    <h2 class="page--title"><?php pll_e( 'eventos' ); ?></h2>
    <p class="eventos-title"><?php the_title(); ?> | <?php the_field('data_do_evento'); ?></p>
    <p class="eventos-content_text">
        <?php the_content(); ?>
    </p>
</div>
</div>
<?php endwhile; endif; ?>
<section class="content-logo">
    <img src="<?php echo $logos; ?>" alt="" />
</section>
<?php include 'footer.php' ?>
