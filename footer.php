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
      <?php } else if (!is_page('653')) { ?>
<div class="wrapper dk" id="contact">
 <div class="section-header bl">
    <div class="row"> <div class="large-12 columns">
        <h2>Get In Touch</h2>
    </div></div></div>
    <div class="row">
      
      <div class="large-4 columns">
        <h3>Contact Details</h3>
        <h2 class="subheader">Buy me Coffee <i class="icon-coffee r"></i></h2>
        <p>No but really — if you want to be taken seriously as a client, you have to take my coffee drinking habit seriously too. Because if I could put in the extra hours of work with cups of coffee now, then you can expect more cups of coffee later.</p>
        <p>Hate waiting? Get in touch with me at <a href="mailto:abe@unscene.us">abe@unscene.us</a> or call/text 626.261. juan ceben too four</p>
    </div>
    <div class="large-8 columns"><?php echo do_shortcode('[contact-form-7 id="4" title="Send Us Your Ideas"]'); ?></div>
    <div class="clear"></div>
</div>
</div>

<?php } ?>

<section class="wrapper footer" id="footer">
  <?php if (!is_user_logged_in()) { ?>
	<div class="section-header gr">
    <div class="row"> <div class="large-12 columns">
        <h4 class="subheader alignleft">Going to be releasing new tees soon, follow my newsletter to cut in line early! </h4 class="subheader">
        <a href="<?php echo wp_registration_url(); ?>" class="btn alignright"><i class="icon-leaf"></i>Support the Artist!</a>
    </div></div></div>
    <?php } ?>
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
      <ul> <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Leftbar') ) : ?>
    
    <?php endif; ?></ul>
   </div>
   <div class="snap-drawer snap-drawer-right">
            <div id="close-r" style="cursor:pointer; z-index:9; background: none repeat scroll 0 0 #636363; bottom: 0; font-family: lato; font-size: 16px; line-height: 24px; padding: 10px; position: fixed; width: 100%;"> Close >> </div>
            <div id="selfie"><a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/abe-avatar.jpg"></a></div>
            <ul> <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Rightbar') ) : ?>
    
    <?php endif; ?></ul>
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
<?php if (is_archive('post')) { ?>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/isotope.js?ver=2"></script>
    <script>
$hashFix = jQuery.noConflict();
(function ($hashFix) {
  var $container = $hashFix('#post-loop'),
  colWidth = function () {
    var w = $container.width(), 
    columnNum = 1,
    columnWidth = 0;
    if (w > 900) {
          columnNum  = 3;
    }
    else if (w > 600) {
          columnNum  = 2;
    }
    else if (w > 300) {
          columnNum  = 1;
    }
    columnWidth = Math.floor(w/columnNum);
    $container.find('.post').each(function() {
      var $item = $hashFix(this),
      multiplier_w = $item.attr('class').match(/item-w(\d)/),
      multiplier_h = $item.attr('class').match(/item-h(\d)/),
      width = multiplier_w ? columnWidth*multiplier_w[1]-10 : columnWidth-10,
      height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-40 : columnWidth*0.5-40;
      $item.css({
        width: width,
          //height: height
        });
    });
    return columnWidth;
  },
  isotope = function () {
    $container.imagesLoaded( function(){
      $container.isotope({
        resizable: false,
        itemSelector: '.post',
        masonry: {
          columnWidth: colWidth(),
          gutterWidth: 20
        }
      });
    });
  };

  isotope();
  
  $hashFix(window).smartresize(isotope);
}(jQuery));

</script>
<?php } ?>
<script>
  var $jj = jQuery.noConflict();
$jj(document).ready(function(){
    $jj('.smoothie[href^="#"]').on('click',function (e) {
      e.preventDefault();
      var target = this.hash,
      $jjtarget = $jj(target);
      $jj('#snapcontent').stop().animate({
          'scrollTop': $jjtarget.offset().top - 0
      }, 750, 'swing', function () {
      });
  });
  });
</script>
<?php wp_footer(); ?>
</body>
</html>
