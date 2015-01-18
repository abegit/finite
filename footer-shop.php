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
      <ul class="columns large-9 small-12"><?php dynamic_sidebar( 'Footer' ); ?></ul>
        <ul class="columns large-3 small-12">
        <lh></lh>
        <li><p>Startup made in Costa Mesa, CA &copy; 2014. All rights reserved.</p>

        <?php $user_role = get_queried_object()->roles;

if( in_array( strtolower('Shop Manager'), $user_role ) ) {
    echo 'one';
}elseif( in_array( strtolower('Customer'), $user_role ) ) { 
    echo 'two';
}
 ?> </li></ul>
    </div>
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
                    $('section[data-type="elements"] .products').css( 'top' , coords );
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
<?php wp_footer(); ?>
</body>
</html>
