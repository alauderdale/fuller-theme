<?php
/**
 * Filters in `[jobs]` shortcode.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-filters.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @version     1.21.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wp_enqueue_script( 'wp-job-manager-ajax-filters' );

do_action( 'job_manager_job_filters_before', $atts );
?>
<div class="col-md-3">

	<div class='panel filter-panel'>
		<div class='panel-body'>
			<h5 class='no-margin-bottom'>
				<i class='fa fa-filter'></i>
				Filter results
			</h5>
		</div>


		<form class="job_filters">
			<?php do_action( 'job_manager_job_filters_start', $atts ); ?>

			<div class="search_jobs">
				<?php do_action( 'job_manager_job_filters_search_jobs_start', $atts ); ?>
				<div class='results-search-form'>
					<div class='form-inner'>
						<div class="form-inline">
							<div class="search_keywords form-group">
								<div class='inner-addon left-addon'>
									<i class='fa fa-search'></i>
									<input type="text" name="search_keywords" class="form-control input-lg " id="search_keywords" placeholder="<?php esc_attr_e( 'Keywords', 'wp-job-manager' ); ?>" value="<?php echo esc_attr( $keywords ); ?>" />
								</div>
							</div>

							<div class="search_location form-group">
								<div class='inner-addon left-addon'>
									<i class='fa fa-map-marker'></i>
									<input type="text" name="search_location" class="form-control input-lg" id="search_location" placeholder="<?php esc_attr_e( 'Location', 'wp-job-manager' ); ?>" value="<?php echo esc_attr( $location ); ?>" />
								</div>
							</div>
							<button class='btn btn-primary' type='submit'>
								Search
							</button>
						</div>
					</div>
				</div>

		<!-- 		category options removed here -->

				<?php do_action( 'job_manager_job_filters_search_jobs_end', $atts ); ?>
			</div>

			<?php do_action( 'job_manager_job_filters_end', $atts ); ?>
		</form>
	</div>
</div>
<?php do_action( 'job_manager_job_filters_after', $atts ); ?>

<noscript><?php _e( 'Your browser does not support JavaScript, or it is disabled. JavaScript must be enabled in order to view listings.', 'wp-job-manager' ); ?></noscript>