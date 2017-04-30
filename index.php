<?php get_header(); ?>
		<main>
			<div class = 'container-fluid'>
				<div class = 'row'>
					<div class = 'col-lg-3'></div>
					
					<a href = 'http://smeggco.com/ppc/'>
						<div class = 'col-lg-2 pod_box' id = 'pnp'>
							<img src = '<?php bloginfo('template_directory');?>/images/pnp_logo.jpg' class = 'pod_image' alt = 'Pen and Paper Cast Logo' />
							<div id = 'pnp_desc'>
								<p>Join a zany cast of family and friends as they dive sword first into the amazing world of tabletop roleplaying games.</p>
							</div>
						</div>
					</a>
					<div class = 'col-lg-2'></div>
					<a href = 'http://smeggco.com/tfg/'>
						<div class = 'col-lg-2 pod_box' id = 'tfg'>
							<img src = '<?php bloginfo('template_directory');?>/images/tfg_logo.png' class = 'pod_image' alt = 'The Film Guild Logo'/>
							<div id = 'tfg_desc'>
								<p>Join father-son duo Jason & Fred Stollery as they cut their way into scifi and horror news, express their opinions as lifelong cinephiles, and break down a selection of their favorite and lesser known genre films, all the while trying to learn a little about themselves and what it all means. </p>
							</div>
						</div>
					</a>
					<div class = 'col-lg-3'></div>
				</div>
				<div class = 'row content_block'>
					<div class = 'col-lg-8'>
					<!--blog loop -->
					<?php 
						$main_query = new WP_Query (array ('category_name' => 'Reviews,Articles,Blog'));
						
						//the loop
						if ($main_query -> have_posts() ) {
							$post_count = 0;
							while ($main_query->have_posts() && $post_count < 6){
								$main_query->the_post();
							?> 
								<div class='row blog_post'>
										<div class = 'innards'>
											<a href = '<?php the_permalink(); ?>' title = '<?php the_title_attribute();?>'>
												<?php the_post_thumbnail('thumbnail'); ?>
												<div>
													<h3><?php the_title(); ?></h3>
											</a>
													<p> by <?php the_author_posts_link(); ?> </p>
													<p><?php the_content(' Read More... '); ?></p>
											</div>
										</div>
									</a>
								</div>
							
						<?php
							$post_count++;
							} 
						}
						wp_reset_postdata();
					?>
					</div>
					<div class = 'col-lg-4'>
					<!-- Twitter Widget -->
					<a class="twitter-timeline hidden-xs"  href="https://twitter.com/search?q=from%3Asmeggco%20OR%20from%3Amractatus%20OR%20from%3Asmegghed%20OR%20from%3Apeent_smeggco%20OR%20from%3Afilmguildcast%20OR%20from%3APenandPaperCast" data-widget-id="849484194258583552">Tweets about from:smeggco OR from:mractatus OR from:smegghed OR from:peent_smeggco OR from:filmguildcast OR from:PenandPaperCast</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
					</div>
				</div>
			</div>
		<script> 
			$(document).ready(function(){
				
				$('#pnp').hover(function(){
					$(this).find('div#pnp_desc').slideDown('fast');
					}, function(){
						$(this).find('div#pnp_desc').slideUp('fast');
					});
				
				$('#tfg').hover(function(){
					$(this).find('div#tfg_desc').slideDown('fast');
					}, function(){
						$(this).find('div#tfg_desc').slideUp('fast');
					});
			});
			
			
		</script>
		</main>
<?php get_footer(); ?>