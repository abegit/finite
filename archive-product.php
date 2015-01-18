<?php get_header(); ?>

<script>
	// search popup
var jaMn = jQuery.noConflict();
	// search popup
jaMn(document).ready(function() {
		// When clicking on the button close or the mask layer the popup closed
		jaMn(window).load(function() {
			jaMn('#list .product').fadeOut('1500');
		});
});

</script>

<!-- body content -->

<section id="shop" class="wrapper lt woocommerce" data-type="elements" data-speed="2">
        <div class="row">


        	
            
        <div class="large-10 columns push-2" id="list"><?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		

		<?php do_action( 'woocommerce_archive_description' ); ?>

		<?php woocommerce_content(); ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?></div>
        


<div class="large-2 columns sidebar pull-10">
		      	<ul class="store"><?php dynamic_sidebar( 'storeside' ); ?></ul>
        	</div>




            
        </div> <!-- end row -->
<div class="clear"></div>
</section>

<?php get_footer(); ?>

