<?php 
/*
Template Name: Dark Centered
*/

get_header(); ?>
     
     
<div id="dark_centered" class="wrapper dk ani woocommerce">
 	<div class="feature" style="display:none; position:absolute; top:0; right;0; width:auto; text-align:center;"><?php echo adrotate_group(1); ?></div>
   <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
       
  <div class="row anis">
                <div class="large-8 large-centered columns">
                   <h1 class="subheader text-center"><?php the_title(); ?></h1>
<?php the_content(); ?>
</div>
<?php endwhile; ?> <?php endif; ?>
       

        <div class="clear"></div>
</div>        </div> <!-- end dark_centered -->


<script type="text/javascript">
var $jfeat = jQuery.noConflict();
$jfeat(document).ready(function(){
  $jfeat('.feature').addClass('loaded').delay( 3000 ).fadeIn(8000);
});  
</script>

<?php get_footer(); ?>
