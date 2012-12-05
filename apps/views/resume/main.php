<?php /* main.php */
	$Base_URL = constant('Base_URL');
	$CDN_prefix = constant('CDN_prefix');

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
?>

			<section id="resume">
				<div class="container">
					<div class="resume-left">
						<article class="resume-item-little">
							<div class="resume-patrick">
								<h2 class="resume-title">Patrick MacMannis</h2>
								<img class="resume-image" src="<?php echo $CDN_prefix; ?>img/meetme.jpg" alt="Patrick MacMannis" title="Patrick MacMannis; Web Developer, Dek Hockey Goon &amp; Amateur Ninja." />
							</div>
						</article>
						<article class="resume-item-little">
							<div class="resume-fact-little">
								<h3 class="resume-title-little">Contact Info</h3>
								<span class="resume-description-little">
									<address>125 Brandywine Drive<br>Irwin, PA 15642</address>
									Phone: <span id="phone">(724)-309-7195</span><br>
									Email: <span id="email"><a href="mailto:pat@macmannis.com" target="_blank">pat@macmannis.com</a></span><br>
									Twitter: <span id="twitter"><a href="https://twitter.com/pat_macmannis" target="_blank">@pat_macmannis</a></span>
								</span>
							</div>
						</article>
						<article class="resume-item-little">
							<div class="resume-fact-little">
								<h3 class="resume-title-little">Education</h3>
								<h4 class="resume-inline-subtitle-little">Saint Vincent College<br><em>Latrobe, PA (May 2010)</em></h4>
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
										<li>Object-Oriented Design<br><span style="margin-left: 15px;">&amp;</span> Development</li>
										<li>Standards-Compliant HTML<br><span style="margin-left: 15px;">&amp;</span> CSS Development</li>
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
										<li>HTML, HTML5, XHTML, XML</li>
										<li>CSS, CSS3</li>
										<li>PHP5, ASP</li>
										<li>SQL, MySQL, MsSQL, PDO</li>
										<li>JavaScript, VBScript</li>
										<li>jQuery, Modernizr</li>
										<li>C/C++</li>
										<li>CodeIgniter, Flourish</li>
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
								<p class="resume-description-large">
									My career objective is to continue to expand my knowledge and technical abilities in the vast realm of web development and design. 
									I aim to earn a spot as an important piece of a strong web development team and to contribute what I can to creating a better web 
									experience for not only our customers, but the vasy array of internet users throughout the world.
								</p>
							</div>
						</article>
						<article class="resume-item-large">
							<div class="resume-fact-large">
								<h3 class="resume-title-large">Experience</h3>
								<h4 class="resume-inline-subtitle-large">Insight Marketing Solutions</h4>
								<p class="resume-description-large">
									<em>May 2012 - Present (<?php echo date_difference("May 2012", "Present"); ?>)</em> <sup title="Current, Full Time">*</sup><br>
									Designed, managed and executed a major overhaul and redesign of Lifestyle Innovations Wellness Application, an online health platform 
									utilized by numerous health organizations, hundreds of doctors and thousands of their clients. Additional duties include daily 
									maintenance of client websites and continually developing new features for the new Lifestyle Innovations Wellness Application. 
									Technologies used on a daily basis include HTML, JavaScript, PHP5, CSS3 and MySQL as well as CodeIgniter MVC framework and 
									jQuery JavaScript library. 
								</p>
								<h4 class="resume-inline-subtitle-large">Complete Web Design</h4>
								<p class="resume-description-large">
									<em>August 2009 - Present (<?php echo date_difference("August 2009", "Present"); ?>)</em> <sup title="Current, Part Time">*</sup><br>
									I create dynamic websites and applications for both profit and non-profit clients. I coordinated with client IT departments and 
									other web developers and designers, as needed, to get the job done. I meet one-on-one with clients to ensure the project achieves 
									and exceeds client satisfaction and expectations. Testing and development of web applications and sites happens on a self-maintained 
									Linux machine. I use Apache web server shell scripting to maintain the system, SSH/telnet to administer the server remotely and SFTP 
									to develop remotely. All of my sites have been hand-coded using a rich text editor, Notepad++ and the images were created using Adobe 
									Fireworks and GIMP 3.
								</p>
								<h4 class="resume-inline-subtitle-large">Pennatronics</h4>
								<p class="resume-description-large">
									<em>October 2010 - May 2012 (<?php echo date_difference("October 2010", "May 2012"); ?>)</em><br>
									I maintain quality levels through document control. I coordinate work order releases with program managers, production managers and 
									production employees. I also maintain our internal network of Microsoft Access databases that support our primary management system, 
									ManEx. I assist IT on network and desktop troubleshooting throughout the plant. Access is widely used throughout the plant to expand 
									the functionality and usability of ManEx by providing unique tables, reports and queries personalized to each department. Since 
									reaching this position, I have helped develop a timeline of upgrades and revisions to move our Access database network to a more 
									beneficial state.
								</p>
								<h4 class="resume-inline-subtitle-large">Saint Vincent Archabbey Archives</h4>
								<p class="resume-description-large">
									<em>January 2009 - September 2009 (<?php echo date_difference("January 2009", "September 2009"); ?>)</em><br>
									Maintained sensitive collections over 100 years old, organized databases, answered submitted questions thoroughly and in a timely manner. 
								</p>
							</div>
						</article>
					</div>
				</div>
			</section>
