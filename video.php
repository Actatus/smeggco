<?php
/*
Template Name: Videos
*/
 get_header(); ?>
<main>
	<div class = 'row video'>
		<div class = 'col-lg-3'></div>
		<div class = 'col-lg-6' id = 'twitch'>
			 <iframe
				src="http://player.twitch.tv/?channel=smeggco"
				frameborder="0"
				scrolling="no"
				allowfullscreen="true"
				width = '100%'
				height = '375px'>
			</iframe>
		</div>
		<div class = 'col-lg-3'></div>
	</div>
	<div class = 'row content_block'>
		<div class = 'col-lg-8 col-xs-12'>
			<?php $games_query = new WP_Query (array ('tags' => 'Gaming'));
				$post_count = 0;
				if ($games_query->have_posts()){
					while ($games_query->have_posts()){
						$games_query -> the_post(); ?>
						<div class = 'row blog_post'>
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
						</div>
						<?php $post_count++;
					}
				}
				else { ?>
					<div class = 'row blog_post'>
						<div class = 'innards'>
							<p> Sorry, that's all for now! </p>
						</div>
					</div>
				<?php }?>
		</div>
		<div class = 'col-lg-4 col-xs-12'>
			<?php 
			$yt_query = new WP_Query (array ('category_name' => 'yt_video'));
			if ($yt_query->have_posts()){
				$postcount_vids = 0;
				while ($yt_query->have_posts() && $postcount_vids < 5){
					$yt_query->the_post();?>
					<div class = 'row video'><?php the_content(); ?></div>
						
				<? $postcount_vids++;
				}
			}?>
		</div>
	</div>
</main>

<?php get_footer(); ?>