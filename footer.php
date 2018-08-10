<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<div class="grid-container fluid">
  <div class="grid-x">
    <div class="cell">
      <footer class="footer">
          <div class="footer-container">
              <div class="footer-grid">
                  <?php dynamic_sidebar( 'footer-widgets' ); ?>
              </div>
          </div>
      </footer>
    </div>
  </div>
</div>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
