<?php if ( !is_front_page() && !is_home() && is_category() ) { ?>
<!-- breadcrumbs -->
<div class="wrapper dk page"><div class="section-header"><div class="row"><div class="large-12 columns">  
<?php get_template_part('/inc/breadcrumbs');?>
<!-- end breadcrumbs -->
 </div></div></div></div>
      <?php } elseif (!is_front_page() && !is_home() && !is_search() && !is_singular('product') && !is_page_template('page-dark-centered.php')) { ?>
<div class="wrapper dk page"><div class="section-header"><div class="row"><div class="large-12 columns">  
              <div class="breadcrumbs"><?php if(function_exists('bcn_display')) { bcn_display(); }?></div>
      <!-- end breadcrumbs -->
 </div></div></div></div>
      <?php } ?>

<section class="wrapper footer" id="footer">
	<!-- <div class="section-header gr">
    <div class="row"> <div class="large-12 columns">
        <h4 class="subheader alignleft">Going to be releasing new tees soon, follow my newsletter to cut in line early! </h4 class="subheader">
        <a href="http://unscene.us/shop" class="btn alignright"><i class="icon-leaf"></i>Support the Artist!</a>
    </div></div></div> -->
    

    <div class="row links">
      <?php dynamic_sidebar('only-footer'); ?>
    </div>

    <div class="row">
    <div class="columns large-12">
 <p class="alignleft"><a href="#" id="open-left">Contact Us</a></p> <p class="alignright"><?php echo get_bloginfo( 'description' ); ?> &copy; 2015. All rights reserved.</p>    </div>
</div>

</section>
</div>
    <!--end page-container-->
<div class="snap-drawers">
   <div class="snap-drawer snap-drawer-left">
      <div id="close-l" style="cursor:pointer; z-index:9; background: none repeat scroll 0 0 #636363; bottom: 0; font-family: lato; font-size: 16px; line-height: 24px; padding: 10px; position: fixed; width: 100%;"> Close >> </div>
      <ul><?php dynamic_sidebar( 'Leftbar' ); ?></ul>
   </div>
   <div class="snap-drawer snap-drawer-right">
            <div id="close-r" style="cursor:pointer; z-index:9; background: none repeat scroll 0 0 #636363; bottom: 0; font-family: lato; font-size: 16px; line-height: 24px; padding: 10px; position: fixed; width: 100%;"> Close >> </div>
            <div id="selfie"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/abe-avatar.jpg"></a></div>
            <ul><?php dynamic_sidebar( 'Rightbar' ); ?></ul>
   </div>
</div>


<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/snap.js"></script>
<script type="text/javascript">
var snapper = new Snap({
    element: document.getElementById('snapcontent'),
    dragger: document.getElementById('headerfix')
});

document.addEventListener("touchstart", function(){}, true);

</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/demo.js?ver=2"></script>
<?php wp_footer(); ?>
</body>
</html>
