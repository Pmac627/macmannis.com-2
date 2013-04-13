<?php /* main.php */
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
	$page_post = "";

	if($post_dump != NULL) {
		$page_post = '<section>
				<div class="container">
			';
		foreach($post_dump as $p) {
			if($p['content_title'] != '') {
				$page_post .= '<h2 class="page-post-title">' . $p['content_title'] . '</h2>
				';
			}

			if($p['content_subtitle'] != '') {
				$page_post .= '<h3 class="page-post-subtitle">' . $p['content_subtitle'] . '</h3>
				';
			}

			if($p['content_body'] != '') {
				$page_post .= '<p class="page-post-body">' . $p['content_body'] . '</p>
				';
			}
		}

		$page_post .= '</div>
			</section>
			';
	}
?>

		<section class="container">
			<?php echo $page_post; ?>
			<div class="code-left">
				<article class="code-item">
					<header class="code-preview">
						<h2 class="code-title">GitHub</h2>
						<a class="code-link" href="//github.com/Pmac627/" target="_blank">
							<img class="code-image" src="<?php echo $CDN_prefix; ?>img/github.jpg" alt="GitHub - Build software better, together." title="GitHub - Build software better, together. Powerful collaboration, review, and code management for open source and private development projects." width="350" height="350" />
						</a>
					</header>
					<section class="code-text">
						<p class="code-description">Check out my GitHub repos to see large projects that I have made or am working on. I plan on adding much, much more to my account when I get the time. Check back often to see all that I have done and feel free to fork.</p>
					</section>
				</article>
			</div>
			<div class="code-right">
				<article class="code-item">
					<header class="code-preview">
						<h2 class="code-title">CodePen</h2>
						<a class="code-link" href="//codepen.io/Pmac627" target="_blank">
							<img class="code-image" src="<?php echo $CDN_prefix; ?>img/codepen.jpg" alt="CodePen - Build, Explore, and Teach the Web, Instantly." title="CodePen - Build, Explore, and Teach the Web, Instantly." width="350" height="350" />
						</a>
					</header>
					<section class="code-text">
						<p class="code-description">Check out my CodePen pens to see small projects and proof-of-concepts that I have made or am working on. I plan on adding much, much more to my account when I get the time. Check back often to see all that I have done and feel free to comment, heart and fork.</p>
					</section>
				</article>
			</div>
		</section>
