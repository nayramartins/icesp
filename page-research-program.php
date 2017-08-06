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
            <div class="quadrante">
                <div class="quadrante-item primeiro">
                    <a href="<?php customBlogUrl(); ?>/en/quadrante/pesquisa-em-humanos">
                        <p><?php the_field('label_primeiro_quadrante'); ?></p>
                        <img src="<?php the_field('imagem_primeiro_quadrante_en'); ?>" />
                    </a>
                </div>
                <div class="quadrante-item segundo">
                    <a href="<?php customBlogUrl(); ?>/en/quadrante/inovacao-terapeutica-e-diagnostico">
                        <p><?php the_field('label_segundo_quadrante'); ?></p>
                        <img src="<?php the_field('imagem_segundo_quadrante'); ?>" />
                    </a>
                </div>
                <div class="quadrante-item terceiro">
                    <a href="<?php customBlogUrl(); ?>/en/quadrante/epidemiologia-e-prevencao">
                        <p><?php the_field('label_terceiro_quadrante'); ?></p>
                        <img src="<?php the_field('imagem_terceiro_quadrante'); ?>" />
                    </a>
                </div>
                <div class="quadrante-item quarto">
                    <a href="<?php customBlogUrl(); ?>/en/quadrante/pesquisa-em-humanos">
                        <p><?php the_field('label_quarto_quadrante'); ?></p>
                        <img src="<?php the_field('imagem_quarto_quadrante'); ?>" />
                    </a>
                </div>
            </div>
        </div>

    <?php endwhile; endif; ?>
</section>
<?php include 'footer.php' ?>