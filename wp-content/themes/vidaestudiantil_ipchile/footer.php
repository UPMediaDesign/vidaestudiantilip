<footer>
<div class="container">
	<div class="row">
		<div class="col-md-12 row">
			<div class="col-lg-3 col-md-3 col-sm-12">
				<a class="navbar-brand foot" href="<?php echo get_bloginfo('url')?>">
	        		<img alt="Brand" src="<?php echo get_bloginfo('template_directory')?>/images/logo_vida_estudiantil.png" class="lc">
	    	  		</a>
			</div>

			<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'footer-nav col-lg-2 col-md-2 col-sm-12 service ' , 'theme_location' => 'second' ) ); ?>
			<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'footer-nav col-lg-2 col-md-2 col-sm-12 service ' , 'theme_location' => 'third' ) ); ?>
			<?php wp_nav_menu( array( 'container' => 'none', 'menu_class' => 'footer-nav col-lg-2 col-md-2 col-sm-12 service ' , 'theme_location' => 'fourth' ) ); ?>
			
			<ul class="credits col-lg-3 col-md-3 col-sm-12" style="padding-left:0;">
                <span>Redes Sociales</span><br>
                <small>Buscanos en:</small>
                <div class="clear display-on-mobile"></div>
				<?php $redes = get_field('redes_sociales' , 'options')?>
                    <?php foreach($redes as $red):?>
                    <li>
                        <a href="<?php echo $red['link_red']?>" target="_blank" title="Vida Estudiantil en <?php echo $red['nombre_de_la_red'] ?>">
                            <img src="<?php echo $red['logo_red']?>" alt="<?php echo $red['nombre_de_la_red'] ?>" width="100%">
                        </a>
                    </li>
                <?php endforeach;?>				
			</ul>	

		</div>
	</div>
</div>
</footer>


<script>
/* jQuery('#slider').bxSlider({
  //minSlides: 2,
  //maxSlides: 4,
  //slideWidth: 290,
  //slideMargin: 15,
  //moveSlides: 1,
  pager:false,
  nextText:'<span class="fa fa-angle-right fa-fw"></span>',
  prevText:'<span class="fa fa-angle-left fa-fw"></span>',
}); */



</script>


<?php wp_footer(); ?>

</body>
</html>