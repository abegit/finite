<div class="wrapper single post-single lt">
     
<div class="row">  
   <div class="large-8 columns post" id="content">  
            <?php get_template_part('/inc/title');?>
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail('blogsingle', array('class' => 'no-mobi')); } ?>
            <div class="info">
                <p>by <?php the_author_link(); ?> <span style="float:right;"><?php the_time('j M Y') ?><i class="icon-clockalt-timealt"></i></span></p>
            </div>
            <div class="content"> 
            <?php the_content(); ?>
            <?php echo do_shortcode('[ratings]'); ?>
            </div>
            <div class="section-header"><div class="row"><div class="large-12 columns">Last Modified: <?php the_modified_date(); ?></div>
            <div class="large-12 columns">Published: <?php the_date(); ?></div></div></div>
            <?php get_template_part('inc/authorbox'); ?>
    </div>


    <div class="large-4 columns sidebar">
        <?php if ( is_active_sidebar( 'newsletter' ) ) : ?>
        <div style="background: url('<?php bloginfo('template_directory'); ?>/images/dont-be-square.jpg') no-repeat scroll 0px 0px / contain  rgb(249, 249, 249); padding: 50% 8% 8%;">
        <div style="background: none repeat scroll 0% 0% rgb(255, 255, 255); padding: 20px;"><?php dynamic_sidebar( 'newsletter' ); ?></div></div>
        <?php endif; ?>
        
        <ul><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Sidebar') ) : ?><?php endif; ?></ul>
    </div>
</div> <!-- end row -->

<div class="clear"></div>
</div>