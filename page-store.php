<?php 
/*
Template Name: Store
*/
get_header(); ?>

<!--<div id="topwrap">

    <div class="container">
    <img id="top" src="bg-ft.png" />
    
    </div>
<object type="application/x-shockwave-flash" style="outline:none;" data="<?php bloginfo('template_directory'); ?>/fish.swf?up_fishName=Fish&up_backgroundColor=000000&up_backgroundImage=bg-nt.gif&up_backgroundRepeat=repeat&up_foodColor=FFAC12&up_fishColor=ffffff&up_numFish=20&up_fishColor1=ffffff&up_fishColor2=333333&up_fishColor3=333333&up_fishColor4=333333&up_fishColor5=333333&up_fishColor6=333333&up_fishColor7=333333&up_fishColor8=333333&up_fishColor9=333333&up_fishColor10=333333" width="100%" height="593"><param name="movie" value="fish.swf?up_fishName=Fish&up_backgroundColor=000000&up_backgroundImage=bg-nt.gif&up_backgroundRepeat=repeat&up_foodColor=FFAC12&up_fishColor=ffffff&up_numFish=20&up_fishColor1=ffffff&up_fishColor2=333333&up_fishColor3=333333&up_fishColor4=333333&up_fishColor5=333333&up_fishColor6=333333&up_fishColor7=333333&up_fishColor8=333333&up_fishColor9=333333&up_fishColor10=333333"></param><param name="AllowScriptAccess" value="always"></param><param name="wmode" value="opaque"></param><param name="scale" value="noscale"/><param name="salign" value="tl"/></object>

</div>-->


<!------------------------------------navigation bar------------------------------>
<div class="page-container store">
<div id="headerfix">
<div id="headerscroll" class="sticktop"><!--header on scroll-->
<div class="container">
      <div id="hd">
          <div id="logo">
              <a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/store-logo.png" /><i class="icon-collapse"></i></a>
          </div><!--logo-->
          
        
        <ul id="nav">
            <li><a href="/store">Apps</a></li>
            <li class="current"><a href="/store/shopping-cart"><i class="icon-shopping-cart"></i></a></li>
        </ul><!--wrap-->
      </div><!--nav-->

    


</div><!--container-->
</div><!--header on scroll-->
</div><!--end headerfix-->
<!-----------------------------------navigation bar------------------------------>

<!----------------------------------------------------------body content----------------------------------------------->


<!-----------------------------------store content------------------------------>
<div id="store" class="wrapper lt">
    <div class="container">
		<div class="section-header crumb"><div> 
        	<h4>Shopping Cart</h4>
        </div></div>
       
  
        <?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>


        
        <div class="clear"></div>
    </div>
</div>
<!-----------------------------------end store content------------------------------>







<?php get_footer(); ?>
   