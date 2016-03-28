<?php
/*
Template Name: Ferias
*/
?>

<?php get_header(); ?>

<?php get_template_part('socialbar'); ?>

<?php $bgid = get_post_thumbnail_id($post->ID)?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'headingpage' ); ?>

<div class="heading-page" style="background-image: url(<?php echo $bg[0]?>);">
    <div class="container-fluid gradient">
        <div class="row">

            <div class="col-md-12 col-xs-12">
                <div class="jumbotron col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                    <h2><?php echo $post->post_title; ?></h2>
                    <h3><?php echo $post->post_excerpt; ?></h3>
                    <p><?php echo get_field('bajada_preheader')?></p>
                </div>
            </div>

        </div>
    </div>
</div>

<section class="ferias insider">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                
                <?php echo $post->post_content; ?>
                
            </div>
        </div>
    </div>
</section>

<section class="ferias gallery">
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <h3>Revisa nuestra Galería</h3>
                <span>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus sagittis convallis libero, et laoreet ligula aliquet convallis rutrum.</span>
            </div>

            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">

                <ul class="nav nav-pills nav-stacked">

                <?php $fairgallery = get_field('feria_gallery', $post->ID); ?>
                <?php $fairgallerycount = 0?>
                <?php foreach($fairgallery as $fairimage):?>
                    <?php $fairgallerycount++?>
                    <li class="col-md-3 col-xs-3 col-esp"><a data-target="#lightbox" data-toggle="modal" data-slide-to="<?php echo $fairgallerycount?>"><img src="<?php echo $fairimage['sizes']['thumbnail'] ?>" class="img-responsive" alt="..."></a></li>

                <?php endforeach;?> 

                
                <div class="modal fade and carousel slide" id="lightbox">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">

                          <div class="carousel-inner">
                            <?php $fairmodalcount = 0 ?>
                            <?php foreach($fairgallery as $fairmodal):?>
                            <?php $fairmodalcount++?>
                            <div class="item <?php if($fairmodalcount == 1){echo 'active';}?>">

                              <img src="<?php echo $fairmodal['sizes']['modal']?>" class="img-responsive" alt="<?php echo $fairmodal['alt'];?>">
                            </div>
                            <?php endforeach;?> 
                          </div><!-- /.carousel-inner -->

                          <a class="left carousel-control" href="#lightbox" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                          </a>

                          <a class="right carousel-control" href="#lightbox" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                          </a>

                         </div><!-- /.modal-body -->
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal --> 



               </ul>
            </div>
        </div>
    </div>
</section>


<!-- Large modal -->

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