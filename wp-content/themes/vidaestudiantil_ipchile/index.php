<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="slide">
				
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <!-- post -->
 <?php endwhile; ?>
 <!-- post navigation -->
 <?php else: ?>
 <!-- no posts found -->
 <?php endif; ?> 


			<div class="revistas">
				<h2>Revisa Publicaciones anteriores</h2>
				
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="plan">
				<h2>Plan de acompañamiento</h2>
			</div>
			
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="fondos">
				<h2>Fondos Concursables</h2>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="actividades">
				<h2>Actividades</h2>
			</div>
		</div>
	</div>
</div>
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

 <?php get_footer(); ?>

