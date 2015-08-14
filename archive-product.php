<?php get_header(); ?>


<!-- body content -->

<section id="shop" class="wrapper lt woocommerce" data-type="elements" data-speed="2">
<div class="section-header store">
    <div class="row"> <div class="large-12 columns"><ul class="store"><?php dynamic_sidebar( 'archive-7' ); ?></ul></div></div></div>



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
		      	<ul class="store"><?php dynamic_sidebar( 'blog' ); ?></ul>
        	</div>




            
        </div> <!-- end row -->
<div class="clear"></div>
</section>

<?php get_footer(); ?>

