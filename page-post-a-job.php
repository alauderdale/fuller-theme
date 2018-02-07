<?php
/*
Template Name: Post a Job
 */
?>


<?php get_header(); ?>
<section class='white-section no-padding-bottom'>
	<div class='container'>
		<div class='row'>
			<div class='col-sm-3'></div>
			<div class='col-sm-6'>
				<h3 class='text-center'>
					Post a job
				</h3>
				<p>
					<?php the_field('welcome_text');?>
				</p>
				<div class="padding-bottom text-left">
					<?php get_template_part( 'content', 'disclaimer' ); ?>
				</div>
			</div>
			<div class='col-sm-3'></div>
		</div>
	</div>
</section>

<section class="white-section padding-top">
  <div class='container'>
    <div class='row'>
      <div class='col-sm-2'>
      </div>
      <div class='col-sm-8'>
      	<div class="well post-a-job-form">
	        <?php while ( have_posts() ) : the_post(); ?>
	          <?php the_content();?>
	        <?php endwhile; // end of the loop. ?>
    	</div>
      </div>
      <div class='col-sm-2'>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>