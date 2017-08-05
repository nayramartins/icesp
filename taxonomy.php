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
    <div class="page--content">
        <div class="search-content">
            <div class="title-content">
                <?php get_header(); $terms = wp_get_post_terms($post->ID, 'quadrante');?>
                <h3><?php echo $terms[0]->name; ?></h3>
            </div>
        </div>
        <?php if (have_posts()): ?>
            <ul class="search-result--content">
                <?php while ( have_posts() ) : the_post(); ?>
                    <li>
                        <span class="search-text">
                            <a href="<?php the_permalink(); ?>">
                                <p class="title"><?php the_title(); ?></p>
                                <p class="text-content"><?php the_field('area_de_interesse'); ?></p>
                            </a>
                        </span>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <div> <?php pll_e( 'nenhum post' ); ?></div>
        <?php endif; ?>
    </div>
</section>
<?php include 'footer.php' ?>