<?php
/*
Template Name: Quienes Somos
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

<section class="about-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Contacta con nuestros encargados de sede</h3>
			</div>
		</div>
	</div>
</section>

<section class="somos">
    <div class="container">
        <div class="row">

			<div class="col-md-12 who-content">
			<?php $sedestaffs = get_field('staff_sede' , $post->ID)?>
            <?php $adds = 0?>
            <?php foreach($sedestaffs as $sedestaff):?>
			<?php $adds++?>


					<div class="display-address col-md-12 col-sm-12">
						<h3><?php echo $sedestaff['nombre_sede']?></h3>
						<p><?php echo $sedestaff['direccion_sede']?></p>
						<p>Fono: <a href="tel:<?php echo $sedestaff['telefono_sede']?>"><?php echo $sedestaff['telefono_sede']?></a></p> 
					</div>


					<?php foreach($sedestaff['integrante_staff'] as $integrante){ ?>

					<figure class="team-staff col-md-3 col-sm-6 col-xs-12">
						<!-- <img src="<?php //echo $integrante['avatar_integrante']['sizes']['thumbnail']?>" alt="<?php //echo $integrante['nombre_integrante']?>"> -->
						<figcaption>
							<h4><?php echo $integrante['nombre_integrante']?></h4>
							<p><span><?php echo $integrante['cargo_integrante']?></span></p>
							<p><?php echo $integrante['anexo_integrante']?></p>
							<a href="mailto:<?php echo $integrante['mail_integrante']?>"><?php echo $integrante['mail_integrante']?></a>
						</figcaption>
					</figure>


				<?php } ?>
			<?php endforeach ?>

            <?php echo get_the_content(); ?>
               
            </div>

        </div>
    </div>
	
</section>

<section class="somos-tabs">
	<div class="container">
		<div class="row">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs col-md-10 col-md-offset-1 col-sm-12 " role="tablist">
			<?php $tabs = get_field('pestana_somos' , $post->ID)?>
            <?php $ctoabs = 0?>
            <?php foreach( $tabs as $tab):?>
			<?php $ctoabs++?>
            <?php if($ctoabs == 1)
	            {
	            	$tabclass = 'active col-md-3 col-sm-3 col-xs-6 col-esp';
	            	$tabcontactive = 'tab-pane fade in active';
	            }

	            else{
	            	$tabclass = 'col-md-3 col-sm-3 col-xs-6 col-esp';
	            	$tabcontactive = 'tab-pane fade';
	            }
            ?>

			    <li role="presentation" class="<?php echo $tabclass?>">
			    	<a href="#tab-<?php echo $ctoabs?>" aria-controls="home" role="tab" data-toggle="tab">
						<!-- <img src="<?php //echo $tab['icono_pestana']?>" alt="Icono <?php //echo $tab['titulo_pestana']?>"> -->
						<span><?php echo $tab['titulo_pestana']?></span>
			    	</a>
			    </li>

			<?php endforeach;?>
			</ul>
			<div class="tab-content">
			<?php $ctoabs = 0?>
			<?php foreach ($tabs as $inside):?>
			<?php $ctoabs++?>

			  <div role="tabpanel" class="tab-pane fade<?php if($ctoabs == 1){echo 'in active';} ?> col-md-10 col-md-offset-1 col-sm-12" id="tab-<?php echo $ctoabs?>">
			  	<div class="row antirow">

			  		<div class="col-md-4 col-sm-12 col-xs-12 quote">
			  			<h4><?php echo $inside['titulo_pestana']?></h4>
			  			<div class="workgroup">
			  				<?php echo $inside['nombre_trabajador']?>
			  			</div>
			  		</div>
			  		<div class="col-md-8 col-sm-12 col-xs-12 perf-content">
			  			<p><?php echo $inside['contenido']?></p>
			  		</div>

			  	</div>
			  </div>
			

			<?php endforeach;?>
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