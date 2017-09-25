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
                <div class="area_esquerda" onmouseover="showContent('area_esquerda', 'over');" onmouseleave="showContent('area_esquerda', 'leave');">
                    <?php 
                        $esquerda_id = get_field('pagina_area_esquerda');
                        $post_esquerda = get_post($esquerda_id); 
                        $slug = $post_esquerda->post_name;
                    ?>
                    <a href="<?php bloginfo('url'); ?>/<?php echo $slug;?>"><?php the_field('area_esquerda'); ?></a>
                    <span ><?php the_field('subtitulo_area_esquerda'); ?></span>
                    <div class="nomes" id="area_esquerda">
                        <?php
                            $term = get_field('area_esquerda');
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'venn',
                                    'field' => 'name',
                                    'terms' => $term
                                    )
                                )
                            );
                            $query = new WP_Query($args);
                            if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php endwhile; endif; ?>
                            <?php wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="area_superior" onmouseover="showContent('area_superior', 'over');" onmouseleave="showContent('area_superior', 'leave');">
                    <?php 
                        $superior_id = get_field('pagina_area_superior');
                        $post_superior = get_post($superior_id); 
                        $slug = $post_superior->post_name;
                    ?>
                    <a href="<?php bloginfo('url'); ?>/<?php echo $slug;?>"> <?php the_field('area_superior'); ?></a>
                    <span ><?php the_field('subtitulo_area_superior'); ?></span>
                    <div class="nomes" id="area_superior">
                        <?php
                            $term = get_field('area_superior');
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'venn',
                                    'field' => 'name',
                                    'terms' => $term
                                    )
                                )
                            );
                            $query = new WP_Query($args);
                            if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php endwhile; endif; ?>
                            <?php wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="area_central" onmouseover="showContent('area_central', 'over');" onmouseleave="showContent('area_central', 'leave');">
                    <?php 
                        $central_id = get_field('pagina_area_central');
                        $post_central = get_post($central_id); 
                        $slug = $post_central->post_name;
                    ?>
                    <a href="<?php bloginfo('url'); ?>/<?php echo $slug;?>"><?php the_field('area_central'); ?></a>
                    <div class="nomes" id="area_central">
                        <?php
                            $term = get_field('area_central');
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'venn',
                                    'field' => 'name',
                                    'terms' => $term
                                    )
                                )
                            );
                            $query = new WP_Query($args);
                            if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php endwhile; endif; ?>
                            <?php wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="area_inferior" onmouseover="showContent('area_inferior', 'over');" onmouseleave="showContent('area_inferior', 'leave');">
                    <?php 
                        $inferior_id = get_field('pagina_area_inferior');
                        $post_inferior = get_post($inferior_id); 
                        $slug = $post_inferior->post_name;
                    ?>
                    <a href="<?php bloginfo('url'); ?>/<?php echo $slug;?>"><?php the_field('area_inferior'); ?></a>
                    <span ><?php the_field('subtitulo_area_inferior'); ?></span>
                    <div class="nomes" id="area_inferior">
                        <?php
                            $term = get_field('area_inferior');
                            $args = array(
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'venn',
                                    'field' => 'name',
                                    'terms' => $term
                                    )
                                )
                            );
                            $query = new WP_Query($args);
                            if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php endwhile; endif; ?>
                            <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>


</section>

<?php get_footer(); ?>

<script>
    showContent = function (area, action) {
        var target = document.getElementById(area);
        if (action === 'over') {
            target.classList.add('active');
            var element = document.getElementsByClassName(area);
            var elementRef = element[0].getBoundingClientRect();
            elementTop = elementRef.top - target.getBoundingClientRect().height - 10;
            elementLeft = (elementRef.left - (target.getBoundingClientRect().width / 2)) + (elementRef.width / 2);
            target.style.top = elementTop + 'px';
            target.style.left = elementLeft + 'px';
        }
        if (action === 'leave') {
            target.classList.remove('active');
        }

    };
</script>