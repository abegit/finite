<?php get_header(); ?>
<!-- body content -->
     	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>


<div id="single" class="wrapper lt woocommerce">
     
     <div class="row">

     	<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
           <div class="large-10 columns small-wall">
		

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
		/**
		 * woocommerce_before_single_product_summary hook
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>



	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>


		</div>


      <div class="large-2 columns sidebar">
      		<div class="summary entry-summary" style="width:100% !important;">

		<?php
			do_action( 'woocommerce_single_product_summary' );
		?>

	</div><!-- .summary -->
<?php do_action( 'woocommerce_after_single_product_summary' ); ?>
</div>


        


        </div> <!-- end row -->

        <div class="clear"></div>
    </div>


<div class="wrapper lt" id="shop">
<div class="row"> 
<div class="large-8 large-centered columns sidebar">

	
	<div class="clear"></div>
      	<ul class="store"><?php dynamic_sidebar( 'store' ); ?></ul>
</div>

            <div class="clear"></div>
    </div>
    </div>


<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>



<?php get_footer( 'shop' ); ?>


