<?php get_header(); ?>



<!-- body content -->

<div id="blog feed" class="wrapper lt">
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
            <div class="large-6 columns post">
                <a href="<?php the_permalink() ?>" data-transition="slide" title="<?php the_title_attribute(); ?>" class="title"> <?php if ( has_post_thumbnail() ) { the_post_thumbnail('blog'); } ?>
                <div class="info">
                <p><?php the_time('n M Y') ?><i class="icon-clockalt-timealt"></i></p>
                </div>
                <div class="content">
                <h3><?php the_title(); ?></h3>
                <?php echo the_excerpt(); ?></div>
                </a>
            </div>
            <?php endwhile; ?><div class="text-center button ani container"><?php posts_nav_link(' or ', 'Newer <i class="icon-fastright r"></i></a>', '<i class="icon-fastleft"></i>Older</a>'); ?></div><?php endif; ?>
        </div> <!-- end row -->
<div class="clear"></div>
</div>


<?php get_footer(); ?>