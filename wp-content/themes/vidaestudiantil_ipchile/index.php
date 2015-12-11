<?php get_header(); ?>

<section id="slider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<?php $sliders = get_posts(array('post_type' => 'publicaciones' , 'numberposts' => 12)) ?>
        <div class="carousel-inner" role="listbox">
            <?php $slc = 0?>
            <?php foreach($sliders as $slider):?>
            <?php $slc++?>
            <?php $bgs = wp_get_attachment_image_src(get_post_thumbnail_id($slider->ID), 'slider')?>
            <div class="item <?php if($slc== 1){?>active<?php }?>" style="background-image:url(<?php echo $bgs[0]?>);">
                  
                <div class="jumbotron base col-md-5 col-md-offset-6">
                    <h2><?php echo $slider->post_title?></h2>
                    <span><?php echo get_field('numero_de_publicacion', $slider->ID)?>, <?php echo get_field('mes_inicio', $slider->ID)?>/<?php echo get_field('mes_fin', $slider->ID)?></span>
                    <p class="intro-ed"><?php echo $slider->post_excerpt?></p>
                    <p class="paragraph"><?php echo substr($slider->post_content , 0, 145)?>...</p>
            
                    <a class="btn btn-danger" href="<?php echo get_field('link_publicacion', $slider->ID)?>">
                                        Ver Pubicación
                    </a>
                    <a class="btn btn-warning download" href="<?php echo get_field('descarga', $slider->ID)?>">
                                        Descargar Publicación
                    </a>
                </div>
            
                <div class="col-md-1 skk desktop"></div>
                <div class="clear"></div>
                  
            </div>
            <?php endforeach;?>
        </div> 
    </div>
</section>

<!-- Plan de Acompañamiento inicio -->
<section class="plan">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<h2>Plan de acompañamiento</h2>
						<span>Instancia de acompañamiento que busca entregar diversos servicios psicoeducativos orientados a fortalecer las habilidades socioafectivas</span>
					</div>

					<div class="clear separator"></div>
					<?php $planes= get_posts(array('post_type' => 'planes', 'numberposts' => 4)); ?>
                    <?php $countplanes = 0 ?>
                    <?php foreach ($planes as $plan): ?>
                    <?php $countplanes++ ?>
                    <figure class="plan-element col-md-6 col-sm-6 col-xs-12"> 
                        <?php echo get_the_post_thumbnail( $plan->ID , 'plan', array('class' => 'img-responsive')) ?>
                        <figcaption class="plan-element side">
                            <h3>
                                <a href="<?php echo get_permalink($plan->ID);?>" title="<?php echo $plan->post_title ?>" rel="nofollow"><?php echo $plan->post_title ?></a>
                            </h3>
                        </figcaption>
                    </figure>       
                    <?php endforeach?>

                    <a class="btn btn-danger" href="<?php echo get_page_link(9)?>" title="Ver más" rel="blog">Ir a Planes</a>
			</div>
		</div>
	</div>
</section>
<!-- Plan de Acompañamiento Fin -->

<!-- Fondos Concursables Inicio -->
<section class="fondos">
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h2>Fondos Concursables</h2>
			</div>

			<?php $fondos= get_posts(array('post_type' => 'fondos' , 'numberposts' => 1)); ?>
                <?php $countfondos = 0 ?>
                <?php foreach ($fondos as $fondo): ?>
                <?php $countfondos++ ?>
                <figure class=" col-md-12 col-sm-12 col-xs-12 bigfondo"> 
                    <?php echo get_the_post_thumbnail( $fondo->ID , 'bigfondo', array('class' => 'img-responsive')) ?>
                    <figcaption class="fondo side">
                        <h3>
                            <a href="<?php echo get_permalink($fondo->ID);?>" title="<?php echo $fondo->post_title ?>" rel="nofollow"><?php echo $fondo->post_title ?></a>
                       	</h3>
                       	<p><?php echo substr($slider->post_content , 0, 87)?>...</p>
                    </figcaption>
                </figure>       
            <?php endforeach?>

			<article class="col-md-6 col-sm-6 col-xs-12 row question">
				<img src="<?php echo get_bloginfo('template_directory')?>/images/icon-how.png" alt="" class="col-xs-2 col-esp">
				<div class="col-xs-10">
					<h4>¿Qué son?</h4>
					<p>Los fondos concursables estudiantiles constituyen una forma de financiamiento institucional para ejecutar iniciativas y...</p>
					<a href="" class="more">Ver más</a>
				</div>
			</article>

			<article class="col-md-6 col-sm-6 col-xs-12 row question">
				<img src="<?php echo get_bloginfo('template_directory')?>/images/icon-bulb.png" alt="" class="col-xs-2 col-esp">
				<div class="col-xs-10">
					<h4>¡Participa de los fondos concursables 2014!</h4>
					<p>Los fondos concursables estudiantiles constituyen una forma de financiamiento institucional para ejecutar iniciativas y...</p>
					<a href="" class="more">Ver más</a>
				</div>
			</article>

			<article class="col-md-6 col-sm-6 col-xs-12 row question">
				<img src="<?php echo get_bloginfo('template_directory')?>/images/icon-target.png" alt="" class="col-xs-2 col-esp">
				<div class="col-xs-10">
					<h4>¿Cuáles son sus objetivos?</h4>
					<p>Los fondos concursables estudiantiles constituyen una forma de financiamiento institucional para ejecutar iniciativas y...</p>
					<a href="" class="more">Ver más</a>
				</div>
			</article>

			<article class="col-md-6 col-sm-6 col-xs-12 row question">
				<img src="<?php echo get_bloginfo('template_directory')?>/images/icon-when.png" alt="" class="col-xs-2 col-esp">
				<div class="col-xs-10">
					<h4>¿Cuándo y cómo postular?</h4>
					<p>Los fondos concursables estudiantiles constituyen una forma de financiamiento institucional para ejecutar iniciativas y...</p>
					<a href="" class="more">Ver más</a>
				</div>
			</article>
	
		</div>
	</div>
</section>
<!-- Fondos Concursables Fin -->

<!-- Actividades Inicio -->
<section class="actividades">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Actividades</h2>

				<?php $actividades= get_posts(array('post_type' => 'actividades' , 'numberposts' => 8)); ?>
	                <?php $countactividades = 0 ?>
	                <?php foreach ($actividades as $actividad): ?>
	                <?php $countactividades++ ?>
	                <figure class=" col-md-3 col-sm-6 col-xs-12 col-esp square"> 
	                    <?php echo get_the_post_thumbnail( $actividad->ID , 'squareactivity', array('class' => 'img-responsive')) ?>
	                    <span class>
	                        <strong><?php echo get_the_date('d', $actividad->ID); ?></strong> 
	                        <small><?php echo get_the_date('M', $actividad->ID); ?></small>
                    	</span>
	                    <figcaption class="activity side">
	                    	<span class="orange-tag"><?php echo wp_get_post_categories( $actividad->ID ); ?></span>
	                        <h3>
	                            <a href="<?php echo get_permalink($actividad->ID);?>" title="<?php echo $actividad->post_title ?>" rel="nofollow"><?php echo $actividad->post_title ?></a>
	                       	</h3>
	                       	<p><?php echo substr($actividad->post_content , 0, 87)?>...</p>
	                    </figcaption>
	                </figure>       
	            <?php endforeach?>

	            <a class="btn btn-danger" href="<?php echo get_page_link(11)?>" title="Ver más" rel="blog">Ver más Actividades</a>

			</div>
		</div>
	</div>
</section>
<!-- Actividades Fin -->

<!-- Ferias inicio -->
<section class="ferias">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

					<div class="col-md-6 col-esp">
						<div class="laboral">
							<h2><a href="<?php echo get_page_link(76)?>" title="Ir a Feria Laboral" rel="nofollow">Feria Laboral</a></h2>
						</div>
					</div>
					<div class="col-md-6 col-esp">
						<div class="carrera">
							<h2><a href="<?php echo get_page_link(77)?>" title="Ir a Feria Carreras" rel="nofollow">Feria Carreras</a></h2>
						</div>
					</div>

			</div>
		</div>
	</div>
</section>
<!-- Ferias Fin -->

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

