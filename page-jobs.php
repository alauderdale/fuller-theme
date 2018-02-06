<?php
/*
Template Name: Jobs
 */

?>


<?php get_header(); ?>


<div class='main'>
		<style>
		.search-jobs-toggle{
			visibility:visible!important;
		}
		</style>
	<section>


<?php while ( have_posts() ) : the_post(); ?>




<?php endwhile; // end of the loop. ?>

		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>

					<div class='panel'>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content();?>
						<?php endwhile; // end of the loop. ?>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part( 'content', 'promo' ); ?>
	</section>



</div>




<?php get_footer(); ?>