<?php
/*
Template Name: Fondos Concursables
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

<section class="intro-fondos">
    <div class="container">
        <div class="row">
            <div class="col-md-12-col-sm-12 col-xs-12">
                <img src="<?php echo get_bloginfo('template_directory')?>/images/about_deep.png" alt="" class="img-responsive">
                <?php echo $post->post_content; ?>
            </div>
        </div>
    </div>
</section>

<section class="photograph-area">
    <div class="container-fluid">
        <div class="row">
            <img src="<?php echo get_bloginfo('template_directory')?>/images/row1.jpg" alt="" class="col-xs-twelve-five col-esp">
            <img src="<?php echo get_bloginfo('template_directory')?>/images/row2.jpg" alt="" class="col-xs-twelve-five col-esp">
            <img src="<?php echo get_bloginfo('template_directory')?>/images/row3.jpg" alt="" class="col-xs-twelve-five col-esp">
            <img src="<?php echo get_bloginfo('template_directory')?>/images/row4.jpg" alt="" class="col-xs-twelve-five col-esp">
            <img src="<?php echo get_bloginfo('template_directory')?>/images/row5.jpg" alt="" class="col-xs-twelve-five col-esp">
            <img src="<?php echo get_bloginfo('template_directory')?>/images/row6.jpg" alt="" class="col-xs-twelve-five col-esp">
            <img src="<?php echo get_bloginfo('template_directory')?>/images/row7.jpg" alt="" class="col-xs-twelve-five col-esp">
            <img src="<?php echo get_bloginfo('template_directory')?>/images/row8.jpg" alt="" class="col-xs-twelve-five col-esp">
        </div>
    </div>
</section>



<section class="volunteer whos">
    <div class="container">
        <div class="row">
            <!-- Acerca Fondos -->                

            <div class="col-md-6 col-sm-12 col-xs-12">  
                <?php $fondos = get_field('area_fondos', $post->ID); ?>
                <?php $countfondos = 0 ?>
                <?php foreach ($fondos as $fondo): ?>
                <?php $countfondos++ ?>

                <figure class="col-md-12 col-sm-12">
                        <div class="col-xs-4">
                            <img class="img-responsive enc" src="<?php echo $fondo['imagen_apoyo'] ?>" alt="">
                            <img class="icon-container img-responsive" src="<?php echo $fondo['icono_fondo']?>" alt="Icono <?php echo $fondo['nombre_fondo']?>" class="img-responsive icon">
                        </div>
                        <figcaption class="col-xs-8">
                            <h4><?php echo $fondo['nombre_fondo']?></h4>
                            <p><?php echo $fondo['contenido_fondo']?></p>
                        </figcaption></img>
                </figure>
                <?php endforeach;?>
            </div>
            
            <!-- Bases de Postulación -->
            <div class="bases-sign col-md-6 col-sm-12 col-xs-12">
                <?php $bases = get_field('bases_postulacion', $post->ID); ?>
                <?php $countbases = 0 ?>
                <?php foreach ($bases as $base): ?>
                <?php $countbases = 0 ?>
                <img src="<?php echo $base['icono_postulacion'] ?>" alt="">
                <p><?php echo $base['contenido_postulacion'] ?></p>
                <div class="buttons">
                    <a href="<?php echo $base['descarga_bases'] ?>" class="btn btn-warning" rel="nofollow" title="Descargar Bases">Descargar Bases</a>
                    <a href="<?php echo $base['descarga_formulario'] ?>" class="btn btn-danger" rel="nofollow" title="Formulario de Postulación">Formulario de Postulación</a>
                </div>
                <div class="clear separator"></div>
                <?php endforeach;?>
            </div>


        </div>
    </div>
</section>

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
            <div class="col-md-7 col-sm-7 col-xs-12 publishframe">

                <iframe width="581" height="327" src="<?php echo get_field('embed_video') ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

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