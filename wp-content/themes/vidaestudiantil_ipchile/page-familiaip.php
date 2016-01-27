<?php
/*
Template Name: Familia IPCHILE
*/
?>

<?php get_header(); ?>

<?php get_template_part('socialbar'); ?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingpage' ); ?>

<div class="heading-page" style="background-image: url(<?php echo $bg[0]?>);">
    <div class="container-fluid gradient">
        <div class="row">

            <div class="col-md-12 col-xs-12">
                <div class="jumbotron col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                    <h2><?php echo $post->post_title; ?></h2>
                    <h3><?php echo $post->post_excerpt; ?></h3>
                    <p><?php echo get_field('bajada_preheader')?></p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Publicación reciente -->
<section class="publish content">
    <div class="container">
        <div class="row">
            
            <?php $publishes = get_posts(array('post_type' => 'publicaciones', 'numberposts' => 1, )) ?>
            <?php $countpublishes = 0?>
            <?php foreach ($publishes as $publish):?>
            <?php $countpublishes++ ?>

                <article class="col-md-6 col-sm-6 col-xs-12"> 
                    <h2><?php echo $publish->post_title?></h2>
                    <div class="clear separator"></div>
                    <span class="col-xs-3">
                        <?php echo get_field('numero_de_publicacion', $publish->ID)?>
                    </span>

                    <div class="col-xs-9 row">
                        <h3><?php echo $publish->post_title ?></h3>
                        <span class="yellow-bg">
                            <p class="paragraph"><?php echo substr($publish->post_content , 0, 145)?>...</p>
                        </span>
                        <a class="btn btn-danger" target="_blank" href="<?php echo get_field('embed_publicacion', $publish->ID)?>"> Ver Pubicación </a>
                    </div>
                </article>  

                <div class="col-md-6 publishframe">
                    <iframe width="501" height="439" src="<?php echo get_field('embed_publicacion', $publish->ID)?>" frameborder="0" allowfullscreen></iframe>
                </div>
            <?php endforeach?>

        </div>
    </div>
</section>
<!-- Publicación reciente Fin -->

<!-- Publicaciones anteriores -->
<section class="publish oldcontent">
    <div class="container">
        <div class="row">
            <h2>Revisa nuestras publicaciones anteriores</h2>

            <?php $publishes = get_posts(array('post_type' => 'publicaciones', 'numberposts' => 10, )) ?>
            <?php $countpublishes = 0?>
            <?php foreach ($publishes as $publishold):?>
            <?php $countpublishes++?>
                
                <figure class="col-md-4 col-sm-6 col-xs-12">
                    <a href="<?php echo get_field('embed_publicacion', $publishold->ID)?>" rel="nofollow" title="Ir a número <?php echo get_field('numero_de_publicacion', $publishold->ID)?>"><?php echo get_the_post_thumbnail( $publishold->ID , 'publicaciones', array('class' => 'img-responsive')) ?></a>
                    <figcaption>
                        <h3><?php echo $publishold->post_title?></h3>
                        <p><strong>Número</strong> <span><?php echo get_field('numero_de_publicacion', $publishold->ID)?></span></p>
                        
                        <p><?php echo substr($publishold->post_content , 0, 95)?>...</p>
                        <a href="<?php echo get_field('embed_publicacion', $publishold->ID)?>" class="vermas" target="_blank">Ver más<i class="fa fa-arrow-right"></i></a>
                    </figcaption>
                </figure>

            <?php endforeach ?>
        </div>
    </div>
</section>

<!-- Publicaciones anteriores fin -->

<!-- Suscripción al newsletter -->
<section class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 col-esp">
                <span class="invite"><strong>Suscríbete al newsletter</strong> y podrás mantenerte al tanto de Vida Estudiantil</span>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 col-esp row">
                <?php echo do_shortcode('[contact-form-7 id="51" title="Suscripción Newsletter"]'); ?>
            </div>
        </div>
    </div>
</section>

<!-- Fin suscripción -->

<?php get_footer(); ?>