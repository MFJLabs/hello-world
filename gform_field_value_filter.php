<?php
/* Pre-populate Gravity Forms primary_category hidden field with
WordPress category name if !empty()
----------------------------------------------------------------- */
add_filter( 'gform_field_value_primary_category', 'populate_primary_category' );
function populate_primary_category( $value ) {
    $categories = get_the_category();
    if ( ! empty( $categories ) ) {
        $category = $categories[0]->name;
    } else {
        $category = 'LinkedIn SET';
    }
    return $category;
}
