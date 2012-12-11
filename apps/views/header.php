<?php /* header.php */
	define("Base_URL", $sb_dump['sb_base_url']);
	define("CDN_prefix", $sb_dump['sb_cdn_url']);
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
?>
<!DOCTYPE html>
<html lang="<?php echo $sb_dump['sb_language']; ?>">
<head>
	<meta charset="<?php echo $sb_dump['sb_charset']; ?>" />
	<title><?php echo $sb_dump['sb_title']; ?></title>
	<meta http-equiv="Content-Type" content="<?php echo $sb_dump['sb_type']; ?>; charset=<?php echo $sb_dump['sb_charset']; ?>" />
	<meta name="Description" content="<?php echo $sb_dump['sb_description']; ?>" />
	<meta name="Keywords" content="<?php echo $sb_dump['sb_keywords']; ?>" />
	<link type="text/css" href="<?php echo $CDN_prefix; ?>css/normalize-min.css" rel="stylesheet" media="screen" />
	<link type="text/css" href="<?php echo $CDN_prefix; ?>css/primary.css" rel="stylesheet" media="screen" />
	<link type="image/x-icon" href="<?php echo $CDN_prefix; ?>img/favicon.png" rel="icon" />
	<link type="image/x-icon" href="<?php echo $CDN_prefix; ?>img/favicon.png" rel="shortcut icon" />
	<link sizes="57x57" href="<?php echo $CDN_prefix; ?>img/macmannicon-57.jpg" rel="apple-touch-icon" />
	<link sizes="72x72" href="<?php echo $CDN_prefix; ?>img/macmannicon-72.jpg" rel="apple-touch-icon" />
	<link sizes="114x114" href="<?php echo $CDN_prefix; ?>img/macmannicon-114.jpg" rel="apple-touch-icon" />
	<link sizes="144x144" href="<?php echo $CDN_prefix; ?>img/macmannicon-144.jpg" rel="apple-touch-icon" />
	<link href="<?php echo $CDN_prefix; ?>img/macmannimage.jpg" rel="image_src" />
</head>
<body onload="preload('<?php echo $CDN_prefix; ?>img/large/inevo360.jpg', '<?php echo $CDN_prefix; ?>img/large/rwc.jpg', '<?php echo $CDN_prefix; ?>img/large/omh.jpg', '<?php echo $CDN_prefix; ?>img/large/awpa.jpg', '<?php echo $CDN_prefix; ?>img/large/ikb.jpg', '<?php echo $CDN_prefix; ?>img/large/drm.jpg', '<?php echo $CDN_prefix; ?>img/large/ic.jpg', '<?php echo $CDN_prefix; ?>img/large/tdd.jpg');">
	<div class="wrap">	
		<header class="header">
			<div class="container">
				<span class="logo-header" onclick="window.open('/', '_self');"></span>
				<nav class="header-nav">
					<ul class="header-nav-ul">
						<li><a href="/resume">about</a></li>
						<li><a href="/portfolio">portfolio</a></li>
						<li><a href="/blog">blog</a></li>
						<li><a href="/home/contact">contact</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<section class="container">
