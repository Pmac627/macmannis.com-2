<?php /* welcome.php */
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
	$page_post = "";

	if($post_dump != NULL) {
		$page_post = '<section class="homepage-post">
				<div>
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

			<div class="container-small gallery">
				<div class="main-image" title="">
					<span class="popup-text-title"><a href="#" class="popup-text-link"></a></span>
				</div>
				<div class="small-image" id="s-img-1" data-img="<?php echo $CDN_prefix; ?>img/large/inevo360.jpg" title="eWell" data-link="portfolio/details/ewell" data-height="681"></div>
				<div class="small-image" id="s-img-2" data-img="<?php echo $CDN_prefix; ?>img/large/rwc.jpg" title="Radiant Window Cleaning" data-link="portfolio/details/radiant-window-cleaning" data-height="810"></div>
				<div class="small-image" id="s-img-3" data-img="<?php echo $CDN_prefix; ?>img/large/omh.jpg" title="Our Mission House Publishing" data-link="portfolio/details/our-mission-house-publishing" data-height="787"></div>
				<div class="small-image" id="s-img-4" data-img="<?php echo $CDN_prefix; ?>img/large/awpa.jpg" title="Appliance World PA" data-link="portfolio/details/appliance-world" data-height="727"></div>
				<div class="small-image" id="s-img-5" data-img="<?php echo $CDN_prefix; ?>img/large/ikb.jpg" title="Innovative Kitchen &amp; Bath" data-link="portfolio/details/innovative-kitchen-and-bath" data-height="739"></div>
				<div class="small-image" id="s-img-6" data-img="<?php echo $CDN_prefix; ?>img/large/2to1.jpg" title="Metragenix" data-link="portfolio/details/metragenix" data-height="950"></div>
				<div class="small-image" id="s-img-7" data-img="<?php echo $CDN_prefix; ?>img/large/ic.jpg" title="International Conquest" data-link="portfolio/details/international-conquest" data-height="805"></div>
				<div class="small-image" id="s-img-8" data-img="<?php echo $CDN_prefix; ?>img/large/tdd.jpg" title="Three Dames Dreamin'" data-link="portfolio/details/three-dames-dreamin" data-height="789"></div>
			</div>
			<div class="lower-content">
				<h2 class="motto">
					<?php echo $sb_dump['sb_motto']; ?>
				</h2>
				<article class="box-preview" id="php">
					<a class="box-preview-caption" href="/code">
						<span class="box-preview-text"><strong>Code!</strong><br><br>Check Out My Coding Goodness!</span>
					</a>
				</article>
				<article class="box-preview" id="me">
					<a class="box-preview-caption" href="/resume">
						<span class="box-preview-text"><strong>Resume!</strong><br><br>How To Hire This Web Architect Today!</span>
					</a>
				</article>
				<article class="box-preview" id="blog">
					<a class="box-preview-caption" href="/blog">
						<span class="box-preview-text"><strong>Blog!</strong><br><br>Go Figure. Gotta Put That Writing-based History Degree To Use Somehow!</span>
					</a>
				</article>
			</div>
			<?php echo $page_post; ?>
