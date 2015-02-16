<?php 
/*
Template Name: Dark Left
*/

get_header(); ?>
     
     
<div id="dark_left" class="wrapper dk ani">
  
       
  
	     <div class="row">    



                <div class="large-8 columns">
                	 <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
                    <?php the_content(); ?>
                    <?php endwhile; ?>
    <?php endif; ?>
                    
                </div>


                <div class="large-4 columns">
	            	<?php echo do_shortcode('[easy_sign_up title="Need This Installed?" fnln="0" phone="0" esu_label="On iTunes Download Page" esu_class="itunes" esu_r_url="unscene.us/contact"]') ?>
                	<h3>Changelog</h3>
					<?php $specialPosts = new WP_Query();
					$specialPosts->query('tag=itunes-podcast-creator&showposts=4'); ?>
					
					<?php if ($specialPosts->have_posts()) : while($specialPosts->have_posts()) : $specialPosts->the_post(); ?>

					    <div class="large-6 columns">
					    
					    	
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) { ?>

				                    <?php the_post_thumbnail('thumbnail'); ?>
				                    				   
				                <?php } else { ?>

				                    <img src="http://placehold.it/150">
				                    				   
				                <?php } ?>

					    		<div class="caption">
						    		<div class="cat"><span><?php $category = get_the_category(); echo $category[0]->cat_name; ?></span></div>
						    		<div class="date"><i class="fa fa-clock-o"></i> <?php the_time('j M , Y') ?> &nbsp;
					    		</div>
						    		
						    		<h2 class="title"><?php the_title(); ?></h2>
						    		
					    		</div>

				                
						    	
						    </a>
						
						</div>
					
					<?php endwhile; ?>
					<?php endif; ?>	

                </div> <!-- end colums -->


        


        </div> <!-- end row -->


          </div> <!-- end dark_centered -->




<?php get_footer(); ?>
