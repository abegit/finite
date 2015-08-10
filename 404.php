<?php get_header(); ?>
<!-- body content -->

<div id="error" class="wrapper dk">

        <div class="row">
        <div class="large-2 medium-4 hide-for-medium-down columns sidebar">
        <ul></ul>
        </div>
        <div class="large-8 columns">
        <div class="large-2 small-12 columns"><h1>Oops!</h1>
        </div>
        <div class="large-10 small-12 columns"><p>Looks like that link has changed, why don't you give search a try.</p><br>
            <p>Feeling Lucky?</p><br>
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <label for="s" class="large-2 columns small-12">Search for: </label>
    <input type="text" value="<?php echo $s_query; ?>" name="s" id="s" class="small-12 large-8 columns" />
    <input type="submit" id="searchsubmit" class="large-2 small-6 columns" value="Search" />
</form>
        </div>
        </div>
        <div class="large-2 medium-4 hide-for-medium-down columns ">
        <ul></ul>
        </div> 
        </div> <!-- end row -->
<div class="clear"></div>
</div>


<?php get_footer(); ?>