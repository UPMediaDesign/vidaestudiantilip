<?php
/*
Template Name: Programa Avanza
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

<?php echo $post->post_content; ?>

<!-- Team Avanza -->
<section class="avanza team">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                 <h3>Conoce a nuestro equipo</h3>
            </div>
            <div class="clear separator"></div>
            <?php $teams = get_field('team_avanza', $post->ID); ?>
            <?php $countteams = 0 ?>
            <?php foreach ($teams as $team): ?>
            <?php $countteams++ ?>
                <figure class="integrante col-md-3 col-sm-6 col-xs-12"> 
                    <img src="<?php echo $team['foto_integrante']?>" alt="Icono <?php echo $team['nombre_integrante']?>">
                    
                    <figcaption class="avanza-element side">
                        <h4><?php echo $team['nombre_integrante'] ?></h4>
                        <p><?php echo $team['cargo_integrante'] ?></p>
                        <span><?php echo $team['datos_integrante'] ?></span>
                        <a href="mailto:<?php echo $team['mail_integrante'] ?>" title="Enviar mail a <?php echo $team['nombre_integrante'] ?>" rel="nofollow"><?php echo $team['mail_integrante'] ?></a>
                    </figcaption>
                </figure>
            <?php endforeach?>

        </div>
    </div>
</section>
<!-- Team Avanza Fin -->

 <section class="avanza virtual">
    <div class="container">
        <div class="row">
            <?php $virtuals = get_field('sede_virtual', $post->ID); ?>
            <?php $countvirtuals = 0 ?>
            <?php foreach ($virtuals as $virtual): ?>
            <?php $countvirtuals++ ?>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h3><?php echo $virtual['titulo_virtual']?></h3>
                    <p><?php echo $virtual['contenido_virtual']?></p>
                </div>
            <?php endforeach ?>
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