<?php get_header(); ?>

<section id="slider">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner container-fluid" role="listbox">


            <?php $sliders = get_posts(array('post_type' => 'publicaciones' , 'numberposts' => 12)) ?>
            <?php $scount = 0?>
            <?php foreach($sliders as $slider):?>
            <?php $scount++ ?>
            <?php if($scount <= 1) ?>
            <?php $bgs = wp_get_attachment_image_src(get_post_thumbnail_id($slider->ID), 'slider')?> 
                <div class="item row<?php if($scount == 6){?>active<?php }?>" style="background-image:url(<?php echo $bgs[0]?>);">

                    <div class="jumbotron base col-md-5 col-md-offset-6">
                        <h2><?php echo $slider->post_title?></h2>
                        <span><?php echo get_field('numero_de_publicacion', $slider->ID)?>, <?php echo get_field('mes_inicio', $slider->ID)?>/<?php echo get_field('mes_fin', $slider->ID)?></span>
                        <p class="intro-ed"><?php echo $slider->post_excerpt?></p>
                        <p class="paragraph"><?php echo substr($slider->post_content , 0, 145)?>...</p>

                        <a class="btn btn-danger" href="<?php echo get_permalink($slider->ID)?>">
                        	Ver Pubicación
                        </a>
                        <a class="btn btn-warning download" href="<?php echo get_field('bajada', $slider->ID)?>">
                        	Descargar Publicación
                        </a>
                    </div>

                    <div class="col-md-1 skk desktop"></div>
                    <div class="clear"></div>
                </div>
            <?php endforeach ?>

        </div>
    </div>
</section>

<!-- <div class="container">
	<h1>Bootstrap 3 Thumbnail Slider / Carousel</h1>
    <div class="row">

        <div class="col-md-12" id="slider">
                <div class="col-md-12" id="carousel-bounding-box">
                    <div id="myCarousel" class="carousel slide">
                       
                        <div class="carousel-inner">
                            <div class="active item" data-slide-number="0">
                                <img src="http://placehold.it/1200x480&amp;text=one" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="1">
                              <img src="http://placehold.it/1200x480/888/FFF" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="2">
                                <img src="http://placehold.it/1200x480&amp;text=three" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="3">
                                <img src="http://placehold.it/1200x480&amp;text=four" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="4">
                                <img src="http://placehold.it/1200x480&amp;text=five" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="5">
                                <img src="http://placehold.it/1200x480&amp;text=six" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="6">
                                <img src="http://placehold.it/1200x480&amp;text=seven" class="img-responsive">
                            </div>
                            <div class="item" data-slide-number="7">
                                <img src="http://placehold.it/1200x480&amp;text=eight" class="img-responsive">
                            </div>
                        </div>

                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>

                    </div>
                </div>

        </div>
    </div> -->
    <!--/main slider carousel-->

    <!-- thumb navigation carousel -->
<!--     <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">

        <ul class="list-inline">
	        <li> 
	        	<a id="carousel-selector-0" class="selected">
	            	<img src="http://placehold.it/80x60&amp;text=one" class="img-responsive">
	          	</a>
	      	</li>
	        <li> 
	        	<a id="carousel-selector-1">
	            	<img src="http://placehold.it/80x60&amp;text=two" class="img-responsive">
	          	</a>
	    	</li>
	        <li> 
	        	<a id="carousel-selector-2">
	            	<img src="http://placehold.it/80x60&amp;text=three" class="img-responsive">
	          	</a>
	      	</li>
	        <li> 
	        	<a id="carousel-selector-3">
	            	<img src="http://placehold.it/80x60&amp;text=four" class="img-responsive">
	          	</a>
	      	</li>
	        <li>
	        	<a id="carousel-selector-4">
	            	<img src="http://placehold.it/80x60&amp;text=five" class="img-responsive">
	          </a>
	      	</li>
	        <li> 
	        	<a id="carousel-selector-5">
	            	<img src="http://placehold.it/80x60&amp;text=six" class="img-responsive">
	          	</a>
	      	</li>
        </ul>
        
    </div>
</div> -->

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="revistas">
				<h2>Revisa Publicaciones anteriores</h2>
			</div>
		</div>
	</div>
</div>

<!-- Plan de Acompañamiento inicio -->
<section class="plan">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<h2>Plan de acompañamiento</h2>
						<span>Aenean tristique at erat id mattis. Morbi mattis arcu sed porttitor luctus. Donec quis blandit massa. Donec imperdiet rutrum odio vitae ultrices. Aliquam bibendum dui sit amet molestie ultrices.</span>
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
						<h4>¿Cúales son sus objetivos?</h4>
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
	                    <span>
	                        <strong><?php echo get_the_date('d', $actividad->ID); ?></strong>
	                        <?php echo get_the_date('M', $actividad->ID); ?>
                    	</span>
	                    <figcaption class="activity side">
	                        <h3>
	                            <a href="<?php echo get_permalink($actividad->ID);?>" title="<?php echo $actividad->post_title ?>" rel="nofollow"><?php echo $actividad->post_title ?></a>
	                       	</h3>
	                       	<p><?php echo substr($actividad->post_content , 0, 87)?>...</p>
	                    </figcaption>
	                </figure>       
	            <?php endforeach?>

			</div>
		</div>
	</div>
</section>
<!-- Actividades Fin -->

<!-- Ferias inicio -->
<div class="container">
	<div class="row">
		<div class="col-md-12">

				<div class="col-md-6">
					<div class="laboral">
						<h2>Feria Laboral</h2>
					</div>
				</div>
				<div class="col-md-6">
					<div class="carrera">
						<h2>Feria Carreras</h2>
					</div>
				</div>

		</div>
	</div>
</div>
<!-- Ferias Fin -->

<!-- Suscripción al newsletter -->

<!-- Fin suscripción -->

 <?php get_footer(); ?>

