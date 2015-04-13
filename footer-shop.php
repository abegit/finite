<?php if ( !is_front_page() && !is_home() && is_category() ) { ?>
<!-- breadcrumbs -->
<div class="wrapper dk page"><div class="section-header"><div class="row"><div class="large-12 columns">  
<?php get_template_part('/inc/breadcrumbs');?>
<!-- end breadcrumbs -->
 </div></div></div></div>
      <?php } elseif (!is_front_page() && !is_home() && !is_search() && !is_singular('product')) { ?>
<div class="wrapper dk page"><div class="section-header"><div class="row"><div class="large-12 columns">  
              <div class="breadcrumbs"><?php if(function_exists('bcn_display')) { bcn_display(); }?></div>
      <!-- end breadcrumbs -->
 </div></div></div></div>
      <?php } ?>
      
<section class="wrapper footer">
	<!-- <div class="section-header gr">
    <div class="row"> <div class="large-12 columns">
        <h4 class="subheader alignleft">Going to be releasing new tees soon, follow my newsletter to cut in line early! </h4 class="subheader">
        <a href="http://unscene.us/shop" class="btn alignright"><i class="icon-leaf"></i>Support the Artist!</a>
    </div></div></div> -->
	<div id="footer">
    <div class="row">
    <div class="columns large-12">
 <p class="alignleft"><a href="#" id="open-left">Contact!</a></p> <p class="alignright">Startup made in Costa Mesa, CA &copy; 2014. All rights reserved.</p>    </div>
</div>
  </div>
</section>
</div>
    <!--end page-container-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/snap.js"></script>
<script type="text/javascript">
var snapper = new Snap({
    element: document.getElementById('snapcontent'),
    dragger: document.getElementById('headerfix')
});

document.addEventListener("touchstart", function(){}, true);

</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/demo.js"></script>
<?php wp_footer(); ?>
</body>
</html>
