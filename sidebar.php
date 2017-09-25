<?php
$title = get_the_title();
?>

<sidebar class="sidebar">
    <ul>
        <?php if ( get_post_type()  != 'post' && 
        get_post_field( 'post_name', get_post() ) != 'quem-somos-na-usp' && 
        get_post_field( 'post_name', get_post() ) != 'who-we-are-on-usp' && 
        get_post_field( 'post_name', get_post() ) != 'programa-de-pesquisa' &&
        get_post_field( 'post_name', get_post() ) != 'research-program') : ?>
            <li><?php echo the_title(); ?></li>
        <?php endif; ?>
        <?php if ( get_post_field( 'post_name', get_post() ) == 'comissao' ||  get_post_field( 'post_name', get_post() ) == 'committees'): ?>
            <li class="comissao-selector-active ccp" onClick="comissaoClick('ccp')">CCP</li>
            <li class="comissao-selector cep" onClick="comissaoClick('cep')">CEP</li>
            <li class="comissao-selector ceua" onClick="comissaoClick('ceua')">CEUA</li>

        <?php elseif ( get_post_type()  == 'post' || 
            get_post_field( 'post_name', get_post() ) == 'quem-somos-na-usp' || 
            get_post_field( 'post_name', get_post() ) == 'programa-de-pesquisa' ||
            get_post_field( 'post_name', get_post() ) == 'who-we-are-on-usp' || 
            get_post_field( 'post_name', get_post() ) == 'research-program' ) : 
        ?>
            <li><?php pll_e( 'Pesquisa' ); ?></li>
            <?php 
                $lang = pll_current_language();
                $post1_id = $lang == 'en' ? 166 : 128;
                $post2_id = $lang == 'en' ? 163 : 130;
                $post1 = get_post($post1_id);
                $post2 = get_post($post2_id); 
            ?>
            <li><a href="<?php echo get_permalink(128); ?>"><?php pll_e( $post1->post_title ); ?></a></li>
            <li><a href="<?php echo get_permalink(130); ?>"><?php pll_e( $post2->post_title ); ?></a></li>
        <?php endif; ?>
    </ul>
</sidebar>

<script>
    var comissaoClick = function(item) {
        var currentActive = document.querySelector('.comissao-content-active');
        var target = document.querySelector('.comissao-content.' + item);
        var currentSelectorActive = document.querySelector('.comissao-selector-active');
        var targetSelector = document.querySelector('.comissao-selector.' + item);
        if (target) {
            currentActive.classList.remove('comissao-content-active');
            currentActive.classList.add('comissao-content');
            target.classList.add('comissao-content-active');
            target.classList.remove('comissao-content');
            currentSelectorActive.classList.remove('comissao-selector-active');
            currentSelectorActive.classList.add('comissao-selector');
            targetSelector.classList.add('comissao-selector-active');
            targetSelector.classList.remove('comissao-selector');
        }
    };
</script>