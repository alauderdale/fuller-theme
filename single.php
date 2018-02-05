<?php
/**
 * The Template for displaying all single posts.
 *
 * @package boiler
 */

get_header(); ?>



<section>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-12'>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content();?>
        <?php endwhile; // end of the loop. ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>