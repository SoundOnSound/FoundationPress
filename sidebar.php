<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar">
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<!-- Add Custom fields to product pages only -->
	<?php if( is_product() ): ?>
		<!-- Add Platform Custom Field -->
		<?php
			$platforms = get_field('platforms');
			if( $platforms ): ?>
				<div class="sidebar-widgets product-sidebar">
					<h6>Supported Platforms</h6>
					<ul>
						<?php foreach( $platforms as $platform ): ?>
							<li><?php echo $platform; ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>

		<!-- Add Windows System Requirements from Custom Field -->
		<?php if( get_field('windows_system_requirements') ): ?>
			<div class="sidebar-widgets product-sidebar">
				<h6>Windows System Requirements</h6>
				<?php the_field('windows_system_requirements'); ?>
			</div>
		<?php endif; ?>

		<!-- Add Mac System Requirements from Custom Field -->
		<?php if( get_field('mac_system_requirements') ): ?>
			<div class="sidebar-widgets product-sidebar">
				<h6>Mac System Requirements</h6>
				<?php the_field('mac_system_requirements'); ?>
			</div>
		<?php endif; ?>

		<!-- Add SOS Review Link from Custom Field -->
		<?php if( get_field('sos_review_link') ): ?>
			<div class="sidebar-widgets product-sidebar">
				<h6>Read The Sound On Sound Review</h6>
				<a class="button button-primary expanded sos-review" href='<?php the_field('sos_review_link'); ?>' target='_blank'>Read SOS Review</a>
			<div>
		<?php endif; ?>
		<!-- End If is product -->
	<?php endif; ?>
</aside>
