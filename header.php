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

    <!--font-awesome-->
    <link href="<?php bloginfo('template_directory'); ?>/css/whhg.css" rel="stylesheet">

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
  $jfs('body').scrollTop(1);
});  
</script>

<script>
var $onlyDesktop = jQuery.noConflict();

$onlyDesktop(window).load(function() {
        var w = $(window).width();

        if(w>400) {
            $onlyDesktop('section[data-type="background"]').each(function(){
                var $bgobj = $onlyDesktop(this); // assigning the object
                var $window = $onlyDesktop('#snapcontent');

                $onlyDesktop('#snapcontent').scroll(function() {
                  var yPos = -($window.scrollTop() / $bgobj.data('speed'));

                    // Put together our final background position
                    var round = '50% '+ yPos;
                    var coords = round + 'px';

                    // Move the background
                    $bgobj.css({ backgroundPosition: coords });
                });
          });
        }
        else { }
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
    <script type="text/javascript">
    var $dd = jQuery.noConflict();

        $dd(document).ready(function() {
            createDropDown();
            

            $dd(".selectwrap .dropdown dt a").click(function() {
                //inside select wrapper only toggle ul inside wrapper
                $dd(this).closest('.selectwrap').find("dd ul").toggle();
            });

            $dd(document).bind('click', function(e) {
                var $ddclicked = $dd(e.target);
                //if you click and the parent does not have dropdown then hide dropdowns
                if (! $ddclicked.parents().hasClass("dropdown"))
                    $dd(".dropdown dd ul").hide();
            });
                        
            $dd(".dropdown dd ul li a").click(function() {
                var text = $dd(this).html();
                var selfie = $dd(this).closest(".dropdown").attr('class').split(' ')[1];

                $dd('.dropdown.' + selfie + ' dt a').html(text);
                $dd('.dropdown.' + selfie + ' dd ul').hide();
                
                var source = $dd('select#' + selfie);
                source.val($dd(this).find("span.value").html())
            });


        });
        
function createDropDown(){
    $dd("select").each(function() {
        var source = $dd(this);
        var selected = source.find("option[selected]");
        var options = $dd("option", source);
        var self = $dd(this).attr('id');
        $dd(this).wrap( '<div class="selectwrap ' + self + '"></div>')
        $dd(this).after('<dl class="dropdown ' + self + '"></dl>')

        $dd('.dropdown.' + self).append('<dt><a href="#">' + selected.text() + 
            '<i class="icon-chevron-down right"></i><span class="value">' + selected.val() + 
            '</span></a></dt>')
        $dd('.dropdown.' + self).append('<dd><ul></ul></dd>')

        options.each(function(){
            $dd('.dropdown.' + self + ' dd ul').append('<li><a href="#">' + 
                $dd(this).text() + '<span class="value">' + 
                $dd(this).val() + '</span></a></li>');
        });
    });


}
    </script>

</head>

<body
<?php global $blog_id;  if ( is_home() ) {echo "id='blog" . $blog_id . "'" ?> <?php body_class( 'home' ); }
  elseif ( is_single()) { echo "id='blog" . $blog_id . "'" ?> " <?php body_class( 'home' ); }
  else { echo 'id="blog' . $blog_id . "'" ?> " <?php body_class( 'home woocommerce' ); ?> <?php } ?> >

 <!-- header wrapper-->
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
      <a href="#" id="logo"></a>
      <a href="#" id="menu" class="ani"><i class="icon-menu" id="open-right"></i><i class="icon-circledelete" id="close-r"></i></a>
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'no-mobi lastbutnot anis' ) ); ?>
  </div><!--columns-->
</div><!--row-->
</div><!--header-->
</section><!--end headerfix-->





    <?php get_template_part('/inc/snapdrawers'); ?>

  


   


<!-- page container -->
  <div class="page-container snap-content" id="snapcontent">
  <?php 
    if ( is_archive('product') && is_front_page()) { 
        $paged = $wp_query->get( 'paged' );
        if ( ! $paged || $paged < 2 ) {  
            slippy_slider_init('Homepage','widget', '1024px','300px'); ?>
  <?php } ?>
        <div class="wrapper dk page"><div class="section-header">
            <div class="row">
            <div class="large-12 large-centered columns">
              <?php get_template_part('/inc/shopcrumbs');?>
              </div>
              </div>
            </div></div>
<?php } elseif (is_singular('product')) { ?>
            
      <?php  // end if first page
          } else { ?>
        
       <?php } ?>

           <?php if (!is_singular('product') && !is_page_template('page-enter.php') && !is_archive() && !is_home()) { ?>
                <?php if (has_post_thumbnail( $post->ID ) ) { ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <img src="<?php echo $image[0]; ?>" class="scrollme mobi"><?php } ?>
           <?php } ?>
           
           <?php if (is_home()) { ?> <div class="clear mobi"></div><a href="#feed" class="wrapper mobi smoothie text-center"><i class="icon-circledown"></i></a><?php } ?>


            <!-- navigation bar -->