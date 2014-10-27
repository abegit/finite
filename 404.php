

<?php get_header(); ?>

<!-- body content -->
<div id="blog <?php $post->ID; ?>" class="wrapper lt">

     <div class="row">    


            <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 

                <div class="large-8 columns">
                                    <h1 class="subheader"><?php the_title(); ?></h1>  
                    <?php the_content(); ?>
                    <?php endwhile; ?>
    <?php endif; ?>
                    
                </div>


                <div class="large-4 columns"><?php echo adrotate_group(1); ?>
                        <?php dynamic_sidebar('blog'); ?>
</div>


        


        </div> <!-- end row -->

        <div class="clear"></div>
    </div>




<?php get_footer(); ?>