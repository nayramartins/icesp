<?php
/**** Comissão template file ****/
 get_header(); ?>

<div class="breadcrumb">
    <div class="container">
        <?php wp_custom_breadcrumbs(); ?>
    </div>
</div>

<section class="page <?php echo get_post_field( 'post_name', get_post() );?>">
    <?php get_sidebar(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="pesquisa">
            <h2><?php the_title(); ?> </h2>

        </div>

    <?php endwhile; endif; ?>
</section>
<?php include 'footer.php' ?>