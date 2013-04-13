<?php /* contactsuccess.php */
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
			<section id="contact">
				<div class="container">
					<article class="contact-item">
						<p class="contact-text">
							Your contact for has been successfully submitted! I appreciate the notes and will do my best to get back to you ASAP.
						</p>
					</article>
				</div>
			</section>
		</section>
