<?php /* footer.php */
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
?>

		</section>
	</div>
	<footer class="footer">
		<div class="footer-container">
			<span class="logo-footer" onclick="window.open('/', '_self');" title="<?php echo $sb_dump['sb_motto']; ?>"></span>
			<nav class="footer-nav">
				<ul class="footer-nav-ul">
					<li><a href="/resume">about</a></li>
					<li><a href="/portfolio">portfolio</a></li>
					<li><a href="/blog">blog</a></li>
					<li><a href="/home/contact">contact</a></li>
					<li><a href="//www.facebook.com/MacMannis">facebook</a></li>
					<li><a href="//twitter.com/pat_macmannis">twitter</a></li>
					<li><a href="//plus.google.com/b/114897654058958447509/">google+</a></li>
					<li><a href="//github.com/Pmac627/">github</a></li>
					<li><a href="//codepen.io/Pmac627">codepen</a></li>
				</ul>
			</nav>
			<span class="footer-copyright">macmannis.com &copy; 2012</span>
		</div>
	</footer>
	<div class="blackout"></div>
	<script type="text/javascript" src="<?php echo $CDN_prefix; ?>js/jquery-min.js"></script>
	<script type="text/javascript">
		// Preload Necessary Images
		function preload() {
			var d = document;
			if(d.images) {
				if(!d.p) {
					d.p = new Array();
					var i, j = d.p.length, a = preload.arguments;
					for(i = 0; i < a.length; i++) {
						if(a[i].indexOf("#") != 0) {
							d.p[j] = new Image; d.p[j++].src = a[i];
						}
					}
				}
			}
		}
<?php
	// If this is the homepage (either / or /home only), input the slider JS.
	if($this->uri->segment(1) == NULL || $this->uri->segment(1) == 'home' && $this->uri->segment(2) == NULL) {
?>
		$(document).ready(function () {
			// Center Image Popup
			$('.main-image').click(function(me){
				if (me.target == this && $(this).attr('title') != "") { // Makes Sure Clicking Title Bar Doesn't Trigger Closing
					var height = $(this).attr('data-height');
					$(this).toggleClass('main-image-full');
					if($('.main-image').is('.main-image-full')) {
						$('.main-image-full').css("height", height + "px");
					} else {
						$(".main-image").css("height", "700px");
					}
					$(".blackout").toggleClass('blackout-on');
				}
			});

			// Kill Popup Via Blackout Background
			$('.blackout').click(function(){
				$(".main-image").toggleClass('main-image-full');
				$(".main-image").css("height", "700px");
				$(this).toggleClass('blackout-on');
			});

			// Change The Images
			$('.small-image').click(function() {
				var img = $(this).attr('data-img');
				var title = $(this).attr('title');
				var link = $(this).attr('data-link');
				var height = $(this).attr('data-height');
				$(".main-image").fadeOut(1000, function () {
					$(this).css("background", "#FFFFFF top center no-repeat url('" + img + "')").fadeIn(1000).attr("data-height", height).attr("title", title);
					$(".popup-text-title").html(title + '<a href="' + link + '" class="popup-text-link">Check Out The Case Study!</a>');
				});
			});
		});
<?php
	} // END IF
?>
	</script>
</body>
</html>