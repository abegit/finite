<?php 
/*
Template Name: Enter Template
*/

get_header(); ?>


<?php get_header(); ?>

<!-- body content -->

    
        <section id="enter" class="wrapper dk" <?php if (has_post_thumbnail( $post->ID ) ) { 
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
             ?>style="background-image: url('<?php echo $image[0]; ?>')" <?php } ?>  data-type="background" data-speed="2">
    <div class="row" id="weDo">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
        <div class="large-12 columns">
        <?php the_content(); ?>
        <?php endwhile; ?>
        </div>
        <?php endif; ?>      

        <div class="large-12 columns">
            <div class="text-center"><?php dynamic_sidebar('home-footer'); ?></div>
        </div>
    </div> <!-- end row -->
    <div class="section-footer">
        <div class=""></div>
    </div>
        <!--end enter content-->
</section>
            

<?php get_footer(); ?>
