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
  <div class="section-header gr">
    <div class="row"> <div class="large-12 columns">
        <h4 class="subheader alignleft">Want to get ahead of the game? Get in my newsletter. Find out about the Latest Garment Sales!</h4 class="subheader">
        <a href="/register" class="btn alignright"><i class="icon-leaf"></i>Sign up for free!</a>
    </div></div></div>
  <div id="footer">
<div class="row links">
      <ul class="columns large-9 small-12">
         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Only Footer') ) : ?> <?php endif; ?> 
       </ul>
        <ul class="columns large-3 small-12">
        <lh></lh>
        <li><a href="/" id="logo" style="height:40px; width:160px; display: block; background-size:contain;"></a><p>Startup made in <a href="#close" class="btn-tip" title="Special Thanks!" data-text="to our team for working day in and day out.">Costa Mesa</a>, CA &copy; 2015. All rights reserved.</p>

        <?php if (current_user_can('shop_manager')) {
        // redirect them to the default place
       echo '<a href="' . home_url() . '/wp-admin">Backend</a>';
      } ?>
      
        <?php if (is_user_logged_in()){
              global $current_user;
            echo '<a class="btn-tip" title="Logout @'.$current_user->user_login.'?" data-text="Continue to Log out of your account." href="'.wp_logout_url( get_permalink() ).'" title="Logout">Logout</a>';
            } ?> </li></ul>
    </div>
  </div>
</section>
<section class="wrapper footer" id="footer">
	<?php if (!is_user_logged_in()) { ?>
  <div class="section-header gr">
    <div class="row"> <div class="large-12 columns">
        <h4 class="subheader alignleft">Going to be releasing new tees soon, follow my newsletter to cut in line early! </h4 class="subheader">
        <a href="<?php echo wp_registration_url(); ?>" class="btn alignright"><i class="icon-leaf"></i>Support the Artist!</a>
    </div></div></div>
    <?php } ?>
    


<?php if (!is_page('653') && is_page_template('page-enter')) { ?>
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

    

    <div class="row">
    <div class="columns large-12">
 <p class="alignleft"><a href="#" id="open-left">Contact Us</a></p> <p class="alignright"><?php echo get_bloginfo( 'description' ); ?> &copy; 2015. All rights reserved.</p>    </div>
</div>

</section>
</div>
    <!--end page-container-->

    <script>
var $onlyDesktop = jQuery.noConflict();

$onlyDesktop(window).load(function() {
        var w = $(window).width();

        if(w>400) {
            $onlyDesktop('section[data-type="elements"]').each(function(){
                var $bgobj = $onlyDesktop(this); // assigning the object
                var $window = $onlyDesktop('#snapcontent');

                $onlyDesktop('#snapcontent').scroll(function() {
                  var yPos = -($window.scrollTop() / $bgobj.data('speed'));

                    // Put together our final background position
                    // var round = '50% '+ yPos;
                    var coords = yPos + 'px';

                    // Move the background
                    // $('section[data-type="elements"] .products').css( 'top' , coords );
                });
          });
        }
        else { }
    });

</script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/snap.js"></script>
<script type="text/javascript">
var snapper = new Snap({
    element: document.getElementById('snapcontent'),
    dragger: document.getElementById('headerfix')
});

document.addEventListener("touchstart", function(){}, true);

</script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/demo.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/popRocks.js"></script>
<?php if (is_archive('post') || is_home() || is_search() ) { ?>
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
