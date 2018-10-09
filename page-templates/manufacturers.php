<?php
  /* Template Name: Manufacturers */
  get_header();
?>

<?php
$taxonomy  = 'product_tag';
$tags_html = [];
$tquery    = new WP_Term_Query( array(
    'taxonomy'     => $taxonomy,
    'orderby'      => 'name',
    'order'        => 'ASC',
    'hide_empty'   => false,
));

// 1st Loop: Go through each term and format it
foreach($tquery->get_terms() as $term){
    $link   = get_term_link( $term->term_id, $taxonomy );
    $letter = $term->slug[0];
    // Set alphabetically by letter each product tag formatted html (with the class, the link and the count (optionally)
    $tags_html[$letter][] = '<a class="'.$term->slug.'" href="'.$link.'">'.$term->name.'&nbsp;('.$term->count.')'.'</a>';
}

echo '<div class="product_tags">';
// 2nd Loop: Display all formatted product tags grouped by letter alphabetically
foreach( $tags_html as $letter => $values ){
    echo '<div class="letter-'.$letter.'"><h4>&nbsp;'.implode(' - ', $values).'</h4></div>';
}
echo '</div>'

?>

<?php get_footer();
