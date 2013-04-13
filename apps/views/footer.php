<?php /* footer.php */
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
?>

	</div>
	<footer class="footer">
		<div class="footer-container">
			<span class="logo-footer" onclick="window.open('/', '_self');" title="<?php echo $sb_dump['sb_motto']; ?>"></span>
			<nav class="footer-nav">
				<ul class="footer-nav-ul">
					<li><a href="/resume">resume</a></li>
					<li><a href="/portfolio">portfolio</a></li>
					<li><a href="/blog">blog</a></li>
					<li><a href="/home/contact">contact</a></li>
					<li><a href="//www.facebook.com/MacMannis/">facebook</a></li>
					<li><a href="//twitter.com/pat_macmannis/">twitter</a></li>
					<li><a href="//plus.google.com/116308610031809394287?rel=author">google+</a></li>
					<li><a href="//github.com/Pmac627/">github</a></li>
					<li><a href="//codepen.io/Pmac627/">codepen</a></li>
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
			$('.main-image').bind("click touch", function(me){
				if(me.target == this && $(this).attr('title') != "") { // Makes Sure Clicking Title Bar Doesn't Trigger Closing
					var height = $(this).attr('data-height');
					$(this).toggleClass('main-image-full');
					if($(this).is('.main-image-full')) {
						if(window.innerWidth >= 320 && window.innerWidth <= 479) {
							var newHeight = (height * 0.266);
							$('.main-image-full').css("height", newHeight + "px").css("background-size", "100% 100%");
						} else if(window.innerWidth >= 480 && window.innerWidth <= 767) {
							var newHeight = (height * 0.4);
							$('.main-image-full').css("height", newHeight + "px").css("background-size", "100% 100%");
						} else if(window.innerWidth >= 768 && window.innerWidth <= 1139) {
							var newHeight = (height * 0.64);
							$('.main-image-full').css("height", newHeight + "px").css("background-size", "100% 100%");
						} else {
							$('.main-image-full').css("height", height + "px").css("background-size", "100% 100%");
						}
					} else {
						if(window.innerWidth >= 320 && window.innerWidth <= 479) {
							$(this).css("height", "280px").css("background-size", "409px auto");
						} else if(window.innerWidth >= 480 && window.innerWidth <= 767) {
							$(this).css("height", "280px").css("background-size", "409px auto");
						} else if(window.innerWidth >= 768 && window.innerWidth <= 1139) {
							$(this).css("height", "448px").css("background-size", "760px auto");
						} else {
							$(this).css("height", "700px").css("background-size", "1024px auto");
						}
					}
					$(".blackout").toggleClass('blackout-on');
				}
			});

			// Kill Popup Via Blackout Background
			$('.blackout').bind("click touch", function(){
				$(".main-image").toggleClass('main-image-full');
				if(window.innerWidth >= 320 && window.innerWidth <= 479) {
					$(".main-image").css("height", "182px");
				} else if(window.innerWidth >= 480 && window.innerWidth <= 767) {
					$(".main-image").css("height", "280px");
				} else if(window.innerWidth >= 768 && window.innerWidth <= 1139) {
					$(".main-image").css("height", "448px");
				} else {
					$(".main-image").css("height", "700px");
				}
				$(this).toggleClass('blackout-on');
			});

			// Change The Images
			$('.small-image').bind("click touch", function() {
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
		var _gaq=_gaq||[];_gaq.push(['_setAccount','<?php echo $sb_dump['sb_google_analytics']; ?>']);_gaq.push(['_setDomainName','macmannis.com']);_gaq.push(['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src='<?php echo $CDN_prefix; ?>js/ga-min.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();
		var GoSquared = {};GoSquared.acct = "<?php echo $sb_dump['sb_gosquared_analytics']; ?>";(function(w){function gs(){w._gstc_lt = +new Date;var d = document, g = d.createElement("script");g.type = "text/javascript";g.src = "<?php echo $CDN_prefix; ?>js/gs-min.js";var s = d.getElementsByTagName("script")[0];s.parentNode.insertBefore(g, s);}w.addEventListener ? w.addEventListener("load", gs, false) :w.attachEvent("onload", gs);})(window);
	</script>
</body>
</html>