<?php /* welcome.php */
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
	$slide_count = 0;
?>

			<script>
				document.body.className += ' loading'
			</script>
			<section id="clients">
				<div class="frame">
					<div class="list">
						<div class="list-container">
<?php
	// Generate slideshow data for display
	// NOTE: Consider creating in MODEL or CONTROLLER for cleaner VIEW file
	foreach($slide_array AS $slide)
	{
?>
							<div class="screenshot-container<?php echo ($slide_count == 0) ? " first" : ""; ?>" data-index="<?php echo $slide_count; ?>">
								<div class="screenshot" data-image-big="<?php echo $CDN_prefix; ?>img/large/<?php echo $slide['slide_large_url']; ?>" data-image="<?php echo $CDN_prefix; ?>img/small/<?php echo $slide['slide_small_url']; ?>"></div>
							</div>
<?php
		$slide_count++;
	} // END FOREACH LOOP
?>
						</div>
						<div class="shadow"></div>
					</div>
					<div class="nav">
						<div class="title">
<?php
	// Generate slideshow information for display
	// NOTE: Consider creating in Model or Controller for cleaner VIEW file
	// 		 and for reuse in template below
	foreach($slide_array AS $slide)
	{
?>
							<div class="screenshot-title"><?php echo $slide['slide_name']; ?></div>
<?php
	} // END FOREACH LOOP
?>
						</div>
						<div class="dots count<?php echo $slide_count; ?>">
							<ul>
<?php
	// Create bullet points equal to the number of slides
	// NOTE: Consider creating in Model or Controller for cleaner VIEW file
	// 		 and for reuse in template below. Combine with above FOREACH.
	for($b = 1; $b <= $slide_count; $b++)
	{
?>
								<li>&bull;</li>
<?php
	} // END FOR LOOP
?>
							</ul>
						</div>
						<div class="next">
							<a>Next Project</a>
						</div>
					</div>
					<div class="spinner"></div>
				</div>
			</section>
			<div id="main" role="main">
				<div class="container">
					<h2>
						Web Architecture For A Semantic Web
					</h2>
					<section class="pitch blog antiboost">
						<div class="content">
							<p class="learn_more">
								<a href="/blog">Check Out My Latest Blog Posts!</a>
							</p>
						</div>
					</section>
					<section class="pitch phpcode">
						<div class="content">
							<p class="learn_more">
								<a href="/code">Explore My Code Repository!</a>
							</p>
						</div>
					</section>
					<section class="pitch resume boost">
						<div class="content">
							<p class="learn_more">
								<a href="/home/about">Meet The Developer!</a>
							</p>
						</div>
					</section>
				</div>
			</div>
			<script id="nav_template" type="text/html">
				<div class="nav">
					<div class="title">
<?php
	// Generate slideshow information for display
	// NOTE: Consider creating in Model or Controller for cleaner VIEW file
	foreach($slide_array AS $slide)
	{
?>
						<div class="screenshot-title"><?php echo $slide['slide_name']; ?></div>
<?php
	} // END FOREACH LOOP
?>
					</div>
					<div class="dots count<?php echo $slide_count; ?>">
						<ul>
<?php
	// Create bullet points equal to the number of slides
	// NOTE: Consider creating in Model or Controller for cleaner VIEW file
	for($b = 1; $b <= $slide_count; $b++)
	{
?>
							<li>&bull;</li>
<?php
	} // END FOR LOOP
?>
						</ul>
					</div>
					<div class="next">
						<a>Next Project</a>
					</div>
				</div>
			</script>
			<script type="text/javascript" src="<?php echo $CDN_prefix; ?>js/jquery-min.js"></script>
			<script type="text/javascript">
				// When the page has loaded, mark it as so to being the festivities
				$(window).load(function() {
					if($(document.body).hasClass("loading")) {
						$(document.body).removeClass("loading").addClass("loaded");
					}
				});
			</script>
			<script type="text/javascript" src="<?php echo $CDN_prefix; ?>js/jqueryui.js"></script>
			<script type="text/javascript" src="<?php echo $CDN_prefix; ?>js/modernizr-min.js"></script>
