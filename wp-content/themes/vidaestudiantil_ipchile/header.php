<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=0.75 , minimum-scale=1.0 ,  maximum-scale=1.0">
<title><?php wp_title();?></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css?ver=3.8.1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>?ver=3.8.1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<header>
  		<div class="container">
  			<div class="row">
  				<div class="col-md-12">
  					<nav class="navbar">
			    		<div class="navbar-header">
			    	 		<a class="navbar-brand" href="<?php echo get_bloginfo('url')?>">
			        		<img alt="Brand" src="<?php echo get_bloginfo('template_directory')?>/images/logo_vida_estudiantil.png" class="lc">
			    	  		</a>
			    		</div>
						<div class="navbar-right">
		    				<?php wp_nav_menu(array('theme_location'  => 'primary', 'menu_class' => 'nav navbar-nav pull-left hidden-xs hidden-sm' , 'container' => 'none')) ?>
		    			</div>
					</nav>
				</div>
			</div>
		</div>
	
</header> 