<!-- <div class="wrapper dk page"><div class="section-header"><div class="row"><div class="large-12 columns">
      <?php if ( is_category() ) { ?>
        <ul class="breadcrumbs catlist">
        <?php $catsy = get_the_category();
        $myCat = $catsy->cat_ID;
        $currentcategory = '&current_category='.$myCat; ?>
        <?php wp_list_categories( 'show_option_all=&orderby=count&show_count=0&hierarchical=0&title_li=&show_option_none=&depth=1&pad_counts=1&taxonomy=category'.$currentcategory ); ?> 
        </ul>
      <?php } elseif (!is_home() || !is_search() || !is_singular('product')) { ?>
              <div class="breadcrumbs"><?php if(function_exists('bcn_display')) { bcn_display(); }?></div>
      <?php } ?>
 </div></div></div></div> -->



<!-- <div class="row links">
      <ul class="columns large-3 small-6">
        <lh>Unscene Us</lh>
        <li><a href="./portfolio">Web Design</a></li>
        <li><a href="./portfolio">Graphics</a></li>
        <li><a href="./shop">Marketplace</a></li></ul>
      <ul class="columns large-3 small-6">
        <lh>About us</lh>
        <li><a href="./the-brands">Our Services</a></li>
        <li><a href="./brand">Branding</a></li> 
        <li><a href="./partners">Partners</a></li>
        <li><a href="./press">Press</a></li></ul>
      <ul class="columns large-3 small-6">
        <lh>Support</lh>
        <li><a href="./forums">Forums</a></li>
        <li><a href="./search">Search</a></li>
        <li><a href="/for-business/contact">Contact Us</a></li></ul>
      <ul class="columns large-3 small-6">
        <lh>Visit My Friends</lh>
        <li><a target="_blank" href="http://bonoboville.com">Bonoboville Social</a></li>
        <li><a target="_blank" href="http://trustdco.com">Trustd Collective</a></li></ul>
    </div> -->
 
<!--contact content-->
<div class="wrapper dk" id="contact">
 <div class="section-header bl">
    <div class="row"> <div class="large-12 columns">
        <h2>Take the Leap</h2>
    </div></div></div>
    <div class="row">
      <div class="large-9 columns large-centered"><?php echo do_shortcode('[contact-form-7 id="27" title="Contact form 1"]') ?></div>
      <!-- <div class="large-4 columns">
        <h3>Contact Details</h3>
        <h2 class="subheader">Buy me Coffee <i class="icon-coffee r"></i></h2>
        <p>No but really — if you want to be taken seriously as a client, you have to take my coffee drinking habit seriously too. Because if I could put in the extra hours of work with cups of coffee now, then you can expect more cups of coffee later.</p>
        <p>Hate waiting? Get in touch with me at <a href="mailto:abe@unscene.us">abe@unscene.us</a> or call/text 626.261. juan ceben too four</p>
    </div> -->
    <div class="clear"></div>
</div>
</div>  

<div id="footer">
    <div class="row">
    <div class="columns large-12">
 <p class="alignleft"><a href="#" id="open-left">Contact!</a></p> <p class="alignright">Startup by Abraham Perez in Los Angeles &copy; 2014. All rights reserved.</p>    </div>
</div>
  </div>
</div><!--end page-container-->


<div class="snap-drawers">
   <div class="snap-drawer snap-drawer-left">
      <div id="close-l" style="cursor:pointer; z-index:9; background: none repeat scroll 0 0 #636363; bottom: 0; font-family: lato; font-size: 16px; line-height: 24px; padding: 10px; position: fixed; width: 100%;"> Close >> </div>
      <ul><?php dynamic_sidebar( 'Leftbar' ); ?></ul>
   </div>
   <div class="snap-drawer snap-drawer-right">
            <div id="close-r" style="cursor:pointer; z-index:9; background: none repeat scroll 0 0 #636363; bottom: 0; font-family: lato; font-size: 16px; line-height: 24px; padding: 10px; position: fixed; width: 100%;"> Close >> </div>
            <div id="selfie"><a href="/"><img src="http://placehold.it/120"></a></div>
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
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/demo.js"></script>
<?php wp_footer(); ?>
</body>
</html>
