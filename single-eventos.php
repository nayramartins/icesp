<?php include 'header.php' ?>
<?php $banner = get_theme_mod('banner_home'); ?>
<?php $logos = get_theme_mod('regua_logos'); ?>
<div class="eventos-content">

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