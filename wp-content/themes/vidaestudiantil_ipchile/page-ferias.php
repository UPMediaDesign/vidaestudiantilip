<?php
/*
Template Name: Ferias
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

<section class="ferias insider">
    <div class="container-fluid">
        <div class="row">
            <?php $ferias = get_posts(array('post_type' => 'ferias' , 'posts_per_page' => 2 )); ?>
            <?php $countferias = 0 ?>
            <?php foreach ($ferias as $feria): ?>
            <?php $countferias++ ?>
            <figure class="col-md-6 col-sm-6 col-xs-12 col-esp">
                <?php echo get_the_post_thumbnail( $feria->ID , 'ferias', array('class' => 'img-responsive')) ?>
               <figcaption class="fair-cta">
                    <h2><?php echo $feria->post_title ?></h2>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-v-<?php echo $feria->ID?>">Ver más</button>
               </figcaption>
                
            </figure>

            <?php endforeach; ?>

            <?php foreach ($ferias as $modal):?>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modal-v-<?php echo $modal->ID?>">
              <div class="modal-dialog modal-lg ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-content">
                    <h2><?php echo $modal->post_title ?></h2>
                    <p><?php echo $modal->post_content ?></p>
                </div>
              </div>
            </div>
            <?php endforeach?>
        </div>
    </div>
</section>


<!-- Large modal -->

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