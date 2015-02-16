<?php get_header(); ?>



<!-- body content -->

<!-- enter content -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
<div id="page" class="wrapper lt">

     <div class="row">    



                <div class="large-8 columns">
                    <?php the_content(); ?>
                    <?php endwhile; ?>
    <?php endif; ?>
                    
                </div>


                <div class="large-4 columns"><?php echo adrotate_group(1); ?></div>


        


        </div> <!-- end row -->

        <div class="clear"></div>
    </div>

<?php get_footer(); ?>
