<?php
/**** Pages template file ****/
 get_header(); ?>

<div class="breadcrumb">
    <div class="container">
        <?php wp_custom_breadcrumbs(); ?>
    </div>
</div>
<section class="page <?php echo get_post_field( 'post_name', get_post() );?>">
    <?php get_sidebar(); ?>
    <div class="page--content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="page--title"><?php echo get_field('titulo_da_pagina'); ?></h1>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
            if ($image) : ?>
                <img class="page--featured-image" src="<?php echo $image[0]; ?>" alt="" class="image" />
            <?php 
            endif;
            the_content();
        endwhile; endif; ?>
    </div>
</section>

  <?php get_footer(); ?>