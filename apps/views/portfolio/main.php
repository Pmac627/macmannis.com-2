<?php /* main.php */
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
	$page_post = $output = "";

	function row_calc($c, $n) {
		return ($c % $n);
	}

	foreach($portfolio_dump as $portfolio)
	{
		$output .= '<article class="portfolio-item">
				<header class="portfolio-preview">
					<h2 class="portfolio-title">' . $portfolio['portfolio_title'] . '</h2>
					<a class="portfolio-link" href="' . $portfolio['portfolio_url'] . '" target="_blank">
						<img class="portfolio-image" src="' . $CDN_prefix . 'img/portfolio/' . $portfolio['portfolio_image'] . '" alt="' . $portfolio['portfolio_subtitle'] . '" title="' . $portfolio['portfolio_subtitle'] . '" width="286" height="' . $portfolio['portfolio_image_height'] . '" />
					</a>
				</header>
				<section class="portfolio-text">
					<p class="portfolio-description">' . $portfolio['portfolio_description'] . '</p>
				</section>
				<footer class="portfolio-footer">
					<a class="portfolio-link-footer" href="/portfolio/details/' . str_replace(" ", "-", strtolower($portfolio['portfolio_title'])) . '">Check out an expanded case-study!</a>
				</footer>
			</article>';
	}

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

			<?php echo $page_post; ?>
			<div class="portfolio-container">
<?php
	echo $output;
?>
			</div>
