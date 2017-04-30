<footer>
			<div class = 'row' id = 'footer'>
				<div class = 'col-lg-8' id = 'sitemap'>
					
					<ul class = 'sitemap'>
						<?php wp_nav_menu(); ?>
					</ul>
				</div>
				<div class = 'col-lg-4'>
					<div id = 'social_media'>
						<a href = 'https://www.facebook.com/smeggco/'><img src = '<?php bloginfo('template_directory');?>/images/facebook.png' alt 'facebook'/></a>
						<a href = 'https://twitter.com/smeggco?lang=en'><img src = '<?php bloginfo('template_directory');?>/images/twitter_bird.png' alt 'twitter'/></a>
						<a href = 'https://www.youtube.com/user/TheSmeggCo'><img src = '<?php bloginfo('template_directory');?>/images/youtube_video.png' alt 'youtube'/></a>
						<!-- Glyphs from https://www.iconfinder.com/iconsets/social-media-vol-1-1 -->
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>