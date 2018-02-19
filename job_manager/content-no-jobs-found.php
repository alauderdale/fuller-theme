<?php
/**
 * Notice when no jobs were found in `[jobs]` shortcode.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-no-jobs-found.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @since       1.0.0
 * @version     1.20.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<?php if ( defined( 'DOING_AJAX' ) ) : ?>
	<li class="no_job_listings_found">
		<div class="listings-text">
<!-- 			<?php _e( 'There are no listings matching your search.', 'wp-job-manager' ); ?> -->		<h4>
				There are no listings matching your search
			</h4>
			<h5 class="medium-font-name">
				Try browsing by industry
			</h5>
		</div>
		<div class='industries-list'>
			<ul class='nav nav-pills nav-stacked'>
				<?php
		            $wsubargs = array(
		               'hierarchical' => 1,
		               'show_option_none' => '',
		               'hide_empty' => 0,
		               'taxonomy' => 'job_listing_category'
		            );
		            $wsubcats = get_categories($wsubargs);
		            foreach ($wsubcats as $wsc):
	            ?>
		         <li>
					<a href='<?php bloginfo('url'); ?>/jobs/?search_keywords=<?php echo $wsc->name;?>'>
						<?php echo $wsc->name;?>
						
					</a>
				</li>
	         <?php
	            endforeach;
	            ?>  
			</ul>
		</div>
	</li>

<?php else : ?>
	<p class="no_job_listings_found"><?php _e( 'There are currently no vacancies.', 'wp-job-manager' ); ?></p>
<?php endif; ?>