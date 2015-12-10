<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0.75 , minimum-scale=1.0 ,  maximum-scale=1.0">
<title><?php wp_title();?></title>

<!-- Styles -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>?ver=3.8.1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- Scripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<header class="navbar navbar-default navbar-fixed-top bg-titleblue" role="navigation">
    <div class="container">
      	<div class="row">
			<nav class="navbar">

				<div class="navbar-header">
	            	<a class="navbar-brand logo" href="<?php bloginfo('url')?>" title="Circulo de Egresados IPCHILE" rel="nofollow">
	            		<img src="<?php echo get_bloginfo('template_directory')?>/images/logo_vida_estudiantil.png" alt="Logo Vida Estudiantil" width="150" />
	            	</a>

	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
	                  <span class="sr-only">Toggle navigation</span>
	                  <span class="icon-bar"></span>
	                  <span class="icon-bar"></span>
	                  <span class="icon-bar"></span>
	                </button>
	            </div>

	            <div class="navbar-collapse collapse">
	              	<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'nav navbar-nav pull-left hidden-xs hidden-sm' , 'theme_location' => 'primary' ) ); ?>

	              	<div class="searchh">
		                  <form method="get" id="searchform" action="<?php bloginfo('url')?>">
		                    <label class="hidden" for="s"></label>
		                    <a onclick="document.getElementById('searchform').submit();"><span class="fa fa-search"></span></a>
		                    <input type="text" placeholder="Ingrese Búsqueda" value="" name="s" id="s">
		                  </form>
	              	</div>
	            </div><!--/.nav-collapse -->

			</nav>    
      	</div>
    </div>
</header>