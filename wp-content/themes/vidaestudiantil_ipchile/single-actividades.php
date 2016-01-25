<?php get_header('single'); ?>

<?php $bgid = get_post_thumbnail_id()?>
<?php $bg = wp_get_attachment_image_src( $bgid, 'singleenc' ); ?>

<div class="heading-single" style="background-image: url(<?php echo $bg[0]?>);">
    <div class="container-fluid gradient">
        <div class="row">

            <div class="jumbotron">
                <h2><?php echo $post->post_title; ?></h2>
                <p class="single-excerpt"><?php echo substr($post->post_content , 0, 101)?>...</p>
            </div>
        </div>
    </div>
</div>

<article class="single-content">
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-sm-10 col-md-offset-2 col-sm-offset-2">
                <div class="clear separator"></div>
                <?php if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb('<p id="breadcrumbs">Usted esta en:','</p>');
                } ?>
            </div>

            <div class="col-md-1 col-sm-2 col-md-offset-1 act-date col-xs-12">
                <span class="first"><?php echo the_time('j') ?> </span>
                <span class="second"><?php echo the_time('M')?></span>
            </div>

            <div class="col-md-8 col-sm-9">
                <?php echo apply_filters('the_content' , $post->post_content)?>
                <?php echo get_field('tabla_convenio') ?>
            </div>

            <div class="clear separator"></div>

            <div class="col-md-4 col-sm-4 col-md-offset-2 col-sm-offset-2 col-xs-12 share-article">

                <ul>
                    <p>Compartir:</p>
                    <li><a onclick="basicPopup(this.href);return false" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&title=<?php the_title(); ?>&summary=&source="><i class="fa fa-linkedin"></i></a></li>
                    <li><a onclick="basicPopup(this.href);return false" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a onclick="basicPopup(this.href);return false" target="_blank" href="http://twitter.com/share?text=<?php echo get_bloginfo('name')?>&nbsp;-&nbsp;<?php echo $post->post_title?>"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
</article>

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