<?php 
/*
Template Name: Dark Centered
*/

get_header(); ?>
     
     
<div id="dark_centered" class="wrapper dk ani woocommerce">
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
       
  <div class="row anis">
                <div class="large-8 large-centered columns">
                   <h1 class="subheader text-center"><?php the_title(); ?></h1>
<?php the_content(); ?>
</div>
<?php endwhile; ?> <?php endif; ?>
       

        <div class="clear"></div>
</div>        </div> <!-- end dark_centered -->




<?php get_footer(); ?>
