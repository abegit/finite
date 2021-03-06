<!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/topnavmenu.css?=v1">
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>-->
    <script src="<?php bloginfo('template_directory'); ?>/js/jq.js"></script>

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
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">


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
  // $jfs('#front').cycle({ 
  //   fx:    'fade', 
  //   speed:  4000,
  //   random: 1 
  // });
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
<style type="text/css">
        /*select {display: none;}*/
        
        .desc { color:#6b6b6b;}
        .desc a {color:#0092dd;}
        
        .dropdown dd, .dropdown dt, .dropdown ul { margin:0px; padding:0px; }
        .dropdown dd { position:relative; }
        .dropdown a, .dropdown a:visited { color:#816c5b; text-decoration:none; outline:none;height: 40px; line-height: 30px; width: 100% !important;}
        .dropdown a:hover { color:#5d4617;}
        .dropdown dt a:hover { color:#5d4617; border: 1px solid #d0c9af;}
        .dropdown dt a {background:#e4dfcb url(arrow.png) no-repeat scroll right center; display:block; padding-right:20px;
                        border:1px solid #d4ca9a; width:160px; padding:5px;}
        .dropdown dt a span {cursor:pointer; display:block;}
        .dropdown dd ul { background:#e4dfcb none repeat scroll 0 0; width:100%; border:1px solid #d4ca9a; color:#C5C0B0; display:none;
                          left:0px; padding:5px 0px; position:absolute; top:2px; min-width:170px; list-style:none;}
        .dropdown span.value { display:none;}
        .dropdown dd ul li a { padding:5px; display:block;}
        .dropdown dd ul li a:hover { background-color:#d0c9af;}
        
        .dropdown img.flag { border:none; vertical-align:middle; margin-left:10px; }
        .flagvisibility { display:none;}
        
        
    </style>
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

<body>

  <div class="snap-drawers">
    <div class="snap-drawer snap-drawer-left">
            <div id="headerfix"></div>
      <?php dynamic_sidebar( 'leftbar' ); ?>
   </div>
</div>
  

<!-- page container -->
  <div class="page-container snap-content" id="snapcontent">
    <!-- header wrapper-->
    <section id="header" class="wrapper page dk" data-type="background" data-speed="2">
        <div id="headerfix"><!--header-->
        <div class="row">
          <div class="columns">
              <a href="/" id="logo"></a>
              <a href="#" id="menu" class="ani"><i class="icon-menu" id="open-right"></i><i class="icon-circledelete" id="closee"></i></a>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'no-mobi lastbutnot anis' ) ); ?>
          </div><!--nav-->
        </div><!--row-->
        </div><!--header-->

  <div class="section-header">
  <div class="row">
  <div class="large-12 large-centered columns"> <!-- initial title -->
                  <h1 class="subheader text-center">  
                    Create your own Scene!
                  </h1><!-- end initial title -->
                </div> <!-- end columns -->
           </div><!-- end row --> 
</div>

</section><!--end headerfix-->
            <!-- navigation bar -->