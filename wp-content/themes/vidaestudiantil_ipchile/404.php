<?php get_header()?>
<?php $bgd = wp_get_attachment_image_src( get_field('pagina_404' , 'options') , 'full')?>

<div class="areas">
	<div class="container">
		<div class="row">

			<div class="title col-md-6 col-sm-6 col-xs-12">
			    	<span class="not-find">404</span><br>
					<span>TA-TA-TA!!!</span>
					<p>Lo sentimos, pero no se encuentra el contenido que estás buscando</p>
			</div>
			<div class="clear miniseparator"></div>
			<div class="content-list col-md-6 col-sm-6 col-xs-12">
				<p>Puedes buscar en nuestra navegación</p>
				<ul>
					<li><a href="<?php bloginfo('url')?>" rel="nofollow" title="Ir al Home">Inicio</a></li>
					<li><a href="<?php bloginfo('url')?>/quienes-somos/" rel="nofollow" title="Ir a Quienes Somos">Quienes Somos</a></li>
					<li><a href="<?php bloginfo('url')?>/plan-de-acompanamiento/" rel="nofollow" title="Ir a Plan de Acompañamiento">Plan de Acompañamiento</a></li>
					<li><a href="<?php bloginfo('url')?>/actividad/" rel="nofollow" title="Ir a Actividades">Actividades</a></li>
					<li><a href="<?php bloginfo('url')?>/ferias/" rel="nofollow" title="Ir a Ferias">Ferias</a></li>
					<li><a href="<?php bloginfo('url')?>/programa-avanza/" rel="nofollow" title="Ir a Programa Avanza">Programa Avanza</a></li>
					<li><a href="<?php bloginfo('url')?>/fondos-concursables/" rel="nofollow" title="Ir a Fondos Concursables">Fondos Concursables</a></li>
				</ul>
			</div>			
		</div>
	</div>
</div>
<?php get_footer()?>