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