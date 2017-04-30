<?php
/* Template Name: Articles Home*/
 get_header(); ?>
 <main>
 <div class = 'container-fluid'>
	<div class = 'row' style = 'margin-top: 20px'>
	
		<div class = 'col-lg-2'></div>
		<div class = 'col-lg-8'>
		<div id = 'RecentArticles' class = 'carousel slide' data-ride = 'carousel'>
		
		<ol class = 'carousel-indicators'>
			<li data-target = '#RecentArticles' data-slide-to = '0' class = 'active'></li>
			<li data-target = '#RecentArticles' data-slide-to = '1'></li>
			<li data-target = '#RecentArticles' data-slide-to = '2'></li>
			<li data-target = '#RecentArticles' data-slide-to = '3'></li>
		</ol>
		<div class="carousel-inner">
			<?php
				$RecentArticles1 = new WP_Query(array(
				'category_name' => 'Featured_Articles',
				'posts_per_page' => 1
				));
			while ( $RecentArticles1->have_posts() ) :
			$RecentArticles1->the_post();
			?>
			<div class="item active">
				<?php the_post_thumbnail('medium'); ?>
				<a href = '<?php the_permalink(); ?>' title = '<?php the_title_attribute();?>'>
					<div class = 'carousel-caption'>
						<h3>Featured Article: &nbsp<?php the_title();?></h3>
						<p><?php the_excerpt();?></p>
					</div>
				</a>
			</div>
			<?php endwhile; wp_reset_postdata(); ?>
			<?php
			$RecentArticles2 = new WP_Query(array(
			'category_name' => 'Featured_Articles',
			'offset' => 1
			));
			while ( $RecentArticles2->have_posts() ) :
			$RecentArticles2->the_post();
			?>
			<div class="item">
			<?php the_post_thumbnail('large'); ?>
				<a href = '<?php the_permalink(); ?>' title = '<?php the_title_attribute();?>'>
					<div class = 'carousel-caption'>
						<h3>Featured Article: &nbsp <?php the_title();?></h3>
						<p><?php the_excerpt();?></p>
					</div>
				</a>
			</div>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>
		
			<a class = 'left carousel-control' href = '#RecentArticles' role = 'button' data-slide = 'prev'>
				<span class = 'glyphicon glyphicon-chevron-left' aria-hidden = 'true'></span>
				<span class = 'sr-only'>Previous</span>
			</a>
			<a class = 'right carousel-control' href = '#RecentArticles' role = 'button' data-slide = 'next'>
				<span class = 'glyphicon glyphicon-chevron-right' aria-hidden = 'true'></span>
				<span class = 'sr-only'>Next</span>
			</a>
		</div>
	</div>
	<div class = 'col-lg-2'></div>
	</div>
	
	
	<div class = 'row content_block'>
		<div class = 'col-lg-2'></div>
		<div class = 'col-lg-8'>
			<?php $Articles = new WP_Query(array( 'category_name' => 'Reviews,Articles,Blog', 'cat' => '-11'));
			while ($Articles->have_posts() ){
				$Articles->the_post();?>
				<div class = 'row blog_post'>
						<div class = 'innards'>
							<a href = '<?php the_permalink(); ?>' title = '<?php the_title_attribute();?>'>
							<?php the_post_thumbnail('thumbnail'); ?>
							<div>
								<h3><?php the_title(); ?></h3>
								</a>
								<p> by <?php the_author_posts_link(); ?></p>
								<p><?php the_content('See more...'); ?></p>
							</div>
						</div>
				</div><?php
			} wp_reset_postdata(); ?>
		</div>
		<div class = 'col-lg-2'></div>
	</div>
</div>
</main>


<?php get_footer(); ?>