<?php 
if ( $terms = wc_get_product_terms( $post->ID, 'product_cat', array( 'orderby' => 'parent', 'order' => 'DESC' ) ) ) {
                    $main_term = $terms[0];
                    $ancestors = get_ancestors( $main_term->term_id, 'product_cat' );
                    $ancestors = array_reverse( $ancestors );
                    echo $before . '<span class="breadcrumbs"><a href="' . get_term_link( $main_term->slug, 'product_cat' ) . '"><i class="icon-pageback"></i> Go back to ' . $main_term->name . '</a></span>' . $after . $delimiter;
                  }
                  echo $before;
?>