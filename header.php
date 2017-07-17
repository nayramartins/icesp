<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
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