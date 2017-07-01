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
                <li><span class="date">01/01/2017 - </span> primeiro evento do mês de janeiro</li>
                <li><span class="date">01/01/2017 - </span> primeiro evento do mês de janeiro</li>
                <li><span class="date">01/01/2017 - </span> primeiro evento do mês de janeiro</li>
                <li><span class="date">01/01/2017 - </span> primeiro evento do mês de janeiro</li>
                <li><span class="date">01/01/2017 - </span> primeiro evento do mês de janeiro</li>
                <li><span class="date">01/01/2017 - </span> primeiro evento do mês de janeiro</li>
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
                <a href="#"><?php pll_e( 'saiba mais' ); ?></a>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </section>
</div>
<section class="content-logo">
    <img src="<?php echo $logos; ?>" alt="" />
    <!--<ul>
        <li>logo</li>
        <li>logo</li>
        <li>logo</li>
        <li>logo</li>
    </ul>-->
</section>
<?php include 'footer.php' ?>