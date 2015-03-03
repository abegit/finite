
		<?php if (is_page_template('page-dark-left.php')) { ?>
			    	<div class="section-header">
			              <div class="row" style="height: 200px; padding: 50px 0;">
				            <div class="large-12 columns">
							<?php if (has_post_thumbnail( $post->ID ) ) { ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
								<img src="<?php echo $image[0]; ?>" width="95" style="height:auto; amrgin:0 !important; float:left; vertical-align:middle;"><?php } ?>
				            	<?php get_template_part('/inc/title');?>
				            	<div style="color:#999"><a href="http://unscene.us/tag/wordpress">Wordpress Plugins</a></div>
				            </div>
				            <div class="columns large-3 small-12 title_info">
				            	<p>The Goods!</p>
				            	<a class="btn" href="http://unscene.us/download/itunes-podcast-creator.zip">Download</a>
				            	<?php echo do_shortcode('[paypal-donation purpose="To continue working on Podcast Creator" reference="AbePlugins"]') ?>
				            	</div>
			              </div>
			        </div>
		    <?php } elseif (is_singular('product')) { ?>
		            <div class="section-header">
		            <div class="row">
		            <div class="large-12 columns">
		            <?php get_template_part('/inc/title'); ?>
		            <?php get_template_part('/inc/productcrumbs'); ?>
		            </div></div></div>
      		<?php } elseif (is_single()) { ?>
		            <div class="section-header">
		            <div class="row">
		            <div class="large-12 columns">
		            <?php get_template_part('/inc/breadcrumbs'); ?>
		            </div></div></div>
      		<?php } elseif (!is_page_template('page-dark-centered.php') && !is_page_template('page-enter.php')) { ?>
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
