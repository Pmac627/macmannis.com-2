<?php /* header.php */
	define("Base_URL", $sb_dump['sb_base_url']);
	define("CDN_prefix", $sb_dump['sb_cdn_url']);
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
	$preload = "";

	if($page_dump['page_preload'] != NULL) {
		$preload_array = explode(";", $page_dump['page_preload']);
		foreach($preload_array as $pre) {
			if($preload == "") {
				$preload .= "'" . $CDN_prefix . $pre . "'";
			} else {
				$preload .= ",'" . $CDN_prefix . $pre . "'";
			}
		}
	}

	if($page_dump['page_index'] == 1) {
		$page_dump['page_index'] = "index";
	} else {
		$page_dump['page_index'] = "noindex";
	}

	if($page_dump['page_follow'] == 1) {
		$page_dump['page_follow'] = "follow";
	} else {
		$page_dump['page_follow'] = "nofollow";
	}
?>
<!DOCTYPE html>
<html lang="<?php echo $sb_dump['sb_language']; ?>">
<head>
	<meta charset="<?php echo $sb_dump['sb_charset']; ?>" />
	<title><?php echo $page_dump['page_title'] . ' :: ' . $sb_dump['sb_title']; ?></title>
	<meta http-equiv="Content-Type" content="<?php echo $sb_dump['sb_type']; ?>; charset=<?php echo $sb_dump['sb_charset']; ?>" />
	<meta name="Description" content="<?php echo $sb_dump['sb_description']; ?> <?php echo $page_dump['page_description']; ?>" />
	<meta name="Keywords" content="<?php echo $sb_dump['sb_keywords']; ?> <?php echo $page_dump['page_keywords']; ?>" />
	<meta name="robots" content="<?php echo $page_dump['page_index'] . ',' . $page_dump['page_follow']; ?>" />
	<meta name="google-site-verification" content="<?php echo $sb_dump['sb_google_verification']; ?>" />
	<base href="<?php echo $sb_dump['sb_canonical']; ?>" />
	<link href="<?php echo $sb_dump['sb_canonical'] . $page_dump['page_canonical'] ?>" rel="canonical" />
	<link type="text/css" href="<?php echo $CDN_prefix; ?>css/primary.css" rel="stylesheet" media="screen" />
	<link type="image/x-icon" href="<?php echo $CDN_prefix; ?>img/favicon.png" rel="icon" />
	<link type="image/x-icon" href="<?php echo $CDN_prefix; ?>img/favicon.png" rel="shortcut icon" />
	<link sizes="57x57" href="<?php echo $CDN_prefix; ?>img/macmannicon-57.jpg" rel="apple-touch-icon" />
	<link sizes="72x72" href="<?php echo $CDN_prefix; ?>img/macmannicon-72.jpg" rel="apple-touch-icon" />
	<link sizes="114x114" href="<?php echo $CDN_prefix; ?>img/macmannicon-114.jpg" rel="apple-touch-icon" />
	<link sizes="144x144" href="<?php echo $CDN_prefix; ?>img/macmannicon-144.jpg" rel="apple-touch-icon" />
	<link href="<?php echo $CDN_prefix; ?>img/macmannimage.jpg" rel="image_src" />
</head>
<body onload="preload(<?php echo $preload; ?>)">
	<div class="wrap">	
		<header class="header">
			<div class="container">
				<span class="logo-header" onclick="window.open('/', '_self');" title="<?php echo $sb_dump['sb_motto']; ?>"></span>
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
