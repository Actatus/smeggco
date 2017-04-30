<?php get_header(); ?>

<main>
	<div class = 'container-fluid'>
		<div class = 'row content_block'>
			<div class = 'col-lg-8'>
				<?php while (have_posts()){
					the_post(); ?>
					<div class = 'row blog_post'>
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
			<div class = 'col-lg-4'>
			    <a class="twitter-timeline hidden-xs"  href="https://twitter.com/search?q=from%3Asmeggco%20OR%20from%3Amractatus%20OR%20from%3Asmegghed%20OR%20from%3Apeent_smeggco%20OR%20from%3Afilmguildcast%20OR%20from%3APenandPaperCast" data-widget-id="849484194258583552">Tweets about from:smeggco OR from:mractatus OR from:smegghed OR from:peent_smeggco OR from:filmguildcast OR from:PenandPaperCast</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>