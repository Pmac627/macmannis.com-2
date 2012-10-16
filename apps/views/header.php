<?php
	define("Base_URL", $sb_dump['sb_base_url']);
	define("CDN_prefix", $sb_dump['sb_cdn_url']);
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
?>
<!DOCTYPE html>
<!-- Modernizr.js identifer classes -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" xml:lang="<?php echo $sb_dump['sb_language']; ?>" lang="<?php echo $sb_dump['sb_language']; ?>"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" xml:lang="<?php echo $sb_dump['sb_language']; ?>" lang="<?php echo $sb_dump['sb_language']; ?>"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" xml:lang="<?php echo $sb_dump['sb_language']; ?>" lang="<?php echo $sb_dump['sb_language']; ?>"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" xml:lang="<?php echo $sb_dump['sb_language']; ?>" lang="<?php echo $sb_dump['sb_language']; ?>"><!--<![endif]-->
<head>
	<meta charset="<?php echo $sb_dump['sb_charset']; ?>" />
	<title><?php echo $sb_dump['sb_title']; ?></title>
	<meta http-equiv="Content-Type" content="<?php echo $sb_dump['sb_type']; ?>; charset=<?php echo $sb_dump['sb_charset']; ?>" />
	<meta name="Description" content="<?php echo $sb_dump['sb_description']; ?>" />
	<meta name="Keywords" content="<?php echo $sb_dump['sb_keywords']; ?>" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $CDN_prefix; ?>css/normalize-min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $CDN_prefix; ?>css/primary.css" />
<?php
	// If this is the homepage (either / or /home only), request the slideshow CSS file.
	if($this->uri->segment(1) == NULL || $this->uri->segment(1) == 'home' && $this->uri->segment(2) == NULL) {
?>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $CDN_prefix; ?>css/slideshow.css" />
<?php
	} // END IF
?>
	<link rel="icon" type="image/x-icon" href="<?php echo $CDN_prefix; ?>img/favicon.png" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $CDN_prefix; ?>img/favicon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $CDN_prefix; ?>img/macmannicon-57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $CDN_prefix; ?>img/macmannicon-72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $CDN_prefix; ?>img/macmannicon-114.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $CDN_prefix; ?>img/macmannicon-144.png" />
	<link rel="image_src" href="<?php echo $CDN_prefix; ?>img/macmannimage.png" />
	<script src="<?php echo $CDN_prefix; ?>js/fout.js"></script>
	<script type="text/javascript">
		fbg.hideFOUT('asap');
	</script>
</head>
<body class="index">
<!-- Maybe, just maybe, some of those old IE users will update... maybe. -->
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
	<script>
		// http://rogieking.com/post/9089341529/html5boilerplatejs
		var b = document.documentElement;
		b.setAttribute('data-useragent', navigator.userAgent);
		b.setAttribute('data-platform', navigator.platform );
	</script>
	<div id="main-wrap">
		<div class="everything">
			<header>
				<div class="container">
					<h1>
						<a href="/" title="<?php echo $sb_dump['sb_motto']; ?>">MacMannis.com</a>
					</h1>
					<nav>
						<ul>
							<li id="header_nav_home">
								<a href="/">Home</a>
							</li>
							<li id="header_nav_about">
								<a href="/home/about">About</a>
							</li>
							<li id="header_nav_blog">
								<a href="/blog/home">Blog</a>
							</li>
							<li id="header_nav_resume">
								<a href="/resume">Resume</a>
							</li>
							<li id="header_nav_portfolio">
								<a href="/portfolio" class="fake-link">Portfolio</a>
								<div class="dropdown-wrap">
									<div class="dropdown">
										<ul class="portfolio">
<?php
	// List live portfolio examples here.
	foreach($portfolio_list AS $portfolio)
	{
?>
											<li>
												<a target="_blank" href="<?php echo $portfolio['portfolio_url']; ?>">
													<span class="icon"></span>
													<h3><?php echo $portfolio['portfolio_title']; ?></h3>
													<p><?php echo $portfolio['portfolio_subtitle']; ?></p>
												</a>
											</li>
<?php
	} // END FOREACH LOOP
?>
										</ul>
										<div class="nip"></div>
									</div>
								</div>
							</li>
							<li id="header_nav_contact">
								<a href="/home/contact">Contact</a>
							</li>
						</ul>
					</nav>
					<div class="header-social-media">
						<span class="social-icon" onclick="window.open('//www.facebook.com/MacMannis');"><img src="<?php echo $CDN_prefix; ?>img/facebooklogo.png" alt="Like MacMannis.com On Facebook" width="9" height="17" /></span>
						<span class="social-icon" onclick="window.open('//twitter.com/#!/pat_macmannis');"><img src="<?php echo $CDN_prefix; ?>img/twitterlogo.png" alt="Follow MacMannis.com On Twitter" width="10" height="14" /></span>
						<span class="social-icon" onclick="window.open('//plus.google.com/b/114897654058958447509/');"><img src="<?php echo $CDN_prefix; ?>img/googlepluslogo.png" alt="Add MacMannis.com As A Friend On Google Plus" width="10" height="15" /></span>
						<span class="social-icon" onclick="window.open('//www.linkedin.com/pub/patrick-macmannis/40/b08/656');"><img src="<?php echo $CDN_prefix; ?>img/linkedinlogo.png" alt="Connect With MacMannis.com On Linked In" width="14" height="14" /></span>
					</div>
				</div>
			</header>
