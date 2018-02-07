<?php
/*
Template Name: Home
 */
?>

<?php get_header(); ?>


<?php get_template_part( 'content', 'autocomplete' ); ?>

	<style>
	.global-nav{
		border-bottom:none;
	}
	</style>

        
 

<div class='main'>




<?php while ( have_posts() ) : the_post(); ?>

	<section class='no-padding-top white-section'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<div class='homepage-hero'>
						<div class='title-img'>
							<img class='img-responsive' src='<?php bloginfo('template_url'); ?>/images/tmp/home-hero.png'>
						</div>
						<div class='title-container'>
							<h1 class='bold-font-name text-uppercase'>
								Make the change of a lifetime
							</h1>
							<h4>
								Suspendisse at cursus nunc. Etiam fringilla mauris at ante euismod efficitur
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-lg-12'>
					<div class='home-search-panel'>
						<form class='form-inline' form method="GET" action="<?php bloginfo('url')?>/fuller/jobs">
							<div class='form-group'>
								<div class='inner-addon left-addon'>
									<i class='fa fa-search'></i>
									<input id="search_keywords" name="search_keywords" class='form-control input-lg' placeholder='Keyword' type="text">
								</div>
							</div>
							<div class='form-group'>
								<div class='inner-addon left-addon'>
									<i class='fa fa-map-marker'></i>
									<input id="search_location" name="search_location" class='form-control input-lg' placeholder='Location'>
								</div>
							</div>
							<button class='btn btn-primary btn-lg' type='submit'>
								Search Jobs
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class='no-padding-top white-section'>
		<div class='container'>
			<div class='row margin-bottom'>
				<div class='col-lg-12'>
					<h3 class='text-center bold-font-name text-uppercase'>
						Browse Jobs by industry
					</h3>
				</div>
			</div>
			<div class='row'>
				<div class='col-lg-12'>
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
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; // end of the loop. ?>
	<section class='white-section no-padding-bottom no-padding-top'>
		<?php
			get_template_part( 'content', 'promo' ); 
		?>
	</section>
</div>

<?php get_footer(); ?>