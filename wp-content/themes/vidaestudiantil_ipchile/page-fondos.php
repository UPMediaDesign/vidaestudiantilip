<?php
/*
Template Name: Fondos Concursables
*/
?>

<?php get_header(); ?>

<?php //get_template_part('socialbar'); ?>

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

<!-- Video Fondos Concursables -->
<section class="fondos video">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-12">
                <h3>
                    <span>Experiencia Fondo</span>
                    <span>Concursable</span>
                </h3>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 publishframe">

                <iframe width="581" height="327" src="<?php echo get_field('embed_video') ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<!-- Acerca Fondos -->
<section class="fondos whos">
    <div class="container">
        <div class="row">

            <?php $fondos = get_field('area_fondos', $post->ID); ?>
            <?php $countfondos = 0 ?>
            <?php foreach ($fondos as $fondo): ?>
            <?php $countfondos++ ?>

            <div class="col-md-6 col-sm-6 col-xs-12 motivo">
                <div class="col-xs-2 motivo">
                    <img src="<?php echo $fondo['icono_fondo']?>" alt="Icono <?php echo $fondo['nombre_fondo']?>" class="img-responsive icon">
                </div>
                <div class="col-xs-10 motivo">
                    <h4><?php echo $fondo['nombre_fondo']?></h4>
                    <p><?php echo $fondo['contenido_fondo']?></p>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 motivo">
                <img class="img-responsive enc" src="<?php echo $fondo['imagen_apoyo'] ?>" alt="">
            </div>

            <div class="clear"></div>

            <?php endforeach?> 

            <div class="col-md-12 col-sm-12 col-xs-12 bases row">
                <a href="" class="btn btn-warning" rel="nofollow" title="Descargar Bases">Descargar Bases</a>
                <a href="" class="btn btn-danger" rel="nofollow" title="Formulario de Postulación">Formulario de Postulación</a>
            </div>
        </div>
    </div>
</section>

<!-- Suscripción al newsletter -->
<section class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 col-esp">
                <span class="invite"><strong>Suscríbete al newsletter</strong>, lorem ipsum dolor sit amet conseticur</span>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 col-esp row">
                <?php echo do_shortcode('[contact-form-7 id="51" title="Suscripción Newsletter"]'); ?>
            </div>
        </div>
    </div>
</section>

<!-- Fin suscripción -->

<?php get_footer(); ?>