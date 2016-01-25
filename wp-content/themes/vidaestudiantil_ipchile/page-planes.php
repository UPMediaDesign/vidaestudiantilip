<?php
/*
Template Name: Planes de Acompañamiento
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

<!-- Plan de Acompañamiento inicio -->
<section class="plan insider">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
			     <h2>Líneas de acción que se detallan a continuación:</h2>
			</div>
            <div class="clear separator"></div>
			<?php $planes= get_posts(array('post_type' => 'planes', 'numberposts' => 4)); ?>
            <?php $countplanes = 0 ?>
            <?php foreach ($planes as $plan): ?>
            <?php $countplanes++ ?>
                <figure class="plan-element effect-layla col-md-6 col-sm-6 col-esp col-xs-12"> 
                    <?php echo get_the_post_thumbnail( $plan->ID , 'planpage', array('class' => 'img-responsive')) ?>
                    <h3> <?php echo $plan->post_title ?> </h3>
                	<figcaption class="plan-element side">
                        <p><?php echo $plan->post_content ?></p>
                    </figcaption>
                </figure>       
            <?php endforeach?>

		</div>
	</div>
</section>
<!-- Plan de Acompañamiento Fin -->

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