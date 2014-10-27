<?php 
/*
Template Name: Services Template
*/
get_header(); ?>

<div id="services" class="wrapper dk ani woocommerce">
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

       <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
       
  <div class="row anis">
                <div class="large-8 large-centered columns">
<?php the_content(); ?>
</div>

<?php endwhile; ?> <?php endif; ?>


        <div class="clear"></div>
</div>
</div> <!-- end dark_centered -->



<?php get_footer(); ?>
