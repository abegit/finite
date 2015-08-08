<?php 
/*
Template Name: Site Search Template
*/

get_header(); ?>





<?php get_header(); ?>

<!-- body content -->
<div id="blog <?php $post->ID; ?>" class="wrapper lt">
   
        

        <div class="section-header bl">
            <div class="row"> <div class="large-12 columns text-center">
        </div></div></div>

     <div class="row">    


            
                                        <?php echo do_shortcode('[page_wpmu_search]'); ?>

                </div>


                <div class="large-4 columns sidebar">
            <ul> <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Sidebar') ) : ?> <?php endif; ?> </ul>
        </div>


        


        </div> <!-- end row -->

        <div id="blog <?php $post->ID; ?>" class="wrapper lt">
   <object type="application/x-shockwave-flash" style="outline:none;" data="<?php bloginfo('template_directory'); ?>/fish.swf?up_fishName=Fish&up_backgroundColor=000000&up_backgroundImage=bg-nt.gif&up_backgroundRepeat=repeat&up_foodColor=FFAC12&up_fishColor=ffffff&up_numFish=20&up_fishColor1=ffffff&up_fishColor2=333333&up_fishColor3=333333&up_fishColor4=333333&up_fishColor5=333333&up_fishColor6=333333&up_fishColor7=333333&up_fishColor8=333333&up_fishColor9=333333&up_fishColor10=333333" width="100%" height="593"><param name="movie" value="fish.swf?up_fishName=Fish&up_backgroundColor=000000&up_backgroundImage=bg-nt.gif&up_backgroundRepeat=repeat&up_foodColor=FFAC12&up_fishColor=ffffff&up_numFish=20&up_fishColor1=ffffff&up_fishColor2=333333&up_fishColor3=333333&up_fishColor4=333333&up_fishColor5=333333&up_fishColor6=333333&up_fishColor7=333333&up_fishColor8=333333&up_fishColor9=333333&up_fishColor10=333333"></param><param name="AllowScriptAccess" value="always"></param><param name="wmode" value="opaque"></param><param name="scale" value="noscale"/><param name="salign" value="tl"/></object>
        

        <div class="section-header bl">
            <div class="row"> <div class="large-12 columns text-center">
        </div></div></div>


        <div class="clear"></div>
    </div>

        <div class="clear"></div>
    </div>




<?php get_footer(); ?>
