<?php 
/*
Template Name: Enter Template
*/

get_header(); ?>


<?php get_header(); ?>

<!-- body content -->

    <?php if (has_post_thumbnail( $post->ID ) ) { ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <section id="enter" class="wrapper" style="background-image: url('<?php echo $image[0]; ?>')"  data-type="background" data-speed="2">
    <?php } else { ?>
        <section id="enter" class="wrapper" data-type="background" data-speed="2">
    <?php } ?>
    <div class="row" id="weDo">
        <div class="large-12 columns">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
        <?php the_content(); ?>
        <?php endwhile; ?>
        </div>
        <div class="large-12 columns">
            <div class="text-center"><?php dynamic_sidebar('home-footer'); ?></div>
        </div>
    </div> <!-- end row -->
    <div class="section-footer">
        <div class=""></div>
    </div>
        <!--end enter content-->
</section>
<div id="services" class="wrapper dk ani woocommerce">
    <div class="section-header">
    <div class="row"> <div class="large-12 columns">
        <h3>Offering World-Class Customer Service</h3>
    </div></div></div>
<div class="row anis">   
     <div class="large-12 columns">

        <div class="large-4 columns post">
                <div class="item ani">
                <a href="../for-business/contact/"><i class="icon-webpage icon-md"></i></a>
                <div style="overflow:hidden;display:block;"><h3>Web Design</h3>
                <p>Need a webpage to showcase your latest work? Or need to update some of the mess left by an old designer? Let me know what your goals are and we can start from theres!</p>
                </div></div>
            </div>
            <div class="large-4 columns post">
                <div class="item ani">
                <a href="../for-business/contact/"><i class="icon-shoppingcartalt icon-md"></i></a>
                <div style="overflow:hidden;display:block;"><h3>Online Stores</h3>
                <p>Need to create a shopping cart to sell your products online? Big or small, I can set your company up with Paypal and get your customers ready to purchase your goods online.</p>
                </div></div>
            </div>
            <div class="large-4 columns post">
                <div class="item ani">
                <a href="../for-business/contact/"><i class="icon-pixelheart icon-md"></i></a>
                <div style="overflow:hidden;display:block;"><h3>Graphic Design</h3>
                <p>Whether you just need a simple online banner, or a full fledged ad campaign that expands multiple banners and ad locations. Graphic Design is my cup of tea.</p>
                </div></div>
            </div>
            <div class="clear"></div>
            <div class="large-4 columns post">
                <div class="item ani">
                <a href="../for-business/contact/"><i class="icon-contact-businesscard icon-md"></i></a>
                <div style="overflow:hidden;display:block;"><h3>Printing</h3>
                <p>Having been in the business for a while, I've kept partnerships that will help my clients move forward. Let Mila© print your next flyer, banner, or business card.</p>
                </div></div>
            </div>
            <div class="large-4 columns post">
                <div class="item ani">
                <a href="../for-business/contact/"><i class="icon-lens icon-md"></i></a>
                <div style="overflow:hidden;display:block;"><h3>Photography</h3>
                <p>We all know that how to take 'candid' shots with our phone, but without an understanding of where the photos will end up, you could end up with 'pixelated' photos. Not Fun.</p>
                </div></div>
            </div>
            <div class="large-4 columns post">
                <div class="item ani">
                <a href="../for-business/contact/"><i class="icon-insertpicture icon-md"></i></a>
                <div style="overflow:hidden;display:block;"><h3>Photo Touchups</h3>
                <p>Nobody's perfect, we all know that, but there are times when just need a little confidence boost. That's where I come in and remove that pesky pimple from your nose.</p>
                </div></div>
            </div>

    </div></div>
        <div class="clear"></div>
</div>
<div id="dark_centered" class="wrapper dk ani woocommerce">
   <?php echo do_shortcode('[nggallery id=1]'); ?>
       

        <div class="clear"></div>
</div><!-- end dark_centered -->
<div id="team" class="wrapper dk ani woocommerce">
    <div class="section-header">
    <div class="row"> <div class="large-12 columns">
        <h3>Meet the Team</h3>
    </div></div></div>
<div class="row anis">   
     <div class="large-10 columns large-centered text-center">
         
            <div class="large-4 small-6 columns post">
                <div class="item ani">
                <a href="../for-business/contact/"><img src="http://placehold.it/200" style="border-radius:200px;"></a>
                <div style="overflow:hidden;display:block;"><h3>Terry</h3>
                <p>CEO / Marketing Coordinator</p>
                </div></div>
            </div>
            <div class="large-4 small-6 columns post">
                <div class="item ani">
                <a href="../for-business/contact/"><img src="http://placehold.it/200" style="border-radius:200px;"></a>
                <div style="overflow:hidden;display:block;"><h3>Chris</h3>
                <p>Head of Sales Department</p>
                </div></div>
            </div>
            <div class="large-4 small-6 columns post">
                <div class="item ani">
                <a href="../for-business/contact/"><img src="http://placehold.it/200" style="border-radius:200px;"></a>
                <div style="overflow:hidden;display:block;"><h3>Abe</h3>
                <p>Head of Technology</p>
                </div></div>
            </div>

     </div></div>
        <div class="clear"></div>
</div>

            
            <?php endif; ?>      

<?php get_footer('contact'); ?>
