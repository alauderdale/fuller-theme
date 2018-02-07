<section>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12'>
				<div class='post-a-job-promo'>
					<div class='row'>
						<div class='col-sm-9'>
							<h2 class='medium-font-name'>
								<?php the_field('promo_title', 'option'); ?>
							</h2>
							<p>
								<?php the_field('promo_subtext', 'option'); ?>	
							</p>
						</div>
						<div class='col-sm-3'>
							<div class='button-container'>
								<a class='btn btn-primary btn-lg' href='<?php the_field('promo_link', 'option'); ?>'>
									Post a Job here
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>