<?php
  /* Template Name: Homepage */
  get_header();
?>
<div class="grid-container fluid home">
  <div class="grid-x">
    <div class="cell">
      <h1>Home</h1>
      <h2>Custom Template 'Homepage'</h2>
      <h3>Site Description</h3>
    </div>
    <div class="cell">
      <!-- Set up woocommerce div to correctly inherit styles -->
      <div class="woocommerce">
        <?php
        // Build array for Featured products loop
        $args = array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'tax_query' => array(
                    array(
                        'taxonomy' => 'product_visibility',
                        'field'    => 'name',
                        'terms'    => 'featured',
                    ),
                ),
            );
            // Assign new WP_Query to var
            $loop = new WP_Query( $args );
            // Check loop has has posts
            if ( $loop->have_posts() ) {
              // Out put HTML for Loop (The above conditional insures the HTML is output only if there's featured products in the system)
              echo "<div class=\"featured-home\"><h2>Featured Products</h2><ul class=\"products columns-4\">";
                // Run loop
                while ( $loop->have_posts() ) : $loop->the_post();
                    wc_get_template_part( 'content', 'product' );
                endwhile;
              // Close ul
              echo "</ul></div>";
            }
            wp_reset_postdata();
        ?>

        <?php
        // Build array for product Categories loop
        $args = array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'posts_per_page' => 6,
            'tax_query' => array(
              array(
                  'taxonomy' => 'product_tag',
                  'field' => 'slug',
                  'terms' => 'fabfilter',
                ),
              ),
            );
            // Assign new WP_Query to var
            $loopCat = new WP_Query( $args );
            // Check loop has has posts
            if ( $loopCat->have_posts() ) {
              // Out put HTML for Loop (The above conditional ensures the HTML is output only if there's products within the category in the system)
              echo "<div class=\"featured-home\"><h2><a href=\"/sosmusictools/product-category/effects/\">Effects Software</a></h2><ul class=\"products columns-6\">";
                // Run loop
                while ( $loopCat->have_posts() ) : $loopCat->the_post();
                    wc_get_template_part( 'content', 'product' );
                endwhile;
              // Close ul and div
              echo "</ul></div>";
            }
            wp_reset_postdata();
        ?>

        <?php
        // Build array for product Categories loop
        $args = array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'posts_per_page' => 6,
            'tax_query' => array(
              array(
                  'taxonomy' => 'product_tag',
                  'field' => 'slug',
                  'terms' => 'acon',
                ),
              ),
            );
            // Assign new WP_Query to var
            $loopCat = new WP_Query( $args );
            // Check loop has has posts
            if ( $loopCat->have_posts() ) {
              // Out put HTML for Loop (The above conditional ensures the HTML is output only if there's products within the category in the system)
              echo "<div class=\"featured-home\"><h2><a href=\"/sosmusictools/product-tag/acon/\">Acon Software</a></h2><ul class=\"products columns-6\">";
                // Run loop
                while ( $loopCat->have_posts() ) : $loopCat->the_post();
                    wc_get_template_part( 'content', 'product' );
                endwhile;
              // Close ul and div
              echo "</ul></div>";
            }
            wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</div>



<?php get_footer();
