<div class="gallery post-single wrapper dk">
    <div class="app-container" <?php if( class_exists( 'kdMultipleFeaturedImages' ) ) { ?> style="background-image:url('<?php echo kd_mfi_get_featured_image_url( 'featured-image-2', 'post' ); ?>')"<?php } ?>>
<div class="row"> 
        <div class="large-12 text-center">
            <?php get_template_part('/inc/title');?>
            <?php if ( has_post_thumbnail() ) { ?>
                <?php the_post_thumbnail('blogsingle'); ?>
            <?php } ?>
            <?php the_excerpt(); ?>
        <a href="#feed" class="wrapper smoothie text-center"><i class="icon-circledown"></i></a>
        </div>
    
    <div class="clear"></div>
</div>

</div>


<div class="row">
    <div class="large-2 columns sidebar">
    <?php $post_tags = wp_get_post_tags($post->ID); if(!empty($post_tags)) { ?>
    <h3>Tools:</h3>
        <?php if (has_tag('app-development', $post)) {
            echo "yes";
            } else if (has_tag('apparel', $post)) {
                
            } else if (has_tag('branding', $post)) {
                
            } else if (has_tag('css3', $post)) {
                
            } else if (has_tag('html5', $post)) {
                
            } else if (has_tag('photoshop', $post)) {
                
            } else if (has_tag('responsive-design', $post)) {
                
            } else if (has_tag('street-culture', $post)) {

            } else if (has_tag('web-design', $post)) {
                
            }?>

    <?php } ?>
    
<?php $video = get_post_meta($post->ID, 'fullby_video', true );
    if($video != '') { ?>
            
        <i class="fa fa-video-camera"></i> Video
            
    <?php } ?>
    </div>

    <div class="large-2 push-8 columns sidebar">
        <?php $app_subtext = get_post_meta($post->ID, 'app_subtext', true );
        if ($app_subtext !== "") { ?>
            <h3>Info</h3>
        <?php echo $app_subtext;
        } else {
            echo " ";
        } ?>
    </div>

    <div class="large-8 columns pull-2 post" id="feed">  
            <div class="info">
                <p>by <?php the_author_link(); ?> <span style="float:right;"><?php the_time('j M Y') ?><i class="icon-clockalt-timealt"></i></span></p>
            </div>
            <div class="content"> 
                <?php the_content(); ?>
                <?php echo do_shortcode('[ratings]'); ?>
            </div>
            <?php get_template_part('inc/authorbox'); ?>
    </div>
</div> <!-- end row -->

<div class="clear"></div>
</div>