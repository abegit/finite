<ul class="breadcrumbs catlist">
        <?php $catsy = get_the_category();
        $myCat = $catsy->cat_ID;
        $currentcategory = '&current_category='.$myCat; ?>
        <?php wp_list_categories( 'show_option_all=&orderby=count&show_count=0&hierarchical=0&title_li=&show_option_none=&depth=1&pad_counts=1&taxonomy=category'.$currentcategory ); ?> 
</ul>