<?php get_header(); ?>

<?php //get_template_part('socialbar'); ?>

<?php $bgid = get_post_thumbnail_id(11)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingpage' ); ?>

<div class="heading-page" style="background-image: url(<?php echo $bg[0]?>);">
    <div class="container-fluid gradient">
        <div class="row">

            <div class="col-md-12 col-xs-12">
                <div class="jumbotron col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <?php $postt = get_post(11); ?>
                <h2><?php echo $postt->post_title; ?></h2>
                <h3><?php echo $postt->post_excerpt; ?></h3>
                <p><?php echo get_field('bajada_preheader', $postt->ID)?></p>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Actividades -->
<section class="actividades content">
    <div class="container">
        <div class="row">
                    <?php $actividades = get_posts(array('post_type' => 'actividades', 'numberposts' => 10 , 'post__not_in')) ?>
                    <?php $countactividades = 0?>
                    <?php foreach($actividades as $actividad):?>
                    <?php $countactividades++?>
                    
                    <?php if($countactividades == 1 || $countactividades == 2)
                        {
                            $actsize = 'actidestacado';
                            $actclass = 'principales col-md-6';
                            $actsocial = 'soc-visible';
                            $actcolimg = 'heading col-md-12 col-sm-12 col-xs-12';
                            $actcolcaption = 'col-md-11 col-sm-11 col-xs-11';
                        }

                        else{
                            $actsize = 'actilista';
                            $actclass = 'second col-md-6 col-sm-6 col-xs-12';
                            $actsocial = 'soc-secondary';
                            $actcolimg = 'non-display';
                            $actcolcaption = 'col-md-9 col-sm-8 col-xs-8'; 
                            $actspanfloat = 'col-xs-2';                 
                        }

                    ?>
                        <figure class="<?php echo $actclass?>">
                            <div class="act-date <?php echo $actspanfloat?>">
                                <span class="day"><?php echo the_time('d')?></span>
                                <span class="month"><?php echo the_time('M')?></span>
                            </div>
                            <a class="<?php echo $actcolimg ?>" href="<?php echo get_permalink($actividad->ID)?>"><?php echo get_the_post_thumbnail($actividad->ID , $actsize , array('class' => 'img-responsive'))?></a>
                            <figcaption class="<?php echo $actcolcaption ?>">
                                <h4><a href="<?php echo get_permalink($actividad->ID)?>" ><?php echo $actividad->post_title?></a></h4>
                                <p><?php echo substr($actividad->post_content , 0, 95)?>...</p>
                                
                                <a class="vermas" href="<?php echo get_permalink($actividad->ID)?>" title="Ver más" rel="blog">Ver más <i class="fa fa-arrow-right"></i></a>

                                 <ul class="<?php echo $actsocial?>">
                                        <li><a onclick="basicPopup(this.href);return false" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&title=<?php the_title(); ?>&summary=&source="><i class="fa fa-linkedin"></i></a></li>
                                        <li><a onclick="basicPopup(this.href);return false" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><i class="fa fa-facebook"></i></a></li>
                                        <li><a onclick="basicPopup(this.href);return false" target="_blank" href="http://twitter.com/share?text=<?php echo get_bloginfo('name')?>&nbsp;-&nbsp;<?php echo $post->post_title?>"><i class="fa fa-twitter"></i></a></li>
                                </ul> 
                                <div class="separator"></div>
                            </figcaption>
                        </figure>

                    
                    <?php endforeach?>                
                    <div class="clear separator"></div>
                    <div class="col-md-6">
                        <?php wp_pagenavi(); ?>
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