<!DOCTYPE html>
<html>
	<head>
		<meta charset = 'utf-8'/>
		<meta name = 'lang' content = 'eng'/>
		<meta name = 'viewport' content = 'width=device-width, initial-scale=1'/>
		
		<!-- bootstrap here -->
		<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
		<title>Welcome to SmeggCo!</title>
		<meta name = 'description'  content = "SmeggCo: Home to great podcasts like The Film Guild and Pen &amp; Paper Cast!"/>
		<meta name ='keywords' content = "SmeggCo, Podcasts, Pen and Paper, Tabletop, Film, Horror, Film reviews, Fred Stollery, David Stollery, Jason Stollery"/>
		
	
	
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></script>
		<script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link rel = 'stylesheet' href = "<?php bloginfo('template_directory');?>/style.css">
		<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-54841847-2', 'auto');
	ga('send', 'pageview');

</script>
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<div class = 'container-fluid'>
				<div class = 'row'>
					<div class = 'col-lg-2 col-xs-12'>
						<div id = 'logo'>
							<a href = 'http://www.smeggco.com'>
								<img src = '<?php bloginfo('template_directory');?>/images/logo.png' class = 'img-responsive' alt = 'smeggco logo' />
							</a>
						</div>
					</div>
					<div class = 'col-lg-6 hidden-xs spacer'></div>
						<div class = 'col-lg-3 '>
							<div class = 'search hidden-xs'>
								<?php get_search_form(); ?>
							</div>
							<div>
								<ul class = 'nav'>
									<?php wp_nav_menu(); ?>
								</ul>
							</div>
						</div>
				</div>	
			</div>
		</header>