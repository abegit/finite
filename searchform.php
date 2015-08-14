<form method="get" id="searchform" action="<?php echo home_url(); ?>/">
  <input type="text" value="To search, type and hit enter" placeholder="<?php 
  if ($_GET["s"] !=null) {
      echo $_GET["s"];
    } else {
      _e('Search', 'finite');
    }
  ?>" name="s" id="s" onfocus="if (this.value == 'To search, type + hit enter') {this.value = '';}" onblur="if (this.value == '') {this.value = 'To search, type and hit enter';}" />
  <input type="hidden" name="searchblogs" value="1,5,6,12" />


</form>