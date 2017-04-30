<?php
/**
Template Name: Single

*/

 get_header(); ?>
<main>
	<div class = 'container-fluid'>
		<div class = 'row container_block'>
			<div class = 'col-lg-2'></div>
			<div class = 'col-lg-8 blog_post'>
			<?php while(have_posts()){
				the_post(); ?>
				<h3><?php the_title();?></h3>
				<p> by <?php the_author_posts_link(); ?> </p>
				<p> <?php the_content(); ?> </p>
				<p style = 'margin-top: 10px'> <?php the_tags(); ?></p><?php
				wp_reset_query();
			}; ?>
			
			</div>
			<div class = 'col-lg-2'></div>
		</div>
	</div>
</main>
<?php get_footer(); ?>