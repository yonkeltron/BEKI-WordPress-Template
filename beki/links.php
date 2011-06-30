<?php
/**
 * @package WordPress * @subpackage BEKI
 */

/*
Template Name: Links
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main">
	<div class="tab"></div>

  <h2>Links:</h2>
  <ul>
    <?php wp_list_bookmarks(); ?>
  </ul>


<?php get_footer(); ?>
