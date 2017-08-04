<?php
/**** The template for displaying the footer ****/
?>

 <?php wp_footer(); ?>
 <?php $footer_class = is_home() ? 'home' : 'single'; ?>

    <footer class="<?php echo $footer_class; ?>">
        <?php if ( !is_home() ): ?>
            <ul>
                <li><?php pll_e( 'fale com o CTO' ); ?></li>
                <li><?php pll_e( 'E-mail: icesp.cto@hc.fm.usp.br' ); ?></li>
            </ul>
        <?php endif; ?>
        <p><?php pll_e( '© Copyright 2016 | ICESP' ); ?></p>
    </footer>
    </main>
</body>
</html>