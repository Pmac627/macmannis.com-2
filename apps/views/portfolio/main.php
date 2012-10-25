<?php /* main.php */
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
	$count1 = $count2 = $count3 = 0;
?>

			<section id="portfolio-main">
				<div class="container">
					<div class="portfolio-left">
<?php
	foreach($portfolio_dump as $portfolio)
	{
		$count1++;
		if($count1 == 1 || $count1 == 4 || $count1 == 7 || $count1 == 10)
		{
?>
						<article class="portfolio-item">
							<div class="portfolio-preview">
								<h2 class="portfolio-title"><?php echo $portfolio['portfolio_title']; ?></h2>
								<a class="portfolio-link" href="<?php echo $portfolio['portfolio_url']; ?>" target="_blank">
									<img class="portfolio-image" src="<?php echo $CDN_prefix; ?>img/portfolio/<?php echo $portfolio['portfolio_image']; ?>" alt="<?php echo $portfolio['portfolio_subtitle']; ?>" title="<?php echo $portfolio['portfolio_subtitle']; ?>" width="286" height="<?php echo $portfolio['portfolio_image_height']; ?>" />
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
					<div class="portfolio-center">
<?php
	foreach($portfolio_dump as $portfolio)
	{
		$count2++;
		if($count2 == 2 || $count2 == 5 || $count2 == 8 || $count2 == 11)
		{
?>
						<article class="portfolio-item">
							<div class="portfolio-preview">
								<h2 class="portfolio-title"><?php echo $portfolio['portfolio_title']; ?></h2>
								<a class="portfolio-link" href="<?php echo $portfolio['portfolio_url']; ?>" target="_blank">
									<img class="portfolio-image" src="<?php echo $CDN_prefix; ?>img/portfolio/<?php echo $portfolio['portfolio_image']; ?>" alt="<?php echo $portfolio['portfolio_subtitle']; ?>" title="<?php echo $portfolio['portfolio_subtitle']; ?>" width="286" height="<?php echo $portfolio['portfolio_image_height']; ?>" />
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
		$count3++;
		if($count3 == 3 || $count3 == 6 || $count3 == 9 || $count3 == 12)
		{
?>
						<article class="portfolio-item">
							<div class="portfolio-preview">
								<h2 class="portfolio-title"><?php echo $portfolio['portfolio_title']; ?></h2>
								<a class="portfolio-link" href="<?php echo $portfolio['portfolio_url']; ?>" target="_blank">
									<img class="portfolio-image" src="<?php echo $CDN_prefix; ?>img/portfolio/<?php echo $portfolio['portfolio_image']; ?>" alt="<?php echo $portfolio['portfolio_subtitle']; ?>" title="<?php echo $portfolio['portfolio_subtitle']; ?>" width="286" height="<?php echo $portfolio['portfolio_image_height']; ?>" />
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
