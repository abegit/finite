<?php get_header(); ?>
<!-- body content -->
<div id="single" class="wrapper lt">
     
     <div class="row">  
           <div class="large-8 columns post">  
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part('/inc/title');?>
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail('blogsingle', array('class' => 'no-mobi')); } ?>
                    <div class="info">
                        <p>by <?php the_author_link(); ?> <span style="float:right;"><?php the_time('j M Y') ?><i class="icon-clockalt-timealt"></i></span></p>
                    </div>
                    <div class="content"> 
                    <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                <!-- <div class="text-center button ani container"><?php next_post_link( '<strong>%link</strong>' ); ?><?php previous_post_link( '<strong>%link</strong>' ); ?></div> -->
                </div>


                <div class="large-4 columns sidebar">
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