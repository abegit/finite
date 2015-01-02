<!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <?php get_template_part('/un-ios');?>
    <link rel="shortcut icon" href="/favicon.ico" >
    <link rel="icon" href="/animated_favicon.gif" type="image/gif" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css" rel="stylesheet">
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>-->
    <script src="<?php bloginfo('template_directory'); ?>/js/jq.js"></script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

    <!--icomoon-->
    <link href="<?php bloginfo('template_directory'); ?>/css/ico.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/animate.css" rel="stylesheet">


    <!--scroll to-->
    <script src="<?php bloginfo('template_directory'); ?>/js/easing.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollTo.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.nav.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css?=v2">
     <style>
    #logo {background-image:url('<?php header_image(); ?>') !important;}
    </style>
<!--Google Analytics-->
<meta name="google-site-verification" content="3C5HGnbFsnL5Asr2pr3GVBmIrIjtawd8cXJ6aMwVNlg" />
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
html {margin-top: 0 !important; }

</style>

<script type="text/javascript">
var $jfs = jQuery.noConflict();
$jfs(document).ready(function(){
  $jfs('body').scrollTop(1);
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

<body id='blog' <?php body_class( "home woocommerce" ); ?>>
 <!--header wrapper-->
<?php if ( is_home() ) { ?> 
        <section id="header" class="wrapper page dk" data-type="background" data-speed="2">
<?php } elseif (is_page_template('page-enter.php')) { ?> 
        <section id="header" class="wrapper home" data-type="background" data-speed="2">
<?php } elseif (is_category()) { ?>
        <section id="header" class="wrapper page category dk" data-type="background" data-speed="2">
<?php } elseif (is_search()) { ?> 
            <section id="header" class="wrapper page dk" data-type="background" data-speed="2">
<?php } elseif (is_category()) { ?> 
            <section id="header" class="wrapper page dk" data-type="background" data-speed="2">
<?php } elseif (is_singular('product')) { ?>
            <section id="header" class="wrapper product" data-type="background" data-speed="2">
 <?php } elseif (is_single()) { ?>
        <?php if (has_post_thumbnail( $post->ID ) ) { ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <section id="header" class="wrapper image dk single" style="background-image: url('<?php echo $image[0]; ?>')"  data-type="background" data-speed="2">
        <?php } else { ?>
            <section id="header" class="wrapper single dk" data-type="background" data-speed="2">
        <?php } ?>
 <?php } elseif (is_archive('product') ) { ?>
          <section id="header" class="wrapper page dk" data-type="background" data-speed="2">        
    <?php } else { ?> <section id="header" class="wrapper page dk" data-type="background" data-speed="2">
<?php } ?>





<!--header-->
<div id="headerfix">
<div class="row">
  <div class="columns">
      <a href="/" id="logo"></a>
      <a href="#" id="open-left" style="display: inline-block; float: left; height: 40px; line-height: 40px; margin-bottom: 10px !important; margin-left: 10px; margin-right: 10px; margin-top: 10px !important; position: relative; text-align: center; color:#8a8a8a; vertical-align: middle; width: 30px;"><i class="icon-layers icon-sm"></i></a>
      <a href="#" id="menu" class="ani"><i class="icon-menu icon-sm" id="open-right"></i><i class="icon-cross icon-sm" id="close-r"></i></a>
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'no-mobi lastbutnot anis' ) ); ?>
  </div><!--columns-->
</div><!--row-->
</div><!--header-->
</section><!--end headerfix-->





  <?php get_template_part('/inc/snapdrawers'); ?>
  
  


   


<!-- page container -->
<div class="page-container snap-content" id="snapcontent">
  <?php if ( is_front_page() && is_archive('product')) {
            // cond1 - fire if product archive AND frontpage
        $paged = $wp_query->get( 'paged' );
              if ( ! $paged || $paged < 2 ) {  
                  // cond1 inner if homepage basicically
                slippy_slider_init('Homepage','widget', '1024px','300px'); ?>
            <?php } // close inner ?>
<?php } elseif (is_category()) { ?>
          <div class="wrapper dk page"><div class="section-header">
            <div class="row">
              <div class="large-12 large-centered columns"> <?php get_template_part('/inc/catcrumbs');?> </div>
            </div>
          </div></div>
      <?php } elseif (is_archive('product')) { ?>
          <div class="wrapper dk page"><div class="section-header">
            <div class="row">
              <div class="large-12 large-centered columns"> <?php get_template_part('/inc/shopcrumbs');?> </div>
            </div>
          </div></div>
      <?php } elseif (!is_singular('product')) { ?>
        <div class="wrapper dk page"><div class="section-header">
            <div class="row">
              <div class="large-12 large-centered columns"> <?php get_template_part('/inc/breadcrumbs');?> </div>
            </div>
          </div></div>
       <?php } else { ?>
        <div class="wrapper dk page"><div class="section-header">
          <div class="row">
            <div class="large-12 large-centered columns"> <?php get_template_part('/inc/breadcrumbs');?> </div>
          </div>
        </div></div>
       <?php }?>

           <?php if (!is_singular('product') && !is_page_template('page-enter.php') && !is_archive() && !is_home()) { ?>
                <?php if (has_post_thumbnail( $post->ID ) ) { ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <img src="<?php echo $image[0]; ?>" class="scrollme mobi"><?php } ?>
           <?php } ?>
           
           <?php if (is_home()) { ?> <div class="clear mobi"></div><a href="#feed" class="wrapper mobi smoothie text-center"><i class="icon-circledown"></i></a><?php } ?>


            <!-- navigation bar -->