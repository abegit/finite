<?php get_header(); ?>
<?php global $bp ?>


<!-- body content -->

<!-- enter content -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
<div id="page" class="wrapper lt">

     <div class="row">    



                <div class="large-8 columns">
                    <?php the_content(); ?>
                    <?php endwhile; ?>
    <?php endif; ?>
                    
                </div>


                <div class="large-4 columns">
                    <?php if (is_page('my-account')): ?>
                        <form action="<?php echo bp_displayed_user_domain() . bp_get_settings_slug() . '/general'; ?>" method="post" class="standard-form" id="settings-form">

    <?php if ( !is_super_admin() ) : ?>

        <label for="pwd"><?php _e( 'Current Password <span>(required to update email or change current password)</span>', 'buddypress' ); ?></label>
        <input type="password" name="pwd" id="pwd" size="16" value="" class="settings-input small" /> &nbsp;<a href="<?php echo wp_lostpassword_url(); ?>" title="<?php esc_attr_e( 'Password Lost and Found', 'buddypress' ); ?>"><?php _e( 'Lost your password?', 'buddypress' ); ?></a>

    <?php endif; ?>

    <label for="email"><?php _e( 'Account Email', 'buddypress' ); ?></label>
    <input type="text" name="email" id="email" value="<?php echo bp_get_displayed_user_email(); ?>" class="settings-input" />

    <label for="pass1"><?php _e( 'Change Password <span>(leave blank for no change)</span>', 'buddypress' ); ?></label>
    <input type="password" name="pass1" id="pass1" size="16" value="" class="settings-input small password-entry" /> &nbsp;<?php _e( 'New Password', 'buddypress' ); ?><br />
    <div id="pass-strength-result"></div>
    <input type="password" name="pass2" id="pass2" size="16" value="" class="settings-input small password-entry-confirm" /> &nbsp;<?php _e( 'Repeat New Password', 'buddypress' ); ?>

    <?php do_action( 'bp_core_general_settings_before_submit' ); ?>

    <div class="submit">
        <input type="submit" name="submit" value="<?php esc_attr_e( 'Save Changes', 'buddypress' ); ?>" id="submit" class="auto" />
    </div>

    <?php do_action( 'bp_core_general_settings_after_submit' ); ?>

    <?php wp_nonce_field( 'bp_settings_general' ); ?>

</form>
                    <?php endif ?>
                </div>


        


        </div> <!-- end row -->

        <div class="clear"></div>
    </div>

<?php get_footer(); ?>
