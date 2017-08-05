<?php
/**** Pages template file ****/
get_header(); ?>

<div class="breadcrumb">
    <div class="container">
        <?php wp_custom_breadcrumbs(); ?>
    </div>
</div>
<section class="page">
    <?php if (have_posts()):
    while ( have_posts() ) : the_post(); ?>
    <?php get_sidebar(); ?>
    <section class="pesquisadores page--content">
        <div class="pesquisador-foto">
            <div class="badge-content">
                <img src="<?php echo customBlogUrl(); ?>/images/badge.png" class="badge-bg" alt="">
                <?php $selos = get_field('selos');
                    foreach ($selos as $selo) :
                        $name = $selo['selo']; ?>
                        <p class="badge"><?php echo $name; ?></p>
                    <?php endforeach;
                ?>
            </div>
            <div class="foto">
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                    if ($image) : ?>
                    <img class="pesquisador-image" src="<?php echo $image[0]; ?>" alt="" class="image" />
                <?php endif; ?>
            </div>
    </div>
    <p class="cl-title">
        <?php the_title(); ?>
        <a class="cl-link" href="<?php the_field('curriculum_lattes'); ?>" target="_blank"><?php pll_e( 'Curriculum Lattes' ); ?></a>
    </p>
    <p class="subtitle-grey"><?php pll_e( 'Endereço:' ); ?></p>
    <?php the_field('endereco_1'); ?>
    <?php the_field('endereco_2'); ?>
    <?php the_field('endereco_3'); ?>
    <p class="subtitle-grey"><?php pll_e( 'Programa na USP na qual Orienta:' ); ?></p>
    <?php the_field('programa_usp'); ?>
    <p class="subtitle-grey"><?php pll_e( 'Área de interesse:' ); ?></p>
    <?php the_field('area_de_interesse'); ?>
    <div class="cl-content">
        <?php the_content(); ?>
    </div>

   <div class="cl-group">
        <p class="upper-title"><?php pll_e( 'Pesquisadores Associados:' ); ?></p>
        <?php $pesquisadores = get_field('pesquisadores_associados');
        foreach ($pesquisadores as $pesquisador) :
            $name = $pesquisador['pesquisador_associado']->post_title;
        $post_link = get_permalink($pesquisador['pesquisador_associado']->post_id);
        echo "<a href='" . $post_link . "' class=\"membros\">" . $name . "</a>";
        endforeach;
        ?>
   </div>
   <div class="cl-group">
        <p class="upper-title"><?php pll_e( 'Membros do Laboratório:' ); ?></p>
        <?php $membros = get_field('membros_laboratorio');
        foreach ($membros as $membro) :
            $name = $membro['membro_laboratorio']->post_title;
        $post_link = get_permalink($membro['membro_laboratorio']->post_id);
        echo "<a href='" . $post_link . "' class=\"membros\">" . $name . "</a>";
        endforeach;
        ?>
   </div>
   <div class="cl-group">
        <p class="upper-title"><?php pll_e( 'Publicações:' ); ?></p>
        <div class="cl-diretorios owl-carousel">
            <?php $publicacoes = get_field('publicacoes');
            foreach ($publicacoes as $publicacao) : ?>
            <div onClick="showFiles(<?php echo $publicacao["ano"]; ?>);">
                <div class="diretorios">
                    <img src="<?php echo customBlogUrl(); ?>/images/folder.png" />
                    <?php pll_e( $publicacao["ano"] ); ?>
                </div>
            </div>
            <?php endforeach;
            ?>
            <?php $publicacoes = get_field('publicacoes'); ?>
        </div>
   </div>
    <div class="cl-group">
        <?php foreach ($publicacoes as $publicacao) : ?>
            <div class="arquivos" id="<?php echo $publicacao["ano"]; ?>">
            <p class="upper-title"><?php pll_e( $publicacao["ano"] ); ?></p>
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
</section>
<?php include 'footer.php' ?>
<script>
    showFiles = function (id) {
        var fileToShow = document.getElementById(id);
        var currentFile = document.querySelectorAll('.arquivos.active');
        fileToShow.classList.add('active');
        currentFile[0].classList.remove('active');
    }
</script>