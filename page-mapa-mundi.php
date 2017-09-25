<?php
/**** Mapa Mundi template file ****/
 get_header(); ?>

<div class="breadcrumb">
    <div class="container">
        <?php wp_custom_breadcrumbs(); ?>
    </div>
</div>

<section class="page <?php echo get_post_field( 'post_name', get_post() );?>">
    <?php get_sidebar(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="mapa">
            <div id="vmap" style="width: 750px; height: 400px;"></div>
        

    <?php endwhile; endif; 
        $terms = get_terms( array(
            'taxonomy' => 'mapa',
            'hide_empty' => false,
        ) );
        
        foreach ($terms as $term) : ?>
        <div class="country-tooltip" id="<?php echo $term->slug; ?>">
            <?php
                $args = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'mapa',
                        'field' => 'name',
                        'terms' => $term->name
                        )
                    )
                );
                $query = new WP_Query($args); ?>
                <h3><?php echo $term->name; ?></h3>
                <span class="close-button" data-id="<?php echo $term->slug; ?>" onClick="closeIt($(this).data('id'));">x</span>
                <?php if ( $query -> have_posts() ) : while ( $query -> have_posts() ) : $query -> the_post(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php endwhile; endif; ?>
                <?php wp_reset_postdata(); ?>
        </div>
    <?php endforeach; ?>
    </div>
    
</section>
<?php include 'footer.php' ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="<?php customBlogUrl(); ?>/icesp/wp-content/themes/icesp/js/mapa/jquery.vmap.js"></script>
<script src="<?php customBlogUrl(); ?>/icesp/wp-content/themes/icesp/js/mapa/jquery.vmap.world.js"></script>
<script src="<?php customBlogUrl(); ?>/icesp/wp-content/themes/icesp/js/mapa/jquery.vmap.sampledata.js"></script>
<link href="<?php customBlogUrl(); ?>/icesp/wp-content/themes/icesp/js/mapa/jqvmap.css" media="screen" rel="stylesheet" type="text/css"/>
<script>
    var closeIt = function (code) {
        var country = document.getElementById(code);
        country.classList.remove('active');
    };

    jQuery('#vmap').vectorMap({
        map: 'world_en',
        backgroundColor: null,
        color: '#ffffff',
        hoverColor: '#1b96a2',
        selectedColor: '#1b96a2',
        enableZoom: true,
        showTooltip: true,
        values: sample_data,
        scaleColors: ['#daebeb'],
        normalizeFunction: 'polynomial',
        onLabelShow: function(event, label, code) {
            event.preventDefault();
        },
        onRegionClick: function(event, code) {
            event.preventDefault();
            var country = document.getElementById(code);
            var path = document.getElementById('jqvmap1_' + code);
            var pathLocation = path.getBoundingClientRect();
            country.style.top = pathLocation.top + 'px';
            country.style.left = pathLocation.left + 'px';
            country.classList.add('active');
        },
        onRegionDeselect: function(event, code) {
            event.preventDefault();
            
        }
    });
</script>