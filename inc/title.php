<!-- initial title -->
<h1 class="subheader<?php if(is_home()){ ?> text-center home<?php } ?>"<?php if(is_search()){ ?> style="margin-bottom:0;"<?php } ?>>  
<?php if( is_home() ) {  echo get_bloginfo( 'description' ); }
  elseif (is_category() ) { echo single_cat_title(); }
  elseif (is_singular('product') || is_page_template('page-enter.php')) {}
  elseif (is_single() || is_page() || is_cart()) { the_title(); }
  elseif (is_404()) { echo "Sorry not found"; }
  elseif (is_search()) { ?>
    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="Search" /></form>
<?php } elseif (apply_filters('woocommerce_show_page_title',true) ){woocommerce_page_title();}
  else {echo the_title();} ?>
</h1><!-- end initial title -->


