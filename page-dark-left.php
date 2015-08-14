<?php 
/*
Template Name: Dark Left
*/

get_header(); ?>
<div id="dark_left" class="wrapper dk ani">
	     <div class="row">    
                <div class="large-8 columns">
                	<div class="large-12 columns"><p>Last Modified: <span dateModified ><?php the_modified_date(); ?></span></p></div>
                	 <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
                    <?php the_content(); ?>
                    <?php get_template_part('inc/authorbox'); ?>
                    <?php endwhile; ?>
    				<?php endif; ?>
                </div>
                <div class="large-4 columns sidebar">
					<ul>
	            	<li class="widget"><?php echo do_shortcode('[easy_sign_up title="Want Professional Help?" fnln="0" phone="0" esu_label="On iTunes Download Page" esu_class="'.get_the_title().'" esu_r_url="unscene.us/thanks"]') ?></li>                	
                	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Sidebar') ) : ?><?php endif; ?>
                	<li class="widget changelog"><h3>Changelog</h3>
					<?php $specialPosts = new WP_Query();
					$specialPosts->query('tag='.get_the_title().'&showposts=4'); ?>					
					<?php if ($specialPosts->have_posts()) : while($specialPosts->have_posts()) : $specialPosts->the_post(); ?>
					    <div class="large-6 columns">
					    	<?php if (has_post_thumbnail() ) {
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
								} else { 
									$image = 'http://unscene.us/wp-content/themes/finite/images/cubed-header.gif';
								} ?>
							<a href="<?php the_permalink(); ?>" style="background-image:url('<?php echo $image; ?>')">
					    		<div class="caption">
						    		<div class="cat"><span><?php $category = get_the_category(); echo $category[0]->cat_name; ?></span></div>
						    		<div class="date"><i class="fa fa-clock-o"></i> <?php the_time('j M , Y') ?> &nbsp;
					    		</div>
						    		<h2 class="title"><?php the_title(); ?></h2>
					    		</div>
						    </a>
						</div>
					<?php endwhile; ?>
						</li>
					<?php endif; ?>	
					</ul> 
                </div> <!-- end colums -->


        </div> <!-- end row -->


          </div> <!-- end dark_centered -->




<?php get_footer(); ?>
