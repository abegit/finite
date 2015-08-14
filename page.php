<?php get_header(); ?>
<?php global $bp ?>


<!-- body content -->

<!-- enter content -->
<div id="page" class="wrapper lt">

     <div class="row">    



                <div class="large-8 columns">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
            <?php the_content(); ?>
                           
            <div class="section-header">
                <div class="row">
                    <div class="large-12 columns">Last Modified: <?php the_modified_date(); ?></div>
                </div>
            </div>
        <?php endwhile; ?> 
    <?php endif; ?>
                    
                </div>


        <div class="large-4 columns sidebar">
            <ul> <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Sidebar') ) : ?> <?php endif; ?> </ul>
        </div>


        


        </div> <!-- end row -->

        <div class="clear"></div>
    </div>

<?php get_footer(); ?>
