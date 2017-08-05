<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?php echo customBlogUrl(); ?>/js/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo customBlogUrl(); ?>/js/owlcarousel/assets/owl.theme.default.min.css">
	<script src="<?php echo customBlogUrl(); ?>/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo customBlogUrl(); ?>/js/owlcarousel/owl.carousel.min.js"></script>
    <script>
		$(document).ready(function(){
			$(".owl-carousel").owlCarousel({
				loop:true,
				margin:10,
				nav:true,
				navText: ["<img src='<?php echo customBlogUrl(); ?>/images/arrow_prev.png'>",
					"<img src='<?php echo customBlogUrl(); ?>/images/arrow_next.png'>"],
				items: 6,
				margin: 10,
				responsive:{
					0:{
						items: 1,
						nav: true
					},
					600:{
						items: 3,
						nav: false
					},
					1000:{
						items: 6,
						nav: true,
						loop: false
					},
					1400:{
						items: 6,
						nav: true,
						loop: false
					}
				}
			});
		});
	</script>
</head>
<?php wp_head(); ?>
<body>
    <?php $logo = get_theme_mod('icesp_logo'); ?>
    <main>
        <ul class="header-language">
            <?php pll_the_languages( $args ); ?>
        </ul>
        <header class="header">
            <div class="header-left">
                <a href="<?php bloginfo('url'); ?>">
                    <h1><img src="<?php echo $logo; ?>" alt=""></h1>
                    <h2><?php pll_e( 'Ensino e pesquisa' ); ?></h2>
                </a>
            </div>
            <div class="header-right">
                <div class="header-right_search">
                    <?php get_search_form(); ?>
                </div>
                <?php if (function_exists(main_menu())) main_menu(); ?>
                <!--<nav class="nav">
                    <ul>
                        <li><a href="#">sobre nós</a></li>
                        <li><a href="#">pesquisa</a></li>
                        <li><a href="#">ensino</a></li>
                        <li><a href="#">comissão</a></li>
                        <li><a href="#">core facilities</a></li>
                    </ul>
                </nav>-->
            </div>
        </header>