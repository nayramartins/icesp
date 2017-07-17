<?php include 'header.php' ?>
<?php $banner = get_theme_mod('banner_home'); ?>
<?php $logos = get_theme_mod('regua_logos'); ?>
<div class="home-content">
    <section class="content-left">
        <div class="banner-home">
            <img src="<?php echo $banner; ?>" alt="" />
        </div>
        <div class="content-left_box">
            <h2><?php pll_e( 'eventos' ); ?></h2>
            <ul class="event-box">
                <?php $args = array( 'post_type' => 'eventos', 'posts_per_page' => 6 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); 
                $date = get_field('data_do_evento'); 
                ?>
                    <li><a href="<?php the_permalink(); ?>"><span class="date"><?php echo $date; ?> - </span> <?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
    <section class="content-right">
        <div class="content-right_box">
            <?php $args = array( 'post_type' => 'voce_sabia', 'posts_per_page' => 1 ); 
            $loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();?>
                <h2><?php pll_e( 'Você sabia?' ); ?></h2>
                <div class="text color-grey">
                    <?php the_excerpt(); ?>
                </div>
                <span onClick="saibaMaisClick()"><?php pll_e( 'saiba mais' ); ?></span>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </section>
</div>
<section class="content-logo">
    <img src="<?php echo $logos; ?>" alt="" />
</section>
<?php include 'footer.php' ?>
<section class="modal-voce-sabia" id="voce-sabia">
    <div class="modal-container">
        <span class="close-button" onClick="saibaMaisClick()">x</span>
        <?php $args = array( 'post_type' => 'voce_sabia', 'posts_per_page' => 1 ); 
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();?>
            <h2><?php pll_e( 'Você sabia?' ); ?></h2>
            <div class="text color-grey">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </div>
</section>
<script>
    var saibaMaisClick = function () {
        var voceSabia = document.getElementById('voce-sabia');
        voceSabia.classList.toggle('active');
    };
</script>