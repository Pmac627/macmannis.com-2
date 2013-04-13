<?php /* main.php */
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');
	$page_post = "";
	$contact_post = "";

	function date_difference($start, $end) {
		$date1 = new DateTime(date("Y-m-d", strtotime($start)));
		if($end == "Present") {
			$date2 = new DateTime(date("Y-m-d"));
		} else {
			$date2 = new DateTime(date("Y-m-d", strtotime($end)));
		}
		$job = $date1->diff($date2);
		if($job->y != 0) {
			if($job->d >= 10) {
				$job_show = $job->y . " years, " . ++$job->m . " months";
			} else {
				$job_show = $job->y . " years, " . $job->m . " months";
			}
		} elseif($job->m >= 2) {
			if($job->d >= 10) {
				$job_show = ++$job->m . " months";
			} else {
				$job_show = $job->m . " months";
			}
		} else {
			$job_show = "1 month";
		}
		return $job_show;
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

	if($sb_dump['sb_address_show'] != 1 && $sb_dump['sb_phone_show'] != 1 &&  $sb_dump['sb_email_show'] != 1 &&  $sb_dump['sb_twitter_show'] != 1) {
		$contact_post = '<span class="resume-description-little">
			I\'ve chosen to hide this information for now... sorry!
		</span>
		';
	} else {
		$contact_post = '<span class="resume-description-little">
		';
		if($sb_dump['sb_address_show'] == 1) {
			$contact_post .= '<address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="streetAddress">125 Brandywine Drive</span><br><span itemprop="addressLocality">Irwin</span>, <span itemprop="addressRegion">PA</span> <span itemprop="postalCode">15642</span></address>
			';
		}
		
		if($sb_dump['sb_phone_show'] == 1) {
			$contact_post .= 'Phone: <span id="phone" itemprop="telephone">(724)-309-7195</span><br>
			';
		}
		
		if($sb_dump['sb_email_show'] == 1) {
			$contact_post .= 'Email: <span id="email" itemprop="email"><a href="mailto:pat@macmannis.com" target="_blank">pat@macmannis.com</a></span><br>
			';
		}
		
		if($sb_dump['sb_twitter_show'] == 1) {
			$contact_post .= 'Twitter: <span id="twitter"><a href="https://twitter.com/pat_macmannis" target="_blank">@pat_macmannis</a></span>
			';
		}
		$contact_post .= '</span>
		';
	}
?>

		<section class="container" itemscope itemtype="http://schema.org/Person">
			<?php echo $page_post; ?>
			<div class="resume-left">
				<article class="resume-item-little">
					<div class="resume-patrick">
						<h2 class="resume-title" itemprop="name">Patrick MacMannis</h2>
						<img class="resume-image" src="<?php echo $CDN_prefix; ?>img/resu-me.jpg" alt="Patrick MacMannis" title="Patrick MacMannis; Web Developer, Dek Hockey Goon &amp; Amateur Ninja." itemprop="image" />
						<h2 class="resume-inline-subtitle-little" itemprop="jobTitle">Web Architect</h2>
					</div>
				</article>
				<article class="resume-item-little">
					<div class="resume-fact-little">
						<h3 class="resume-title-little">Contact Info</h3>
							<?php echo $contact_post; ?>
					</div>
				</article>
				<article class="resume-item-little">
					<div class="resume-fact-little" itemprop="alumniOf" itemscope itemtype="http://schema.org/CollegeOrUniversity">
						<h3 class="resume-title-little">Education</h3>
						<img class="resume-image-college" src="<?php echo $CDN_prefix; ?>img/svc.jpg" alt="Saint Vincent College" title="Saint Vincent College Logo" itemprop="logo" />
						<h4 class="resume-inline-subtitle-little"><span itemprop="name">Saint Vincent College</span><br><em itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="addressLocality">Latrobe</span>, <span itemprop="addressRegion">PA</span> (May 2010)</em></h4>
						<p class="resume-description-little">
							Bachelor of Arts in History<br>
							Certified in <abbr title="Computer &amp; Information Sciences">CIS</abbr>
						</p>
					</div>
				</article>
				<article class="resume-item-little">
					<div class="resume-fact-little">
						<h3 class="resume-title-little">Competencies</h3>
						<span class="resume-description-little">
							<ul class="resume-list">
								<li>Object-Oriented Design &amp; Development</li>
								<li>Standards-Compliant HTML &amp; CSS Development</li>
								<li>Technical Leadership</li>
								<li>Web Application Integration</li>
								<li>Problem Analysis &amp; Debugging</li>
								<li>Software Development Life Cycle</li>
								<li>Model-View-Control Development</li>
								<li>Test Driven Development</li>
							</ul>
						</span>
					</div>
				</article>
				<article class="resume-item-little">
					<div class="resume-fact-little">
						<h3 class="resume-title-little">Skills</h3>
						<span class="resume-description-little">
							<ul class="resume-list">
								<li><abbr title="HyperText Markup Language">HTML</abbr>, <abbr title="HyperText Markup Language 5">HTML5</abbr>, <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>, <abbr title="eXtensible Markup Language">XML</abbr></li>
								<li><abbr title="Cascading Style Sheets">CSS</abbr>, <abbr title="Cascading Style Sheets: Level 3">CSS3</abbr></li>
								<li><abbr title="PHP: HyperText Preprocessor">PHP</abbr>, <abbr title="PHP: HyperText Preprocessor 5">PHP5</abbr>, <abbr title="Active Server Pages">ASP</abbr></li>
								<li><abbr title="Structured Query Language">SQL</abbr>, <abbr title="My Structured Query Language">MySQL</abbr>, <abbr title="MicroSoft Structured Query Language">MsSQL</abbr>, <abbr title="PHP Data Objects">PDO</abbr></li>
								<li>JavaScript, <abbr title="Visual Basic Script">VBScript</abbr></li>
								<li>jQuery, Modernizr</li>
								<li>C/C++</li>
								<li>CodeIgniter, Flourish, <abbr title="HTML5BoilerPlate">H5BP</abbr></li>
								<li>MicroSoft Office &amp; OpenOffice Suites</li>
							</ul>
						</span>
					</div>
				</article>
			</div>
			<div class="resume-right">
				<article class="resume-item-large">
					<div class="resume-fact-large">
						<h3 class="resume-title-large">Career Objective</h3>
						<p class="resume-description-large" itemprop="description">
							My career objective is to continue to expand my knowledge and technical abilities in the ever changing realm of web development 
							and design. I constantly work toward bettering myself and the techniques I use to create new web applications. I aim to earn a 
							spot as an important piece of a strong web development team and to contribute to creating a better web experience for not only 
							our customers, but the vast array of internet users throughout the world.
						</p>
					</div>
				</article>
				<article class="resume-item-large">
					<div class="resume-fact-large">
						<h3 class="resume-title-large">Experience</h3>
						<span itemprop="owns" itemscope itemtype="http://schema.org/LocalBusiness">
							<h4 class="resume-inline-subtitle-large" itemprop="name">Complete Web Design</h4>
							<p class="resume-description-large" itemprop="description">
								<em>August 2009 - Present (<?php echo date_difference("August 2009", "Present"); ?>)</em> <sup title="Current, Part Time">*</sup><br>
								Through Complete Web Design, my freelance career continues to develop. I create dynamic websites and applications for both profit and 
								non-profit clients. I coordinate with client IT departments and other web developers and designers, as needed, to get the job done. 
								I meet one-on-one with clients to ensure the project always achieves and exceeds client satisfaction and expectations. Testing and 
								development of web applications and sites happens on a self-maintained LAMP-stack server. I use Apache web server shell scripting to 
								maintain the system, SSH/telnet to administer the server remotely, SFTP to develop remotely and GitHub for version control. All of 
								my sites have been hand-coded using a rich text editor, Notepad++ and the images were created using Adobe Fireworks and GIMP 3.
							</p>
						</span>
						<span itemprop="affiliation" itemscope itemtype="http://schema.org/LocalBusiness">
							<h4 class="resume-inline-subtitle-large" itemprop="name">Insight Marketing Solutions</h4>
							<p class="resume-description-large" itemprop="description">
								<em>May 2012 - February 2013 (<?php echo date_difference("May 2012", "February 2013"); ?>)</em><br>
								Designed, managed and executed a major overhaul and redesign of eWell.co, an online health platform utilized by numerous 
								organizations, hundreds of doctors and thousands of users. Additional duties include daily maintenance of client websites 
								and continually developing new features for eWell. Technologies used on a daily basis include HTML5, JavaScript, PHP5, CSS3 and 
								MySQL as well as CodeIgniter MVC framework, jQuery JavaScript library and Github. Other major projects include: imspgh.com; 
								2to1proteinbars.com; inevo360challenge.com
							</p>
						</span>
						<span itemprop="affiliation" itemscope itemtype="http://schema.org/LocalBusiness">
							<h4 class="resume-inline-subtitle-large" itemprop="name">Pennatronics</h4>
							<p class="resume-description-large" itemprop="description">
								<em>October 2010 - May 2012 (<?php echo date_difference("October 2010", "May 2012"); ?>)</em><br>
								Pennatronics offered me an opportunity to officially step into the field of Information Technologies in a professional manner outside 
								of freelance web development. While I was employed by Pennatronics, I maintained quality levels, coordinated work order releases with 
								program managers, production managers and production employees and continually updated our internal network of Access Databases. 
								I regularly performed complex custom queries on multiple databases with hundreds of tables and millions of rows. Additionally, I created 
								bridges between our Access network and our ManEx network comprised of a FoxPro ODBC database engine. Access is widely used throughout 
								the plant to expand the functionality and usability of ManEx by providing unique tables, reports and queries personalized to each 
								department. I also assisted IT on network and desktop troubleshooting throughout the plant.
							</p>
						</span>
						<span itemprop="affiliation" itemscope itemtype="http://schema.org/Library">
							<h4 class="resume-inline-subtitle-large" itemprop="name">Saint Vincent Archabbey Archives</h4>
							<p class="resume-description-large" itemprop="description">
								<em>January 2009 - September 2009 (<?php echo date_difference("January 2009", "September 2009"); ?>)</em><br>
								Throughout the eight months at the Saint Vincent Archabbey Archives, I worked with a small team to oversee the care and digitalization 
								of hundreds of thousands of priceless artifacts and documents. We digitized hundreds of documents, photographs and other precious items 
								into a new database system. Additionally, I was tasked with performing research for public requests.
							</p>
						</span>
					</div>
				</article>
				<article class="resume-item-large">
					<div class="resume-fact-large" itemprop="performerIn" itemscope itemtype="http://schema.org/EducationEvent">
						<h3 class="resume-title-large">Honors &amp; Awards</h3>
						<h4 class="resume-inline-subtitle-large">Guest Speaker</h4>
						<p class="resume-description-large" itemprop="description">
							<em><span itemprop="startDate" content="2013-04-10">April 10, 2013</span> - <strong itemprop="name">What's New With HTML5?</strong></em><br>
							Invited to speak at <span itemprop="location">Saint Vincent College</span> to current students, alumni, professors and even a Dean about the awesome new features of HTML5! 
							I illustrated the differences between HTML 4.01 and XHTML 1.1 compared to HTML5 and also how JavaScript and CSS3 are tied into the new specs.
						</p>
					</div>
				</article>
			</div>
		</section>
