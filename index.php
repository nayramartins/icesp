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
            <h2>Você sabia?</h2>
            <div class="text color-grey">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra elit felis, at tincidunt mauris congue nec. Curabitur eleifend, tortor facilisis ultricies luctus, risus lectus laoreet augue, nec imperdiet metus est non tellus. In ac convallis sem. Integer finibus urna id gravida pretium. Nullam at tellus nisi. Aliquam venenatis consequat risus, sed vehicula nulla volutpat nec. Mauris sed libero vel nunc eleifend facilisis quis ac elit. Aliquam hendrerit ac mauris eu placerat. Donec facilisis mi sed sapien pharetra, a iaculis sapien tempor. Curabitur porttitor semper elit non auctor. Etiam sed ligula velit. Mauris ex lacus, dapibus eget bibendum vel, facilisis et enim.</p>
            </div>
            <a href="#">saiba mais</a>
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