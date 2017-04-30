<?php
/*
Template Name: Search Page
*/
 get_header(); ?>

<main>
	<div class = 'container-fluid'>
		<div class = 'row content_block'>
			<div class = 'col-lg-10'>
				<?php global $query_string;
				
				$query_args = explode ('&', $query_string);
				$search_query = array();
				
				if (strlen($query_string) > 0) {
					foreach($query_args as $key => $string){
						$query_split = explode('=',$string);
						$search_query[$query_split[0]] = urldecode ($query_split[1]);
					}
				}
				
				$search = new WP_Query($search_query);
				
				while ($search->have_posts()){
								$search->the_post();
							?> 
								<div class='row blog_post'>
									<div class = 'innards'>
										<a href = '<?php the_permalink(); ?>' title = '<?php the_title_attribute();?>'>
										<?php the_post_thumbnail('thumbnail'); ?>
										<div>
											<h3><?php the_title(); ?></h3>
											</a>
											<p> by <?php the_author_posts_link(); ?> </p>
											<p><?php the_content('See more...'); ?></p>
										</div>
									</div>
								</div>
						<?php
							} ?>
			</div>
			<div class - 'col-lg-2'>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>