<?php /* details.php */
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
	$page_post = $details = "";

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
