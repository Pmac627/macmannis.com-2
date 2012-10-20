<?php /* main.php */
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
	function is_odd($n) {
		return (boolean)($n % 2);
	}
?>

			<section id="portfolio-main">
				<div class="container">
					<div class="portfolio-left">
<?php
	foreach($portfolio_dump as $portfolio)
	{
		if(is_odd($portfolio['portfolio_id']))
		{
?>
						<article class="portfolio-item">
							<div class="portfolio-preview">
								<h2 class="portfolio-title"><?php echo $portfolio['portfolio_title']; ?></h2>
								<a class="portfolio-link" href="<?php echo $portfolio['portfolio_url']; ?>">
									<img class="portfolio-image" src="<?php echo $CDN_prefix; ?>img/portfolio/<?php echo $portfolio['portfolio_image']; ?>" alt="<?php echo $portfolio['portfolio_subtitle']; ?>" title="<?php echo $portfolio['portfolio_subtitle']; ?>" />
								</a>
							</div>
							<div class="portfolio-text">
								<p class="portfolio-description"><?php echo $portfolio['portfolio_description']; ?></p>
							</div>
						</article>
<?php
		}
	}
?>
					</div>
					<div class="portfolio-right">
<?php
	foreach($portfolio_dump as $portfolio)
	{
		if(!is_odd($portfolio['portfolio_id']))
		{
?>
						<article class="portfolio-item">
							<div class="portfolio-preview">
								<h2 class="portfolio-title"><?php echo $portfolio['portfolio_title']; ?></h2>
								<a class="portfolio-link" href="<?php echo $portfolio['portfolio_url']; ?>">
									<img class="portfolio-image" src="<?php echo $CDN_prefix; ?>img/portfolio/<?php echo $portfolio['portfolio_image']; ?>" alt="<?php echo $portfolio['portfolio_subtitle']; ?>" title="<?php echo $portfolio['portfolio_subtitle']; ?>" />
								</a>
							</div>
							<div class="portfolio-text">
								<p class="portfolio-description"><?php echo $portfolio['portfolio_description']; ?></p>
							</div>
						</article>
<?php
		}
	}
?>
					</div>
				</div>
			</section>
