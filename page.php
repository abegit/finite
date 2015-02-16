<?php get_header(); ?>
<?php global $bp ?>


<!-- body content -->

<!-- enter content -->
<div id="page" class="wrapper lt">

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

        <div class="clear"></div>
    </div>

<?php get_footer(); ?>
