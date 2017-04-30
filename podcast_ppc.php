<?php
/* Template Name: PPC Podfeed */
 get_header(); ?>
<main>
	<div class = 'container-fluid' id = 'pod_page'>
		<div class = 'row'>
			<div class = 'col-lg-3'>
			</div>
			<div class = 'col-lg-6'>
				<div>
					<img src = '<?php bloginfo('template_directory');?>/images/pnp_banner.jpg' class = 'pod_banner' alt = 'Pen and Paper Podcast Banner' />
				</div>
			</div>
			<div class = 'col-lg-3'></div>
		</div>
		<div class = 'row'>
			<div class = 'col-lg-2'></div>
			<div class = 'col-lg-8 pod_desc'>
					<p>Join a zany cast of family and friends as they dive sword first into the amazing world of tabletop roleplaying games.</p>
			</div>
			<div class = 'col-lg-2'></div>
		</div>
		<div class = 'row'>
			<div class = 'col-lg-2'></div>
			<div class = 'col-lg-8'>
				<script src="https://www.buzzsprout.com/94114.js?player=small" type="text/javascript" charset="utf-8"></script>
			</div>
			<div class = 'col-lg-2'></div>
		</div>
	</div>
</main>
<?php get_footer(); ?>