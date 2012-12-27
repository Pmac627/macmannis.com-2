<?php /* contact.php */
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');

	// Create find_ip function
	function find_ip() {
		$ip_var = ''; // Create ip_var variable
		if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip_var = $_SERVER['HTTP_CLIENT_IP']; // Adjust ip_var variable
		} elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip_var = $_SERVER['HTTP_X_FORWARDED_FOR']; // Adjust ip_var variable
		} elseif(!empty($_SERVER['REMOTE_ADDR'])) {
			$ip_var = $_SERVER['REMOTE_ADDR']; // Adjust ip_var variable
		} else {
			$ip_var = 'HIDDEN'; // Adjust ip_var variable
		}

		return $ip_var;
	}

	$ipv4_value = find_ip();
?>

			<section id="contact">
				<div class="container">
					<form class="contact-form" action="/home/contactprocess" method="post" name="contact_form" id="contact_form" autocomplete="off">
					<article class="contact-item">
						<p class="contact-text">
							Please use this form to get in contact with me about potential projects, questions, comments, critiques and other 
							such inqueries. Full, well thought out sentences allow for quicker, more accurate and relivant responses.
						</p>
						<?php echo validation_errors(); ?>
						<hr>
						<div class="contact-element">
							<label class="contact-label" for="contact_name" form="contact_form">Full Name</label>
							<input type="hidden" name="contact_ipv4" id="contact_ipv4" form="contact_form" value="<?php echo $ipv4_value; ?>" />
							<input class="contact-input" type="text" name="contact_name" id="contact_name" form="contact_form" placeholder="full name..." title="**Required** Please enter your Full Name so I can address you properly!" required="required" value="<?php echo set_value('contact_name'); ?>" />
						</div>
						<div class="contact-element">
							<label class="contact-label" for="contact_email" form="contact_form">Email</label>
							<input class="contact-input" type="email" name="contact_email" id="contact_email" form="contact_form" placeholder="email..." title="**Required** Please enter your Email so I can promptly reply!" required="required" value="<?php echo set_value('contact_email'); ?>" />
						</div>
						<div class="contact-element">
							<label class="contact-label" for="contact_message" form="contact_form">Message</label>
							<textarea class="contact-textarea" form="contact_form" name="contact_message" id="contact_message" placeholder="message..." title="*Required* Please enter your Questions and/or Comments so I can cry or dance around the room!" required="required"><?php echo set_value('contact_message'); ?></textarea>
						</div>
						<div class="contact-element">
							<input class="contact-button" type="submit" name="submit" form="contact_form" value="Send Message!" />
						</div>
						</article>
					</form>
				</div>
			</section>
