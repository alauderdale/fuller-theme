<?php
/**
 * Filter in `[jobs]` shortcode for job types.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-filter-job-types.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @version     1.20.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<?php if ( ! is_tax( 'job_listing_type' ) && empty( $job_types ) ) : ?>
	<ul class="job_types list-group filters-list">
		<li class='list-group-item'>
			<div class='padded-box'>
				<h5 class='bold-font-name dark-text-color no-margin-bottom'>
					Job types
				</h5>
			</div>
			<?php foreach ( get_job_listing_types() as $type ) : ?>
				<div class='checkbox'>
					<label for="job_type_<?php echo $type->slug; ?>" class="<?php echo sanitize_title( $type->name ); ?>">
						<input type="checkbox" name="filter_job_type[]" value="<?php echo $type->slug; ?>" <?php checked( in_array( $type->slug, $selected_job_types ), true ); ?> id="job_type_<?php echo $type->slug; ?>" /> 
						<?php echo $type->name; ?>
					</label>
			<?php endforeach; ?>
		</li>
	</ul>
	<input type="hidden" name="filter_job_type[]" value="" />
<?php elseif ( $job_types ) : ?>
	<?php foreach ( $job_types as $job_type ) : ?>
		<input type="hidden" name="filter_job_type[]" value="<?php echo sanitize_title( $job_type ); ?>" />
	<?php endforeach; ?>
<?php endif; ?>