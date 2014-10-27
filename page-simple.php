<?php 
/*
Template Name: Simple
*/
get_header(); ?>



<!-- body content -->

<!-- enter content -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
<?php if (has_post_thumbnail( $post->ID ) ) { ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<section id="enter" class="wrapper" style="background-image: url('<?php echo $image[0]; ?>')"  data-type="background" data-speed="2">
<?php } else { ?> 
<section id="enter" class="wrapper lt" data-type="background" data-speed="2">
<?php } ?>
    <div class="row text-center" id="weDo">
        <div class="large-8 large-centered columns"><h1 class="start " id=""><?php the_title(); ?></h1><br></div>
    </div>

    <div class="row choice">
        <?php dynamic_sidebar('home'); ?>
    </div><!--row-->
</section>
<!--end enter content-->


<div id="blog <?php $post->ID; ?>" class="wrapper lt">

     <div class="row">    



                <div class="large-8 columns post">
                                    <h1 class="subheader"><?php the_title(); ?></h1>  
                    <?php the_content(); ?>
                    <?php endwhile; ?>
    <?php endif; ?>
                    
                </div>


                <div class="large-4 columns"><?php echo adrotate_group(1); ?></div>


        


        </div> <!-- end row -->

        <div class="clear"></div>
    </div>

<?php get_footer(); ?>
