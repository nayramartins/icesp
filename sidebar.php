<?php
$title = get_the_title();
?>

<sidebar class="sidebar">
    <ul>
        <li><?php echo the_title(); ?></li>
        <?php if (get_post_field( 'post_name', get_post() ) == 'comissao'): ?>
            <li class="comissao-selector-active ccp" onClick="comissaoClick('ccp')">CCP</li>
            <li class="comissao-selector cep" onClick="comissaoClick('cep')">CEP</li>
            <li class="comissao-selector ceua" onClick="comissaoClick('ceua')">CEUA</li>
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