

<?php get_header(); ?>



<!-- body content -->

<div id="category" class="wrapper lt">

        <div class="row">
            
        <div class="large-9 columns">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
            <div class="large-6 columns post">
                <a href="<?php the_permalink() ?>" data-transition="slide" title="<?php the_title_attribute(); ?>" class="title"> <?php if ( has_post_thumbnail() ) { the_post_thumbnail('blogsingle'); } ?>
                <div class="info">
                <p><?php the_time('n M Y') ?><i class="icon-clockalt-timealt"></i></p>
                </div>
                <div class="content">
                <h3><?php the_title(); ?></h3>
                <?php echo the_excerpt(); ?></div>
                </a>
            </div>
            <?php endwhile; ?>
            <div class="large-12 columns text-center ani">
                <?php custom_pagination( $html_id ); ?>
            </div>
        <?php endif; ?>
        </div>
        <div class="large-3 columns sidebar">
        <?php if ( is_active_sidebar( 'newsletter' ) ) : ?>
        <div style="background: url('<?php bloginfo('template_directory'); ?>/images/dont-be-square.jpg') no-repeat scroll 0px 0px / contain  rgb(249, 249, 249); padding: 50% 8% 8%;">
        <div style="background: none repeat scroll 0% 0% rgb(255, 255, 255); padding: 20px;"><?php dynamic_sidebar( 'newsletter' ); ?></div></div>
        <?php endif; ?>
        
        <ul><?php dynamic_sidebar( 'blog' ); ?></ul>

        </div>







            
        </div> <!-- end row -->
<div class="clear"></div>
</div>


<?php get_footer(); ?>