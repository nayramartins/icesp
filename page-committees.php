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
    <div class="page--content comissao-content-active ccp">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="page--title"><?php echo get_field('titulo_ccp'); ?></h1>
            <?php $image = get_field('imagem_ccp'); 
            if ($image) : ?>
                <img class="page--featured-image" src="<?php echo $image; ?>" alt="" class="image" />
            <?php 
            endif;
            echo get_field('conteudo_ccp');
        endwhile; endif; ?>
    </div>
    <div class="page--content comissao-content cep">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="page--title"><?php echo get_field('titulo_cep'); ?></h1>
            <?php $image2 = get_field('imagem_cep'); 
            if ($image2) : ?>
                <img class="page--featured-image" src="<?php echo $image2; ?>" alt="" class="image" />
            <?php 
            endif;
            echo get_field('conteudo_cep');
        endwhile; endif; ?>
    </div>
    <div class="page--content comissao-content ceua">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1 class="page--title"><?php echo get_field('titulo_ceua'); ?></h1>
            <?php $image3 = get_field('imagem_ceua'); 
            if ($image3) : ?>
                <img class="page--featured-image" src="<?php echo $image3; ?>" alt="" class="image" />
            <?php 
            endif;
            echo get_field('conteudo_ceua');
        endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>

