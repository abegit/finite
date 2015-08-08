<?php if (is_page_template('page-dark-left.php')) { ?>
	<div class="section-header">
		<div class="text-center button ani container"><?php posts_nav_link(' or ', 'Newer <i class="icon-fastright r"></i></a>', '<i class="icon-fastleft"></i>Older</a>'); ?></div>

		<div class="row">
			<div class="large-8 small-12 columns page-head">
				<?php if (has_post_thumbnail( $post->ID ) ) { ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
				<img src="<?php echo $image[0]; ?>" style=" height: 95px;width: auto;">
				<?php } ?>
				<?php get_template_part('/inc/title');?>
				<?php $app_subtext = get_post_meta($post->ID, 'app_subtext', true ); ?>
				<?php if ($app_subtext != "" ) {
					echo '<span>'.$app_subtext.'</span>';
				} else {} ?>
			</div>
			<div class="columns large-3 small-12 title_info">
				<p>The Goods!</p>
				<?php $downloadURL = get_post_meta($post->ID, 'externalURL', true ); ?>
				<?php if ($downloadURL != "" ) {
					echo '<a class="btn" target="_new" href="'.$downloadURL.'">Download</a>';
				} else {} ?>
				<?php $playTitle = get_the_title(); ?>
				<?php echo do_shortcode('[paypal-donation purpose="To continue working on '.$playTitle.'" reference="AbePlugins"]') ?>
			</div>
		</div>
<div class="navigation">
<div class="alignleft">
<?php if ( get_previous_post() !== "" ){
	previous_post('%',
 '', 'yes');
} else {
echo '<a href="/for-business"></a>';	
}?>
</div>
<div class="alignright">
<?php if ( get_next_post() !== "" ){
	next_post('%',
 '', 'yes');
} else {
echo '<a href="/for-business"></a>';	
}?>
</div>
</div> <!-- end navigation -->
     </div>
<?php } elseif (is_search()) { ?>
<div class="section-header">
		<div class="row">
			<div class="large-12 columns">
				<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="Search" /></form>
	</div></div></div>
<?php } elseif (is_singular('product')) { ?>
	<div class="section-header">
		<div class="row">
			<div class="large-12 columns">
				<?php get_template_part('/inc/title'); ?>
				<?php get_template_part('/inc/productcrumbs'); ?>
	</div></div></div>
<?php } elseif (is_single() && !has_post_format( 'gallery' )) { ?>
	<div class="section-header">
		<div class="row">
			<div class="large-12 columns">
				<?php get_template_part('/inc/breadcrumbs'); ?>
	</div></div></div>
<?php } elseif (!is_archive('product') && is_archive()) { ?>
		<div class="section-header">
			<div class="row">
				<div class="large-12 columns"> 
					<?php get_template_part('/inc/title');?>
					<?php get_template_part('/inc/breadcrumbs');?>
				</div>
			</div>
		</div>
<?php } elseif (is_archive('post')) { ?>
		<div class="section-header">
			<div class="row">
				<div class="large-12 columns"> 
					<?php get_template_part('/inc/title');?>
					<?php get_template_part('/inc/breadcrumbs');?>
				</div>
			</div>
		</div>
<?php } elseif (is_archive('product')) { ?>
		<div class="section-header">
			<div class="row">
				<div class="large-12 columns"> 
					<?php get_template_part('/inc/title');?>
					<?php get_template_part('/inc/shopcrumbs');?>
				</div>
			</div>
		</div>
<?php } elseif (!is_page_template('page-dark-centered.php') && !is_page_template('page-enter.php') && !is_page_template('page-about.php') && !has_post_format( 'gallery' )) { ?>
		<div class="section-header">
			<div class="row">
				<div class="large-12 columns"> 
					<?php get_template_part('/inc/title');?>
					<?php get_template_part('/inc/breadcrumbs');?>
				</div>
			</div>
		</div>
<?php } ?>
<!--            <div class="clear mobi-no"></div><a href="#feed" class="wrapper mobi smoothie text-center"><i class="icon-circledown"></i></a>
-->
