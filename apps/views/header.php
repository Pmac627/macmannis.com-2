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
<html lang="<?php echo $sb_dump['sb_language']; ?>" manifest="cache-manifest.mf">
<head>
	<meta charset="<?php echo $sb_dump['sb_charset']; ?>" />
	<meta http-equiv="Content-Type" content="<?php echo $sb_dump['sb_type']; ?>; charset=<?php echo $sb_dump['sb_charset']; ?>" />
	<title><?php echo $page_dump['page_title'] . ' :: ' . $sb_dump['sb_title']; ?></title>
	<meta name="Description" content="<?php echo $sb_dump['sb_description']; ?> <?php echo $page_dump['page_description']; ?>" />
	<meta name="Keywords" content="<?php echo $sb_dump['sb_keywords']; ?> <?php echo $page_dump['page_keywords']; ?>" />
	<meta name="robots" content="<?php echo $page_dump['page_index'] . ',' . $page_dump['page_follow']; ?>" />
	<meta name="google-site-verification" content="<?php echo $sb_dump['sb_google_verification']; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<base href="<?php echo $sb_dump['sb_canonical']; ?>" />
    <link href="humans.txt" rel="author" />
	<link href="<?php echo $sb_dump['sb_canonical'] . $page_dump['page_canonical'] ?>" rel="canonical" />
	<link type="text/css" href="<?php echo $CDN_prefix; ?>css/primary.css" rel="stylesheet" media="screen" />
	<link type="image/x-icon" href="<?php echo $CDN_prefix; ?>img/favicon.png" rel="icon" />
	<link type="image/x-icon" href="<?php echo $CDN_prefix; ?>img/favicon.png" rel="shortcut icon" />
	<link sizes="57x57" href="<?php echo $CDN_prefix; ?>img/macmannicon-57.jpg" rel="apple-touch-icon" />
	<link sizes="72x72" href="<?php echo $CDN_prefix; ?>img/macmannicon-72.jpg" rel="apple-touch-icon" />
	<link sizes="114x114" href="<?php echo $CDN_prefix; ?>img/macmannicon-114.jpg" rel="apple-touch-icon" />
	<link sizes="144x144" href="<?php echo $CDN_prefix; ?>img/macmannicon-144.jpg" rel="apple-touch-icon" />
	<link href="<?php echo $CDN_prefix; ?>img/macmannimage.jpg" rel="image_src" />
	<script type="text/javascript">
		var appCache = window.applicationCache;

		switch(appCache.status) {
			case appCache.UNCACHED: // UNCACHED == 0
				return 'UNCACHED';
				break;
			case appCache.IDLE: // IDLE == 1
				return 'IDLE';
				break;
			case appCache.CHECKING: // CHECKING == 2
				return 'CHECKING';
				break;
			case appCache.DOWNLOADING: // DOWNLOADING == 3
				return 'DOWNLOADING';
				break;
			case appCache.UPDATEREADY:  // UPDATEREADY == 4
				return 'UPDATEREADY';
				break;
			case appCache.OBSOLETE: // OBSOLETE == 5
				return 'OBSOLETE';
				break;
			default:
				return 'UKNOWN CACHE STATUS';
				break;
		};

		appCache.update(); // Attempt to update the user's cache.

		if(appCache.status == window.applicationCache.UPDATEREADY) {
			appCache.swapCache();  // The fetch was successful, swap in the new cache.
		}

		// Check if a new cache is available on page load.
		window.addEventListener('load', function(e) {
			window.applicationCache.addEventListener('updateready', function(e) {
				if (window.applicationCache.status == window.applicationCache.UPDATEREADY) {
					// Browser downloaded a new app cache.
					// Swap it in and reload the page to get the new hotness.
					window.applicationCache.swapCache();
					if(confirm('A new version of this site is available. Load it?')) {
						window.location.reload();
					}
				} else {
					// Manifest didn't changed. Nothing new to server.
				}
			}, false);
		}, false);

		function handleCacheEvent(e) {
			//...
		}

		function handleCacheError(e) {
			alert('Error: Cache failed to update!');
		};

		// Fired after the first cache of the manifest.
		appCache.addEventListener('cached', handleCacheEvent, false);
		// Checking for an update. Always the first event fired in the sequence.
		appCache.addEventListener('checking', handleCacheEvent, false);
		// An update was found. The browser is fetching resources.
		appCache.addEventListener('downloading', handleCacheEvent, false);
		// The manifest returns 404 or 410, the download failed,
		// or the manifest changed while the download was in progress.
		appCache.addEventListener('error', handleCacheError, false);
		// Fired after the first download of the manifest.
		appCache.addEventListener('noupdate', handleCacheEvent, false);
		// Fired if the manifest file returns a 404 or 410.
		// This results in the application cache being deleted.
		appCache.addEventListener('obsolete', handleCacheEvent, false);
		// Fired for each resource listed in the manifest as it is being fetched.
		appCache.addEventListener('progress', handleCacheEvent, false);
		// Fired when the manifest resources have been newly redownloaded.
		appCache.addEventListener('updateready', handleCacheEvent, false);
	</script>
</head>
<body onload="preload(<?php echo $preload; ?>)">
	<div class="wrap">	
		<header class="header">
			<div class="container">
				<span class="logo-header" onclick="window.open('/', '_self');" title="<?php echo $sb_dump['sb_motto']; ?>"></span>
				<nav class="header-nav">
					<ul class="header-nav-ul">
						<li><a href="/resume">resume</a></li>
						<li><a href="/portfolio">portfolio</a></li>
						<li><a href="/blog">blog</a></li>
						<li><a href="/home/contact">contact</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<section class="container">
