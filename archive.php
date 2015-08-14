<?php get_header(); ?>



<!-- body content -->

<div id="blog" class="wrapper lt">
        <div class="row">
            <div class="large-12 columns">
            <?php if ( have_posts() ) : ?>
                <div id="post-loop">
                    <?php while (have_posts()) : the_post(); ?> 
                        <div class="post large-4 columns">
                            <a itemscope itemtype="http://schema.org/Article" href="<?php the_permalink() ?>" data-transition="slide" title="<?php the_title_attribute(); ?>" class="title"> <?php if ( has_post_thumbnail() ) { the_post_thumbnail('blog'); } ?>
                            <div class="info">
                            <p><?php the_time('n M Y') ?><i class="icon-clockalt-timealt"></i></p>
                            </div>
                            <div class="content">
                            <h3><?php the_title(); ?></h3>
                            <?php echo the_excerpt(); ?></div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php get_template_part('inc/pagination'); ?>
            <?php endif; ?>
        </div>
        </div> <!-- end row -->
<div class="clear"></div>
</div>


<?php get_footer(); ?>