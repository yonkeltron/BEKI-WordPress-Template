<?php
/**
 * @package WordPress * @subpackage BEKI
 */
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main">
	<div class="tab"></div>

  <?php get_search_form(); ?>

  <section>
    <h2>Archives by Month:</h2>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
  </section>

  <section>
    <h2>Archives by Subject:</h2>
    <ul>
      <?php wp_list_categories(); ?>
    </ul>
  </section>


<?php get_footer(); ?>
