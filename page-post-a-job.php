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
					Thank you for your interest in hiring Fuller students and graduates. Please fill out the form below to have your job opening posted to our site within 5 business days. Your post will remain online for 90 days, or until you inform us that the position has been filled.
				</p>
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