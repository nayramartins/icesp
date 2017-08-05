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
        <div class="venn">
            <h2><?php the_title(); ?> </h2>
            <div class="venn-content">
                <img class="pesquisador-image" src="<?php echo customBlogUrl(); ?>/images/venn.png" alt="" class="image" />
                <span class="area-externa"><?php the_field('area_externa'); ?></span>
                <span class="sistema"><?php the_field('sistema'); ?></span>
                <div class="area_esquerda">
                    <?php the_field('area_esquerda'); ?>
                    <span ><?php the_field('subtitulo_area_esquerda'); ?></span>
                </div>
                <div class="area_superior">
                    <?php the_field('area_superior'); ?>
                    <span ><?php the_field('subtitulo_area_superior'); ?></span>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>


</section>

<?php get_footer(); ?>