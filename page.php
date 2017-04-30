<?php
/*
Template Name: About
*/
 get_header(); ?>

<main>
	<div class = 'container-fluid'>
		<div class = 'row content_block'>
			<div class = 'col-lg-8  blog_post'>
				<?php while (have_posts()){
					the_post(); 
					the_content();
					the_tags();
				};
				wp_reset_query(); //resetting the page query
				?>
			</div>
			<div class = 'col-lg-4' id = 'twitter'>
				<a class="twitter-timeline hidden-xs"  href="https://twitter.com/search?q=from%3Asmeggco%20OR%20from%3Amractatus%20OR%20from%3Asmegghed%20OR%20from%3Apeent_smeggco%20OR%20from%3Afilmguildcast%20OR%20from%3APenandPaperCast" data-widget-id="849484194258583552">Tweets about from:smeggco OR from:mractatus OR from:smegghed OR from:peent_smeggco OR from:filmguildcast OR from:PenandPaperCast</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
				
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>