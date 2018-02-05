<?php
/*
Template Name: Home
 */
?>


<?php get_header(); ?>

	<style>
	.global-nav{
		border-bottom:none;
	}
	</style>
<div class='main'>
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
						<form class='form-inline' form method="GET" action="http://localhost:8888/fuller/jobs">
							<div class='form-group'>
								<div class='inner-addon left-addon'>
									<i class='fa fa-search'></i>
									<input id="search_keywords" name="search_keywords" class='form-control input-lg' placeholder='Keyword'>
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
							<li>
								<a href='/listings'>
									Accommodation and Food Services
								</a>
							</li>
							<li>
								<a href='/listings'>
									Administrative and Support Services
								</a>
							</li>
							<li>
								<a href='/listings'>
									Arts, Entertainment, and Recreation
								</a>
							</li>
							<li>
								<a href='/listings'>
									Church Ministry
								</a>
							</li>
							<li>
								<a href='/listings'>
									Construction
								</a>
							</li>
							<li>
								<a href='/listings'>
									Educational Services
								</a>
							</li>
							<li>
								<a href='/listings'>
									Finance and Insurance
								</a>
							</li>
							<li>
								<a href='/listings'>
									Government
								</a>
							</li>
							<li>
								<a href='/listings'>
									Health Care and Social Services
								</a>
							</li>
							<li>
								<a href='/listings'>
									Information
								</a>
							</li>
							<li>
								<a href='/listings'>
									Management of Companies and Enterprises
								</a>
							</li>
							<li>
								<a href='/listings'>
									Manufacturing
								</a>
							</li>
							<li>
								<a href='/listings'>
									Mission/Parachurch
								</a>
							</li>
							<li>
								<a href='/listings'>
									Other Services
								</a>
							</li>
							<li>
								<a href='/listings'>
									Professional, Scientific, and Technical Services
								</a>
							</li>
							<li>
								<a href='/listings'>
									Psychological Services
								</a>
							</li>
							<li>
								<a href='/listings'>
									Real Estate and Rental and Leasing
								</a>
							</li>
							<li>
								<a href='/listings'>
									Retail Trade
								</a>
							</li>
							<li>
								<a href='/listings'>
									Transportation
								</a>
							</li>
							<li>
								<a href='/listings'>
									Utilities
								</a>
							</li>
							<li>
								<a href='/listings'>
									Wholesale Trade
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class='white-section no-padding-bottom no-padding-top'>
		<?php
			get_template_part( 'content', 'promo' ); 
		?>
	</section>
</div>







<?php get_footer(); ?>