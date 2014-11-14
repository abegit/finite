<div class="snap-drawers">
   <div class="snap-drawer snap-drawer-left">
      <div class="close-l" style="display:none; cursor:pointer; z-index:9; background: none repeat scroll 0 0 #636363; bottom: 0; font-family: lato; font-size: 16px; line-height: 24px; padding: 10px; position: fixed; width: 100%;"> Close >> </div>
      <ul> <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Leftbar') ) : ?> <?php endif; ?></ul>
   </div>
   <div class="snap-drawer snap-drawer-right">
            <div class="close-r" style="display:none; cursor:pointer; z-index:9; background: none repeat scroll 0 0 #636363; bottom: 0; font-family: lato; font-size: 16px; line-height: 24px; padding: 10px; position: fixed; width: 100%;"> Close >> </div>
            <div id="selfie"><a href="/account/"><?php global $userdata; get_currentuserinfo(); echo get_avatar( $userdata->ID, 120); ?></a></div>
            <ul> <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Rightbar') ) : ?> <?php endif; ?></ul>
   </div>
</div>