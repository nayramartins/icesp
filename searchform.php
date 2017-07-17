
<div class="search-container">
    <form role="search" id="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input class="search-input" type="text" name="s" placeholder="<?php pll_e( 'BUSCAR' ); ?>" />
    </form>
    <button type="submit" class="search-button">
        <img class="search-image" src="<?php bloginfo('url'); ?>/wp-content/themes/icesp/images/icesp-lupa.png" width="23" height="20" alt="" onclick="handleSubmit()">
    </button>
</div>

<script>
    var handleSubmit = function() {
        var form = document.getElementById('search-form');
        form.submit();
    }
</script>