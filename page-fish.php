<?php 
/*
Template Name: Fish Template
*/

get_header(); ?>





<?php get_header(); ?>

<!-- body content -->
<div id="blog <?php $post->ID; ?>" class="wrapper lt">
   
        

        <div class="section-header bl">
            <div class="row"> <div class="large-12 columns text-center">
        </div></div></div>

     <div class="row">    


            <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 

                <div class="large-8 columns post">
                                    <h1 class="subheader"><?php the_title(); ?></h1>  
                    <?php the_content(); ?>
                    <?php endwhile; ?>
<div class="text-center button ani container"><?php posts_nav_link(' or ', 'Newer <i class="icon-fastright r"></i></a>', '<i class="icon-fastleft"></i>Older</a>'); ?></div>
    <?php endif; ?>
                    
                </div>


                <div class="large-4 columns"><?php echo adrotate_group(1); ?></div>


        


        </div> <!-- end row -->

        <div class="clear"></div>
    </div>




<?php get_footer(); ?>
