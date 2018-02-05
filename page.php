<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package boiler
 */

get_header(); ?>

<section class="white-section">
  <div class='container'>
    <div class='row'>
      <div class='col-sm-2'>
      </div>
      <div class='col-sm-8'>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content();?>
        <?php endwhile; // end of the loop. ?>
      </div>
      <div class='col-sm-2'>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
