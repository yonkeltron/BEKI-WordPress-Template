<?php
/**
 * @package WordPress
 * @subpackage BEKI
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'first-footer-widget-area'  )
		&& ! is_active_sidebar( 'second-footer-widget-area' )
		&& ! is_active_sidebar( 'third-footer-widget-area'  )
		&& ! is_active_sidebar( 'fourth-footer-widget-area' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

<?php if (has_nav_menu('menu-footer')) : ?>
	<nav>
	<?php wp_nav_menu( array( 'theme_location' => 'menu-footer', 'sort_column' => 'menu_order' ) ); ?>
	</nav>
<?php endif; ?>
			<div id="footer-widget-area" class="clearfix" role="complementary">

				<div id="first" class="widget-area">
						<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
				</div><!-- #first .widget-area -->

				<div id="second" class="widget-area">
						<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
				</div><!-- #second .widget-area -->

				<div id="third" class="widget-area">
						<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
				</div><!-- #third .widget-area -->
			</div><!-- #footer-widget-area -->
