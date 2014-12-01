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
	<div id="footer">
<div class="row links">
      <ul class="columns large-3 small-6">
        <lh>Create</lh>
        <li><a href="/product/pullover">Pullover</a></li>
        <li><a href="/product/pullover">Shirt</a></li> 
        <li><a href="/product/pullover">Socks</a></li>
        <li><a href="/product/pullover">Tanks</a></li></ul>
        <ul class="columns large-3 small-6">
        <lh>About</lh>
        <li><a href="/about">About Us</a></li>
        <li><a href="/about/faq">FAQ</a></li>
        <li><a href="/about/privacy-policy">Privacy Policy</a></li>
        <li><a href="/contact-us">Contact</a></li></ul>
      <ul class="columns large-3 small-6">
        <lh>Connect With Us</lh>
        <li><a target="_blank" href="http://bonoboville.com">Bonoboville Social</a></li>
        <li><a target="_blank" href="http://trustdco.com">Trustd Collective</a></li></ul>
        <ul class="columns large-3 small-6">
        <lh></lh>
        <li><p>Startup made in Costa Mesa, CA &copy; 2014. All rights reserved.</p> </li></ul>
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
