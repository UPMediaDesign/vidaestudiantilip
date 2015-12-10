<footer>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-3">
				<a class="navbar-brand" href="<?php echo get_bloginfo('url')?>">
	        		<img alt="Brand" src="<?php echo get_bloginfo('template_directory')?>/images/logo_vida_estudiantil.png" class="lc">
	    	  		</a>
			</div>
			<div class="col-md-2">
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="col-md-2">
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="col-md-2">
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3>Redes Sociales</h3>
				<p>Buscanos en:</p>
			</div>	
		</div>
	</div>
</div>
</footer>

<script>
	jQuery('#myCarousel').carousel({
	    interval: 4000
	});

	// handles the carousel thumbnails
	jQuery('[id^=carousel-selector-]').click( function(){
	  var id_selector = $(this).attr("id");
	  var id = id_selector.substr(id_selector.length -1);
	  id = parseInt(id);
	  $('#myCarousel').carousel(id);
	  $('[id^=carousel-selector-]').removeClass('selected');
	  $(this).addClass('selected');
	});

	// when the carousel slides, auto update
	jQuery('#myCarousel').on('slid', function (e) {
	  var id = $('.item.active').data('slide-number');
	  id = parseInt(id);
	  $('[id^=carousel-selector-]').removeClass('selected');
	  $('[id=carousel-selector-'+id+']').addClass('selected');
	});
</script>


<?php wp_footer(); ?>

</body>
</html>