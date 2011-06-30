<?php
/**
 * @package WordPress
 * @subpackage BEKI
 */
?>
<aside id="sidebar">
  <header class="logo">
  	<a href="<?php bloginfo('home'); ?>" title="Home"><img src="<?php print get_bloginfo('template_directory'); ?>/images/logo.png" alt="Congregation Beth El-Keser Israel" /></a>
  </header>
  <?php   /* Widgetized sidebar, if you have the plugin installed. */
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

  <?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ) { ?> 
  <section>
    
    <?php /* If this is a 404 page */ if (is_404()) { ?>
    <?php /* If this is a category archive */ } elseif (is_category()) { ?>
    <p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
    for the day <?php the_time('l, F jS, Y'); ?>.</p>

    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
    for <?php the_time('F, Y'); ?>.</p>

    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
    for the year <?php the_time('Y'); ?>.</p>

    <?php /* If this is a search result */ } elseif (is_search()) { ?>
    <p>You have searched the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
    for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

    <?php /* If this set is paginated */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives.</p>

    <?php } ?>

  </section>
  <?php }?>
  <section class="search">
    <?php get_search_form(); ?>
  </section>
  
  <nav role="navigation">
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-sidebar' ) ); ?>
	<div id="background">
		<img src="<?php print get_bloginfo('template_directory'); ?>/images/tree_bg.png" />
	</div>
  </nav>

<?php endif; ?>

  <div id="primary" class="widget-area" role="complementary">
<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
		
		<?php endif; // end primary widget area ?>
	</div><!-- #primary .widget-area -->

  <section class='font-adjust'>
  	Adjust Font Size: 
	<a class="decreaseFont">-</a> /
	<a class="increaseFont">+</a> /
	<a class="resetFont">reset</a>
  </section>
  
	<section class="contact">
		<p class="address">Congregation Beth-El Keser Israel<br />
		5 Harrison Street at Whalley Avenue<br />
		New Haven, CT 06515-1724</p>
		<p>203.389.2108</p>
	</section>
</aside>

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
<aside id="sidebar-right">

		<div id="secondary" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
		</div><!-- #secondary .widget-area -->

</aside
<?php endif; ?>