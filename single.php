<?php
/**** Pages template file ****/
get_header(); ?>

<div class="breadcrumb">
    <div class="container">
        <?php wp_custom_breadcrumbs(); ?>
    </div>
</div>
<?php if (have_posts()):
    while ( have_posts() ) : the_post(); ?>
    <section class="pesquisadores">
        <?php get_sidebar(); ?>
        <?php the_title(); ?>
         <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); 
        if ($image) : ?>
            <?php $selos = get_field('selos');  
                foreach ($selos as $selo) :
                    $name = $selo['selo'];
                    echo $name;
                endforeach;
            ?>
            <img class="pesquisador-image" src="<?php echo $image[0]; ?>" alt="" class="image" />
        <?php endif; ?>
        <a href="<?php the_field('curriculum_lattes'); ?>" target="_blank"><?php pll_e( 'Curriculum Lattes' ); ?></a>
        <?php pll_e( 'Endereço:' ); ?>
        <?php the_field('endereco_1'); ?>
        <?php the_field('endereco_2'); ?>
        <?php the_field('endereco_3'); ?>
        <?php pll_e( 'Programa na USP na qual Orienta:' ); ?>
        <?php the_field('programa_usp'); ?>
        <?php pll_e( 'Área de interesse:' ); ?>
        <?php the_field('area_de_interesse'); ?>
        <?php the_content(); ?>
        <?php pll_e( 'Pesquisadores Associados:' ); ?>
        <?php $pesquisadores = get_field('pesquisadores_associados'); 
            foreach ($pesquisadores as $pesquisador) :
                $name = $pesquisador['pesquisador_associado']->post_title;
                $post_link = get_permalink($pesquisador['pesquisador_associado']->post_id);
                echo "<a href='" . $post_link . "'>" . $name . "</a>";
            endforeach;
        ?>
        <?php pll_e( 'Membros do laboratório:' ); ?>
        <?php $membros = get_field('membros_laboratorio'); 
            foreach ($membros as $membro) :
                $name = $membro['membro_laboratorio']->post_title;
                $post_link = get_permalink($membro['membro_laboratorio']->post_id);
                echo "<a href='" . $post_link . "'>" . $name . "</a>";
            endforeach;
        ?>
        <?php pll_e( 'Publicações:' ); ?>
        <?php $publicacoes = get_field('publicacoes'); 
            foreach ($publicacoes as $publicacao) : ?>
                <div onClick="showFiles(<?php echo $publicacao["ano"]; ?>);">
                    <img src="OLAR" />
                    <?php pll_e( $publicacao["ano"] ); ?>
                </div>    
            <?php endforeach;
        ?> 
        <?php $publicacoes = get_field('publicacoes'); ?>
        <div>
            <?php foreach ($publicacoes as $publicacao) : ?>
                <div class="arquivos" id="<?php echo $publicacao["ano"]; ?>">
                    <?php pll_e( $publicacao["ano"] ); ?>
                    <?php $arquivos = $publicacao["arquivos"]; 
                        foreach ($arquivos as $arquivo) : ?>
                            <a href="<?php echo $arquivo["arquivo"]["url"]; ?>" download>
                                <?php pll_e( $arquivo["arquivo"]["filename"] ); ?>
                            </a>
                        <?php endforeach;
                    ?>
                </div>    
            <?php endforeach;?>
        </div>

    </section>
<?php endwhile; endif; ?>
<?php include 'footer.php' ?>
<script>
    showFiles = function (id) {
        var fileToShow = document.getElementById(id);
        var currentFile = document.querySelectorAll('.arquivos.active');
        fileToShow.classList.add('active');
        currentFile[0].classList.remove('active');
    }
</script>