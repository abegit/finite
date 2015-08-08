<div class="authorbox flex">
	<div class="author_avatar alignleft"><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></div>
	<div> <span>Written by</span> <a class="authorlink" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a><br>
		<?php echo get_the_author_meta( 'description' ); ?><br>
		<?php if (get_the_author_meta( 'yim' ) != "" ) { ?>
			Bonoboville: <a href="http://bonoboville.com/<?php echo get_the_author_meta( 'yim' ); ?>"><?php echo get_the_author_meta( 'yim' ); ?></a><br>
		<?php } if (get_the_author_meta( 'aim' ) != "" ) { ?>
			Instagram: <a href="https://instagram.com/<?php echo get_the_author_meta( 'aim' ); ?>"><?php echo get_the_author_meta( 'aim' ); ?></a><br>
		<?php }
		if (get_the_author_meta( 'twitter' ) != "" ) { ?>
			Twitter: <a href="https://twitter.com/<?php echo get_the_author_meta( 'twitter' ); ?>"><?php echo get_the_author_meta( 'twitter' ); ?></a>
		<?php } ?>
	</div>
</div>

