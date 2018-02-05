<?php
/**
 * Single job listing.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-single-job_listing.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @since       1.0.0
 * @version     1.28.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;
?>
<div class="single_job_listing">
	<?php if ( get_option( 'job_manager_hide_expired_content', 1 ) && 'expired' === $post->post_status ) : ?>
		<div class="job-manager-info"><?php _e( 'This listing has expired.', 'wp-job-manager' ); ?></div>
	<?php else : ?>
		<?php
			/**
			 * single_job_listing_start hook
			 *
			 * @hooked job_listing_meta_display - 20
			 * @hooked job_listing_company_display - 30
			 */
			do_action( 'single_job_listing_start' );
		?>

		<div class="job_description">
			<?php wpjm_the_job_description(); ?>
		</div>

		<?php if ( candidates_can_apply() ) : ?>
			<?php get_job_manager_template( 'job-application.php' ); ?>
		<?php endif; ?>

		<?php
			/**
			 * single_job_listing_end hook
			 */
			do_action( 'single_job_listing_end' );
		?>
	<?php endif; ?>
</div>





<div class='main'>
	<section class='no-padding-top'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<div class='half-margin-top'>
						<ol class='breadcrumb'>
							<li>
								<a href='/'>
									Jobs
								</a>
							</li>
							<li>
								<a href='/listings'>
									Church Ministry
								</a>
							</li>
							<li class='active'>
								<?php the_job_field( 'job_title' );?>
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-lg-12'>
					<div class='panel'>
						<div class='panel-body'>
							<div class='col-sm-9'>
								<div class='media'>
									<div class='media-left hidden-xs'>
										<img class='media-object quarter-margin-right' src='../../images/job-image-placeholder.png' width='155px'>
									</div>
									<div class='media-body'>
										<div class='media-heading'>
											<h3>
												<?php the_job_field( 'job_title' );?>
												<br>
												<?php the_job_field( 'job_location' );?>
											</h3>
										</div>
									</div>
								</div>
							</div>
							<div class='col-sm-3'>
								<a class='btn btn-block btn-primary half-margin-top' href='#'>
									Apply Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-sm-9'>
					<div class='panel'>
						<div class='panel-body'>
							<div class='page-header no-margin-top'>
								<h4 class='text-uppercase bold-font-name dark-text-color no-margin-bottom'>
									About the job
								</h4>
							</div>
							<?php wpjm_the_job_description(); ?>
						</div>
					</div>
					<div class='panel'>
						<div class='panel-body'>
							<div class='page-header no-margin-top'>
								<h4 class='text-uppercase bold-font-name dark-text-color no-margin-bottom'>
									Organization Information
								</h4>
							</div>
							<div class='margin-bottom'>
								<p class='bold-font-name dark-text-color quarter-margin-bottom'>
									Address
								</p>
								<p>
									Hope Covenant Church (Evangelical Covenant Church)
									<br>
									1770 S Dobson Road
									<br>
									Chandler,  AZ  85286
									<br>
									United States
								</p>
							</div>
							<div class='margin-bottom'>
								<p class='bold-font-name dark-text-color quarter-margin-bottom'>
									Contact
								</p>
								<p>
									Doug Glynn
									<br>
									(480) 899-7255
									<br>
									<a href='mailto:jobs@hopecov.com'>
										jobs@hopecov.com
									</a>
								</p>
							</div>
							<p class='bold-font-name dark-text-color quarter-margin-bottom'>
								Website
							</p>
							<p>
								<a href='mailto:jobs@hopecov.com'>
									jobs@hopecov.com
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class='col-sm-3'>
					<div class='panel'>
						<div class='panel-body'>
							<div class='page-header no-margin-top'>
								<h4 class='text-uppercase bold-font-name dark-text-color no-margin-bottom'>
									Details
								</h4>
							</div>
							<div class='margin-bottom'>
								<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
									Location
								</h5>
								<h5>
									Evergreen, CO 80027
								</h5>
							</div>
							<div class='margin-bottom'>
								<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
									Location
								</h5>
								<h5>
									Evergreen, CO 80027
								</h5>
							</div>
							<div class='margin-bottom'>
								<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
									Location
								</h5>
								<h5>
									Evergreen, CO 80027
								</h5>
							</div>
							<div class='margin-bottom'>
								<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
									Location
								</h5>
								<h5>
									Evergreen, CO 80027
								</h5>
							</div>
							<div class='margin-bottom'>
								<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
									Location
								</h5>
								<h5>
									Evergreen, CO 80027
								</h5>
							</div>
							<div class='margin-bottom'>
								<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
									Location
								</h5>
								<h5>
									Evergreen, CO 80027
								</h5>
							</div>
							<div class='margin-bottom'>
								<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
									Location
								</h5>
								<h5>
									Evergreen, CO 80027
								</h5>
							</div>
							<div class='margin-bottom'>
								<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
									Location
								</h5>
								<h5>
									Evergreen, CO 80027
								</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>


