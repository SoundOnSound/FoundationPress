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
<footer class="footer fluid">
    <div class="footer-container">
        <div class="footer-grid">
            <?php dynamic_sidebar( 'footer-widgets' ); ?>
        </div>
    </div>
    <div class="grid-x">
      <p>www.sosmusictools.com is part of Sound On Sound Publications Ltd.</p>
      <p>Registered Office: Sound On Sound Ltd, Media House, Trafalgar Way, Bar Hill, Cambridge, CB23 8SQ, United Kingdom.</p>
      <p>Sound On Sound Ltd is registered in England and Wales.</p>
      <p>Company Number: 3015516. VAT Number: GB 638 5307 26</p>
    </div>
</footer>
<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
