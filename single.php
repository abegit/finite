<?php get_header();
if (have_posts()) : while (have_posts()) : the_post();
	if (has_post_format( 'standard' )) {
		get_template_part( 'content', get_post_format() );
	} elseif (has_post_format( 'gallery' )) {
		get_template_part( 'content', 'gallery' );
	} else {
		get_template_part( 'content', 'standard' );		
	}
	endwhile;
endif;
get_footer(); ?>