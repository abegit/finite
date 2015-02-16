<?php 
/*
Template Name: Dark Left
*/

get_header(); ?>
     
     
<div id="dark_left" class="wrapper dk ani">
  
       
  
	     <div class="row">    



                <div class="large-8 columns">
                	 <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
                    <?php the_content(); ?>
                    <?php endwhile; ?>
    <?php endif; ?>
                    
                </div>


                <div class="large-4 columns">
                </div>


        


        </div> <!-- end row -->


          </div> <!-- end dark_centered -->




<?php get_footer(); ?>
