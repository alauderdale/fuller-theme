<?php
/*
Template Name: Jobs
 */

?>


<?php get_header(); ?>

<?php get_template_part( 'content', 'autocomplete' ); ?>


<div class='main'>
		<style>
		.search-jobs-toggle{
			visibility:visible!important;
		}
		</style>
	<section class="padding-top no-padding-bottom">

		<div class='container'>
			<div class='row'>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content();?>
						<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		<?php get_template_part( 'content', 'promo' ); ?>
	</section>



</div>




<?php get_footer(); ?>