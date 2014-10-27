<?php 
/*
Template Name: Enter Template
*/

get_header(); ?>


<?php get_header(); ?>

<!-- body content -->

    <?php if (has_post_thumbnail( $post->ID ) ) { ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <section id="enter" class="wrapper" style="background-image: url('<?php echo $image[0]; ?>')"  data-type="background" data-speed="2">
    <?php } else { ?>
        <section id="enter" class="wrapper" data-type="background" data-speed="2">
    <?php } ?>
    <div class="row" id="weDo">
        <div class="large-12 columns">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
        <?php the_content(); ?>
        <?php endwhile; ?>
        </div>
        <div class="large-12 columns">
            <div class="text-center"><?php dynamic_sidebar('home-footer'); ?></div>
        </div>
    </div> <!-- end row -->
    <div class="section-footer">
        <div class=""></div>
    </div>
        <!--end enter content-->
</section>

            
            <?php endif; ?>      

<?php get_footer(); ?>
