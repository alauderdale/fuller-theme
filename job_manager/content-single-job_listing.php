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


<div class='main'>
	<section class='no-padding-top'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<div class='half-margin-top'>
						<ol class='breadcrumb'>
							<li>
								<a href='<?php echo get_permalink( get_page_by_path( 'jobs' ) ); ?>'>
									Job search
								</a>
							</li>
							<li class='active'>
								<?php the_job_field( 'job_title' );?>
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="single_job_listing">
				<?php if ( get_option( 'job_manager_hide_expired_content', 1 ) && 'expired' === $post->post_status ) : ?>
					<div class='row'>
						<div class='col-lg-12'>
							<div class='panel'>
								<div class='panel-body'>
									<div class="job-manager-info"><?php _e( 'This listing has expired.', 'wp-job-manager' ); ?></div>
								</div>
							</div>
						</div>
					</div>
				<?php else : ?>
					<div class='row'>
						<div class='col-lg-12'>
							<div class='panel'>
								<div class='panel-body'>
									<div class="row">
										<div class='col-sm-9'>
											<div class='media'>
												<div class='media-left  hidden-xs'>
													<img class='media-object quarter-margin-right' src='<?php bloginfo('template_url'); ?>/images/job-image-placeholder.png' width='155px'>
												</div>
												<div class='media-body vert-align-middle'>
													<div class='media-heading'>
														<h3 class="no-margin-bottom">
															<?php the_job_field( 'job_title' );?> at <?php the_company_field( 'company_name' );?>
															<br>
															<?php the_job_field( 'job_location' );?>
														</h3>
													</div>
												</div>
											</div>
										</div>
										<div class='col-sm-3'>
											<div style="margin-top:20px;">
												<?php if ( get_company_field( 'application_method_link' ) ) : ?>
													<a class='btn btn-block btn-primary' href='<?php the_job_field( 'application_method_link' );?>' target='_blank'>
														Apply
													</a>
													
												<?php elseif ( get_company_field( 'application_method_upload_application' )) : ?>
													<a class='btn btn-block btn-primary half-margin-top' href='<?php the_job_field( 'application_method_upload_application' );?>' target='_blank'>
														Apply
													</a>
												<?php elseif ( get_company_field( 'application_method_custom' )) : ?>
													<button type="button" class="btn btn-block btn-primary half-margin-top" data-toggle="modal" data-target="#applicationInstructionsModal">
													  Apply
													</button>
												<?php endif; ?>
											</div>
										</div>
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
									
									<?php the_company_field( 'job_description' );?>
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
											<?php the_company_field( 'company_name' );?>
											<br>
											<?php the_company_field( 'address' );?>
											<?php the_company_field( 'address_line_2' );?>
											<br>
											<?php the_company_field( 'city' );?>,  <?php the_company_field( 'state' );?>  <?php the_company_field( 'zip' );?>
										</p>
									</div>
									<div class='margin-bottom'>
										<p class='bold-font-name dark-text-color quarter-margin-bottom'>
											Contact
										</p>
										<p>
											<?php the_job_field( 'contact_name' );?>
											<br>
											<?php the_job_field( 'contact_phone' );?>
											<br>
											<a href='mailto:<?php the_job_field( 'contact_email' );?>'>
												<?php the_job_field( 'contact_email' );?>
											</a>
										</p>
									</div>
										<?php if ( get_company_field( 'company_website' ) ) { ?>
											<p class='bold-font-name dark-text-color quarter-margin-bottom'>
												Website
											</p>
											<?php the_company_field( 'company_website', null, array( 'output_as' => 'link' ) );?>
										<?php 
											} else { 
										?>
											    
										<?php 
											}
										?>
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
											<?php the_job_field( 'job_location' );?>
										</h5>
									</div>
									<div class='margin-bottom'>
										<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
											Job type
										</h5>
										<h5>
											<?php the_job_field( 'job_type' );?>
										</h5>
									</div>
									<div class='margin-bottom'>
										<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
											Posted
										</h5>
										<h5>
											<?php the_job_publish_date(); ?>
										</h5>
									</div>
									<div class='margin-bottom'>
										<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
											Hours/week
										</h5>
										<h5>
											<?php the_job_field( 'hours' );?>
										</h5>
									</div>
									<div class='margin-bottom'>
										<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
											Pay rate
										</h5>
										<h5>
											<?php the_job_field( 'pay_rate' );?>
										</h5>
									</div>
									<div class='margin-bottom'>
										<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
											Ordained position
										</h5>
										<h5>
											<?php the_job_field( 'ordination_requirement' );?>
										</h5>
									</div>
									<div class='margin-bottom'>
										<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
											Exempt status
										</h5>
										<h5>
											<?php the_job_field( 'exempt_status' );?>
										</h5>
									</div>
									<div class='margin-bottom'>
										<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
											Skills
										</h5>
										<h5>
											<?php the_job_field( 'job_tags' );?>
										</h5>
									</div>
									<div class='margin-bottom'>
										<h5 class='bold-font-name dark-text-color quarter-margin-bottom'>
											Industries
										</h5>
										<h5>
											<?php the_job_field( 'job_category' );?>
										</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

</div>


<!-- custom description modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="applicationInstructionsModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title half-padding-left">Application instructions</h4>
      </div>
      <div class="modal-body padded half-padding-top half-padding-bottom no-margin-bottom">
        <?php the_job_field( 'application_method_custom' );?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

