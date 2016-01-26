<?php get_header()?>
<?php $var = get_queried_object();?>

<?php get_template_part('socialbar')?>

<section id="slider" class="heading-page" style="background-image:url(<?php echo get_bloginfo('template_directory')?>/images/search.jpg)">
        <div class="container-fluid gradient">
            <div class="row">
                <div class="jumbotron col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                    <h1>Usted buscó: <?php echo $_GET['s'] ?></h1>
                    <p>Resultados de búsqueda</p>
                </div>
            </div>
        </div>
</section>

<div class="clear separator"></div>

<section id="documentos">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
            <div class="row">
            	
                <div class="col-md-12">
                	<div class="form-group">
                    
                    </div>
                    <form method="get" id="searchform" action="<?php bloginfo('url')?>">
                        <div class="form-group">
                        	<div class="input-group">
                          		<div class="input-group-addon"><span class="fa fa-search"></span></div>
                          		<input type="text" class="form-control input-lg" placeholder="Buscar..." value="" name="s" id="s">
                        	</div>
                        	
                       </div>
                    </form>
                    <div class="clear miniseparator"></div>
                </div>
                                
            </div>
            <div class="clear separator border"></div>

            <!-- <pre><?php //var_dump($wp_query); ?></pre> -->

            	<?php foreach($posts as $doc):?>
                	<article>
                        <div class="row">
                            <div class="col-md-12">
                                <h4><a href="<?php echo get_permalink($doc->ID)?>"><?php echo $doc->post_title?></a></h4>
                                <p><?php echo substr($doc->post_excerpt , 0 , 200 )?></p>
                            </div>
                            <div class="col-md-3"><a href="<?php echo get_permalink($doc->ID)?>" class="morelink"><span class="fa fa-circle"></span> Leer más</a></div>
                        </div>
                        <div class="clear border separator"></div>
                    </article>
                	
                <?php endforeach;?>
                
            </div>
		</div>
	</div>
</section>
<div class="clear separator"></div>




<?php get_footer();?>