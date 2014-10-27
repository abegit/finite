<!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <meta content='width=device-width; initial-scale=1.0;' name='viewport'>
    <link href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/topnavmenu.css?=v1">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

    <!--font-awesome-->
    <link href="<?php bloginfo('template_directory'); ?>/css/whhg.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/snap.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/demo.css">

    <!--scroll to-->
    <script src="<?php bloginfo('template_directory'); ?>/js/easing.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollTo.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.nav.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>





    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css?=v2.3">


<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28070375-1', 'unscene.us');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
<meta name="google-site-verification" content="OY-BXpM5ACDxpGSa7pqhvdMsHqIyprZui6HCuCeZBoU">




<?php wp_head(); ?>
<!--contact tab-->
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/fix.css?=v1">

<style type="text/css" media="screen">
.slide-out-div {
  padding: 20px;
  width: 250px;
  background: #f2f2f2;
  border: #29216d 2px solid;
  color: black;
  z-index: 999;
}
.panel {
  position: fixed;
  left: -15.625em; /*left or right and the width of your navigation panel*/
  width: 15.625em; /*should match the above value*/
}
.page-container { 
  position: relative; 
}
html {
  margin-top: 0 !important;
}


#resume {
  overflow: hidden;
  background: url(<?php bloginfo('template_directory'); ?>/images/who-is-unscene-graphic-designer-los-angeles.jpg) 50% 0 no-repeat fixed #eee;
  width: 100%;
  padding: 0;
}

#logo {
  -moz-animation-duration: 2s;
  -moz-animation-delay: 3s;
  -webkit-animation-duration: 2s;
  -webkit-animation-delay: 3s;
  -ms-animation-duration: 2s;
  -ms-animation-delay: 3s;
  -0-animation-duration: 2s;
  -0-animation-delay: 3s;
}
#startEngin {
  -moz-animation-duration: 2s;
  -moz-animation-delay: 2s;
  -webkit-animation-duration: 2s;
  -webkit-animation-delay: 2s;
  -ms-animation-duration: 2s;
  -ms-animation-delay: 2s;
  -0-animation-duration: 2s;
  -0-animation-delay: 2s;
}
#weDo {
  -moz-animation-duration: 3s;
  -moz-animation-delay: 0;
  -webkit-animation-duration: 3s;
  -webkit-animation-delay: 0;
  -ms-animation-duration: 3s;
  -ms-animation-delay: 0;
  -0-animation-duration: 3s;
  -0-animation-delay: 0;
}
.lastbutnot {
  -moz-animation-duration: 3s;
  -moz-animation-delay: 4s;
  -webkit-animation-duration: 3s;
  -webkit-animation-delay: 4s;
  -ms-animation-duration: 3s;
  -ms-animation-delay: 4s;
  -0-animation-duration: 3s;
  -0-animation-delay: 4s;
}

</style>


<script type="text/javascript">
var $jfs = jQuery.noConflict();
$jfs(document).ready(function(){

  $jfs('section[data-type="background"]').each(function(){
        var $bgobj = $jfs(this); // assigning the object
        var $window = $jfs('#snapcontent');

        $jfs('#snapcontent').scroll(function() {
          var yPos = -($window.scrollTop() / $bgobj.data('speed'));

            // Put together our final background position
            var round = '50% '+ yPos;
            var coords = round + 'px';

            // Move the background
            $bgobj.css({ backgroundPosition: coords });
          });
      });   
  $jfs('#front').cycle({ 
    fx:    'fade', 
    speed:  4000,
    random: 1 
  });
});  
</script>


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



</head>

<body id="<?php if ( is_home() ) { echo 'home'; } else { global $blog_id; echo 'blog' . $blog_id . '" class="post' . get_the_ID(); } ?>">

  <div class="snap-drawers">
    <div class="snap-drawer snap-drawer-left">
      <div id="headerfix"></div>
      <?php dynamic_sidebar( 'leftbar' ); ?>
      <?php wp_nav_menu( array( 'theme_location' => 'left-menu', 'container_class' => '' ) ); ?>
    </div>

  


  <div class="page-container snap-content" id="snapcontent">


    <!-- topwrap-->


    <!-- navigation bar -->


    

<?php if ( is_home() ) { ?> 
              <section id="header" class="wrapper sticktop" data-type="background" data-speed="2">
<?php } elseif (is_category()) { ?>
              <section id="header" class="wrapper page category dk" data-type="background" data-speed="2">
<?php } else { ?>
              <?php if (has_post_thumbnail( $post->ID ) ) { ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <section id="header" class="wrapper image dk" style="background-image: url('<?php echo $image[0]; ?>')"  data-type="background" data-speed="2">
              <?php } elseif (is_single()) { ?> 
                  <section id="header" class="wrapper single" data-type="background" data-speed="2">
              <?php } else { ?> 
                  <section id="header" class="wrapper page dk" data-type="background" data-speed="2">
              <?php } ?>
<?php } ?>


        <div id="headerfix"><!--header-->
          <div class="row snapdrag">
            <div class="columns">
                <a href="/" id="logo"></a>
                <a href="#" id="open-left" class="ani"><i class="icon-menu"></i></a>
              <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'no-mobi lastbutnot' ) ); ?>
            </div><!--nav-->
          </div><!--row-->
        </div><!--header-->



  <?php $paged = $wp_query->get( 'paged' );
  // if first page or single
        if ( ! $paged || $paged < 2 ) {
          if ( is_home()) { }
          elseif ( is_single() || is_page() ) { ?>
                    <div class="section-header">
                      <div class="row">
                      <div class="large-12 large-centered columns">
                      <h1 class="subheader">
                      <?php the_title(); ?>
                      </h1>
                      <div class="breadcrumbs">
                      <?php if(function_exists('bcn_display')) { bcn_display(); }?>
                      </div>
                      </div></div>
                      <?php if (has_post_thumbnail( $post->ID ) ) { ?>
                      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                      <img src="<?php echo $image[0]; ?>" class="scrollme mobi"><?php } ?>
                    </div>
          <?php } else { ?>
            <div class="section-header">
            <div class="row">
            <div class="large-12 large-centered columns">
            <h1 class="subheader">
            <?php if ( is_category() ) {  echo single_cat_title(); } elseif ( is_archive() ) {  echo the_title(); } ?>
            </h1>
            <ul class="breadcrumbs catlist">
  <?php 
    $catsy = get_the_category();
    $myCat = $catsy->cat_ID;
    $currentcategory = '&current_category='.$myCat;
  ?><?php wp_list_categories( 'show_option_all=&orderby=count&show_count=0&hierarchical=0&title_li=&show_option_none=&depth=1&pad_counts=1&taxonomy=category'.$currentcategory ); ?> 
            </ul>
            </div></div></div>
                  <?php  } 
             } else { ?>

             <div class="section-header">
            <div class="row">
            <div class="large-12 large-centered columns">
            <h1 class="subheader">
            <?php if ( is_category() ) {  echo single_cat_title(); } elseif ( is_archive() ) {  echo the_title(); } ?>
            </h1>
            <ul class="breadcrumbs catlist">
  <?php 
    $catsy = get_the_category();
    $myCat = $catsy->cat_ID;
    $currentcategory = '&current_category='.$myCat;
  ?><?php wp_list_categories( 'show_option_all=&orderby=count&show_count=0&hierarchical=0&title_li=&show_option_none=&depth=1&pad_counts=1&taxonomy=category'.$currentcategory ); ?> 
            </ul>
            </div></div></div>

             <?php } ?>



            </section><!--end headerfix-->
            <!-- navigation bar -->