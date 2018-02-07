<?php
/**
 * Content shown before job listings in `[jobs]` shortcode.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-listings-start.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @version     1.15.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<div class="col-md-9">
	<div class='panel'>
		<div class='panel-body'>
			<div class='results-header'>
				<h3 class='medium-font-name no-margin-bottom'>


					<?php if (empty($_GET['search_keywords']) && empty($_GET['search_location']) ) : ?>
<!-- 						both fields empty -->
						All jobs
					<?php elseif (! empty($_GET['search_keywords']) && ! empty($_GET['search_location']) ) : ?>
<!-- 						both fields full -->
						"<?php echo $_GET['search_keywords']; ?>" jobs in <?php echo $_GET['search_location']; ?>
					<?php elseif (! empty($_GET['search_keywords']) && empty($_GET['search_location'])) : ?>
<!-- 						keywords only full -->
						"<?php echo $_GET['search_keywords']; ?>" jobs

					<?php elseif (empty($_GET['search_keywords']) && ! empty($_GET['search_location'])) : ?>
<!-- 						location only full -->
						Jobs in <?php echo $_GET['search_location']; ?>
					<?php endif; ?>




				</h3>
			</div>
		</div>
		<ul class="job_listings list-group results-list">
