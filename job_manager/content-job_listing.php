<?php
/**
 * Job listing in the loop.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-job_listing.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @since       1.0.0
 * @version     1.27.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post;
?>
<li <?php job_listing_class(); ?> data-longitude="<?php echo esc_attr( $post->geolocation_lat ); ?>" data-latitude="<?php echo esc_attr( $post->geolocation_long ); ?>" class='list-group-item no-padding'>
	<a href="<?php the_job_permalink(); ?>" class='result'>
		<h4 class='medium-font-name link-color'>
			<?php wpjm_the_job_title(); ?>
		</h4>
		<p class='no-margin-bottom text-color'>
			<?php the_company_name(); ?>
		</p>
		<p class='text-color no-margin-bottom'>
			<?php the_job_location( false ); ?>
		</p>
		<div class='days-ago-label'>
			<p class='medium-font-name extra-dark-text-color'>
				<?php the_job_publish_date(); ?>
			</p>
		</div>
	</a>
</li>
