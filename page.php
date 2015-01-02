<?php get_header(); ?>



<!-- body content -->

<!-- enter content -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
<div id="blog <?php $post->ID; ?>" class="wrapper lt">

     <div class="row">    



                <div class="large-8 columns">
                    <?php the_content(); ?>
                    <?php endwhile; ?>
    <?php endif; ?>
                    
                </div>


                <div class="large-4 columns"></div>


        


        </div> <!-- end row -->

        <div class="clear"></div>
    </div>

<?php get_footer(); ?>
