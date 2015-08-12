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
      <ul class="columns large-9 small-12"><?php dynamic_sidebar( 'Footer' ); ?></ul>
        <ul class="columns large-3 small-12">
        <lh></lh>
        <li><a href="/" id="logo" style="height:40px; width:160px; display: block; background-size:contain;"></a><p>Startup made in Costa Mesa, CA &copy; 2015. All rights reserved.</p>

        <?php if (current_user_can('shop_manager')) {
        // redirect them to the default place
       echo '<a href="' . home_url() . '/wp-admin">Backend</a>';
      } ?>
      
        <?php if (is_user_logged_in()){
              global $current_user;
            echo '<a class="btn-tip" title="Logout @'.$current_user->user_login.'?" data-text="Continue to Log out of your account." href="'.wp_logout_url( get_permalink() ).'" title="Logout">Logout</a>';
            } else {
            echo '<a class="btn-tip" title="Why Don\'t You Have an Account?" data-text="You need to have an account to make shirts with us." href="' . home_url() . '/register">Sign Up</a>';
        } ?> </li></ul>
    </div>
  </div>
</section>
<section class="wrapper footer" id="footer">
	
    

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
<?php wp_footer(); ?>
</body>
</html>
