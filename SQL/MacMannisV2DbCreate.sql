CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Contact ID Num',
  `contact_fullname` varchar(60) NOT NULL COMMENT 'Contact Full Name (60 char max)',
  `contact_email` varchar(60) NOT NULL COMMENT 'Contact Email (60 char max)',
  `contact_message` varchar(1000) NOT NULL COMMENT 'Contact Message (1000 char max)',
  `contact_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Contact Date (Auto Timestamp)',
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Content ID Num',
  `content_title` varchar(100) NOT NULL COMMENT 'Content Title (100 char max)',
  `content_subtitle` varchar(200) NOT NULL COMMENT 'Content Subtitle (200 char max)',
  `content_date` date NOT NULL COMMENT 'Content Date (MySQL Date)',
  `content_body` text NOT NULL COMMENT 'Content Body (MySQL Text)',
  `content_show` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Content Show (1 = Yes)',
  `content_delete` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Content Delete (1 = Yes)',
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5;

INSERT INTO `content` (`content_id`, `content_title`, `content_subtitle`, `content_date`, `content_body`, `content_show`, `content_delete`) VALUES
(1, 'Coming Soon!', '', '2012-12-31', 'The forbidden "Coming Soon" page! Sorry, but right now it is a necessary evil. I''m still building out the functionality of the blog.', 1, 0),
(2, 'Welcome To MacMannis.com', '', '2013-01-14', '<span itemscope itemtype="http://schema.org/SoftwareApplication">Welcome to my personal portfolio website for demonstrating and showcasing my technical skill sets! You can find my resume, my portfolio of work to date and live demo scripts I have created over the years. Some of the many languages and flavors I enjoy developing and designing with include:<br><br>&emsp;&raquo;&emsp;<span itemprop="name"><strong><abbr title="PHP: Hypertext Processor 4">PHP4</abbr></strong></span> and <span itemprop="name"><strong><abbr title="PHP: Hypertext Processor 5">PHP5</abbr></strong></span><br>&emsp;&raquo;&emsp;<span itemprop="name"><strong><abbr title="HyperText Markup Language 4.1">HTML 4.1</abbr></strong></span>, <span itemprop="name"><strong><abbr title="HyperText Markup Language 5">HTML5</abbr></strong></span> and <span itemprop="name"><strong><abbr title="eXtensable HyperText Markup Language 1.0">XHTML 1.0</abbr></strong></span><br>&emsp;&raquo;&emsp;<span itemprop="name"><strong><abbr title="Cascading Style Sheets 1">CSS1</abbr></strong></span>, <span itemprop="name"><strong><abbr title="Cascading Style Sheets 2">CSS2</abbr></strong></span> and <span itemprop="name"><strong><abbr title="Cascading Style Sheets 3">CSS3</abbr></strong></span><br>&emsp;&raquo;&emsp;<span itemprop="name"><strong><abbr title="Structured Query Language">SQL</abbr></strong></span>, <span itemprop="name"><strong><abbr title="My Structured Query Language">MySQL</abbr></strong></span> and <span itemprop="name"><strong><abbr title="MicroSoft Structured Query Language">MSSQL</abbr></strong></span><br>&emsp;&raquo;&emsp;<span itemprop="name"><strong><abbr title="JavaScript">JS</abbr></strong></span> and <span itemprop="name"><strong>jQuery</strong></span><br><br>I have taken great care to ensure that my sites meet and exceed client expectations in functionality, design, upkeep simplicity and overall quality. I use standards compliant <span itemprop="name"><abbr title="HyperText Markup Language">HTML</abbr></span> and <span itemprop="name"><abbr title="Cascading Style Sheets">CSS</abbr></span> markup to ensure each page renders properly for every browser and delivers the optimum user experience every visit. I use the strong combination of <span itemprop="name"><abbr title="PHP: Hypertext Processor 5">PHP5</abbr></span> and <span itemprop="name"><abbr title="My Structured Query Language">MySQL</abbr></span> to create powerful and reliable frameworks that each of my sites runs on.<br><br>I enjoy programming and take great pride in every new project I do, no matter the size. I hope you will enjoy browsing my sites as much as I enjoyed creating them! Please feel free to contact me via the contacts page to make suggests, comments or note errors.<br><br>Have Fun!\r\n</span>', 1, 0),
(3, 'Coming Soon!', '', '2012-12-31', 'The forbidden "Coming Soon" page! Sorry, but right now it is a necessary evil. I''m still building out the functionality of the details pages.', 1, 0),
(4, 'Error 404', 'I''m sorry, but that page doesn''t seem to exist!', '2013-01-11', 'If this site sent you to this dead link, please contact me via the <a href="/home/contact">contact page</a> and let me know so I can fix it ASAP!<br><br>Thanks!', 1, 0);

CREATE TABLE IF NOT EXISTS `content_detail` (
  `content_id` int(11) NOT NULL COMMENT 'Content ID Num',
  `detail_type_id` int(11) NOT NULL COMMENT 'Detail Type ID Num'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Relational Table: content->detail type';

INSERT INTO `content_detail` (`content_id`, `detail_type_id`) VALUES
(2, 1);

CREATE TABLE IF NOT EXISTS `detail_type` (
  `detail_type_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Detail Type ID Num',
  `detail_type_name` varchar(30) NOT NULL COMMENT 'Detail Type Name (30 char max)',
  `detail_type_description` varchar(1000) NOT NULL COMMENT 'Detail Type Description (1000 char max)',
  PRIMARY KEY (`detail_type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5;

INSERT INTO `detail_type` (`detail_type_id`, `detail_type_name`, `detail_type_description`) VALUES
(1, 'Project Summary', ''),
(2, 'Project Planning', ''),
(3, 'Project Production', ''),
(4, 'Project Technologies', '');

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Page ID Num',
  `page_title` varchar(100) NOT NULL COMMENT 'Page Title (100 char max)',
  `page_description` varchar(160) NOT NULL COMMENT 'Page Description (160 char max)',
  `page_keywords` varchar(160) NOT NULL COMMENT 'Page Keywords (160 char max)',
  `page_follow` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Page Follow (1 = Yes)',
  `page_index` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Page Index (1 = Yes)',
  `page_canonical` varchar(60) NOT NULL COMMENT 'Page Canonical URL (60 char max)',
  `page_show` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Page Show (1 = Yes)',
  `page_delete` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Page Delete (1 = Yes)',
  `page_preload` varchar(2000) NOT NULL COMMENT 'Page Preload Images List',
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11;

INSERT INTO `pages` (`page_id`, `page_title`, `page_description`, `page_keywords`, `page_follow`, `page_index`, `page_canonical`, `page_show`, `page_delete`, `page_preload`) VALUES
(1, 'Welcome', ':: Home Page', '', 0, 1, 'home', 1, 0, 'img/large/inevo360.jpg;img/large/rwc.jpg;img/large/omh.jpg;img/large/awpa.jpg;img/large/ikb.jpg;img/large/2to1.jpg;img/large/ic.jpg;img/large/tdd.jpg'),
(2, 'Contact Success', '', '', 0, 0, 'home/contactsuccess', 1, 0, ''),
(3, 'Contact', ':: Contact Page', 'contact', 0, 1, 'home/contact', 1, 0, ''),
(4, 'Resume', ':: Resume', 'resume,cv', 0, 1, 'resume', 1, 0, ''),
(5, 'Code Repository', ':: Code Repository', 'code,demos,examples,html5,css3,javascript', 0, 1, 'code', 1, 0, ''),
(6, 'Blog', ':: Blog Home', 'blog', 0, 1, 'blog', 1, 0, ''),
(7, 'Portfolio', ':: Portfolio', 'portfolio,live examples,demos,html5,css3,sql,php,javascript,jquery', 0, 1, 'portfolio', 1, 0, ''),
(8, 'Contact Failed', '', '', 0, 0, 'portfolio/offline', 1, 0, ''),
(9, 'Details', ':: Portfolio Details', 'portfolio,case study,examples', 0, 1, 'portfolio/details', 1, 0, ''),
(10, 'Error', '', '', 0, 0, 'error', 1, 0, '');

CREATE TABLE IF NOT EXISTS `page_content` (
  `page_id` int(11) NOT NULL COMMENT 'Page ID Num',
  `content_id` int(11) NOT NULL COMMENT 'Content ID Num'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Relational Table: pages -> content';

INSERT INTO `page_content` (`page_id`, `content_id`) VALUES
(6, 1),
(9, 3),
(10, 4),
(1, 2);

CREATE TABLE IF NOT EXISTS `portfolio` (
  `portfolio_id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT 'Portfolio ID Num',
  `portfolio_title` varchar(50) NOT NULL COMMENT 'Portfolio Title (50 char max)',
  `portfolio_subtitle` varchar(100) NOT NULL COMMENT 'Portfolio Subtitle (100 char max)',
  `portfolio_url` varchar(60) NOT NULL COMMENT 'Portfolio URL (60 char max)',
  `portfolio_description` varchar(2000) NOT NULL COMMENT 'Portfolio Description (2000 char max)',
  `portfolio_image` varchar(60) NOT NULL COMMENT 'Portfolio Image Name (60 char max)',
  `portfolio_image_height` int(11) NOT NULL COMMENT 'Portfolio Image Height',
  `portfolio_live` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Portfolio Live (1 = Yes)',
  `portfolio_show` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Portfolio Show (1 = Yes)',
  `portfolio_list` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Portfolio List (1 = Yes)',
  `portfolio_delete` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Portfolio Delete (1 = Yes)',
  PRIMARY KEY (`portfolio_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13;

INSERT INTO `portfolio` (`portfolio_id`, `portfolio_title`, `portfolio_subtitle`, `portfolio_url`, `portfolio_description`, `portfolio_image`, `portfolio_image_height`, `portfolio_live`, `portfolio_show`, `portfolio_list`, `portfolio_delete`) VALUES
(1, 'eWell', 'Online Weightloss &amp; Fitness Application', 'http://www.ewell.co/', 'Designed, managed and executed a major overhaul and redesign of Lifestyle Innovations Wellness Application, an online health platform utilized by numerous health organizations, hundreds of doctors and thousands of their clients. Additional duties include continually developing new features for the new Lifestyle Innovations Wellness Application. Technologies used on this project include HTML, JavaScript, PHP5, CSS3 and MySQL as well as CodeIgniter MVC framework and jQuery JavaScript library.', 'ewell.jpg', 210, 1, 1, 0, 0),
(2, 'Three Dames Dreamin', 'Custom Wall &amp; Auto Vinyls', 'http://www.threedamesdreamin.com/', 'As the development team leader for <a href=''http://www.threedamesdreamin.com'' class=''credits'' title=''Check out threedamesdreamin.com for cool vinyls and crafts!''>threedamesdreamin.com</a>, I was charged with coordinating with an independant web designer create a visually stunning and marketable website. Using PHP and MySQL, I created a simple and powerful website that is standards compliant in XHTML and CSS3. <a href=''http://www.opencart.com/'' class=''credits'' title=''Check out the OpenCart e-commerce system!''>OpenCart</a>, an open source e-commerce system, is integrated into the website seamlessly. The site also houses a secure, simple administration panel that allows the owners to change dynamic content on just about any portion of the site. Despite the complexity of the website, it was created by hand without the use of proprietary software!', 'tdd.jpg', 271, 1, 1, 1, 0),
(3, 'Radiant Window Cleaning', 'We Let The Sun Shine In!', 'http://www.radiant-window-cleaning.com/', '<a href=''http://www.radiant-window-cleaning.com'' class=''credits'' title=''Check out radiant-window-cleaning.com!''>radiant-window-cleaning.com</a> really does let the sun shine in. I was team leader in the development of this PHP-powered, MySQL-backed website and coordinated with an independant designer. The website is standards compliant HTML5 and CSS3 and provides a simple, yet efficient design. radiant-window-cleaning.com was created entirely without the use of any software other than <a href=''http://www.notepad-plus-plus.org'' class=''credits'' title=''Get Notepad++ today! Youll love it!''>notepad++</a>.', 'rwc.jpg', 276, 1, 1, 1, 0),
(4, 'Our Mission House Publishing', 'Books for Young Catholics', 'http://www.omhsmi.org/', '<a href=''http://www.omhsmi.org'' class=''credits'' title=''Check out omhsmi.org for your childs religious needs!''>omhsmi.org</a> is a simple standards compliant HTML5 and CSS3 website that follows a fluid/responsive design to meet it''s mobile needs. The site is powered by a basic PHP and MySQL setup so that it conveys what products the Sisters of Mary Immaculate have to offer for Catholic children. Our Mission House Publishing is the name their organization offers these items under. The site was created entirely by hand using Notepad++.', 'omhsmi.jpg', 307, 1, 1, 1, 0),
(5, 'International Conquest', 'Browser-Based Online Nation Building Game', 'http://www.internationalconquest.net/', '<a href=''http://www.internationalconquest.net'' class=''credits'' title=''Check out International Conquest, a browser-based nation building game!''>International Conquest</a> was my first large project with PHP. The current version online is actually the 3rd rewrite of the game. Originally, I wanted to learn PHP syntax and how it compared to C++. Additionally, I wanted to explore more advanced standards compliant XHTML and CSS. On the second variation, I had a solid grasp on the power and syntax of PHP and sought to reduce the site of the site to a more reasonable and lighter size. On the third version, I attempted to further shrink the size of the site, design a better database layout that met at least the first three Normal Forms and better utilize functions. Currently, the final rewrite is underway!', 'ic.jpg', 325, 1, 1, 0, 0),
(6, 'Appliance World PA', 'Appliance World PA', 'http://www.applianceworldpa.com/', 'applianceworldpa.com was developed in conjunction with an independant designer and the Irwin Builders Supply IT director. It features a fully functional administation panel that controls every dynamic aspect of the website in a presentable, easy to use interface. The site takes full advantage of the power behind PHP and MySQL to do the heavy lifting. The frontend is comprised of standards compliant XHTML and CSS3 with a hint of JavaScript. As team leader for this project, I managed to coordinate remotely with both the client and designer to achive the final result. Despite my site being picked as runner up, it is fully operational and I have even been in discussions to bring the site live in the near future. This site was also created without the help (or hinderance) of bulky software.', 'awpa.jpg', 224, 0, 1, 0, 0),
(7, 'Innovative Kitchen &amp; Bath', 'Innovative Kitchen &amp; Bath', 'http://www.ikbpa.com/', 'ikbpa.com is a standards compliant, XHTML and CSS3 developed website. As team leader, I worked closely with an independant designer and the Irwin Builders Supply IT director to achieve a solid working product. Built custom right down to the most basic functions, this website features a strong PHP framework that utilizes MySQL to handle the dynamic content. Some JavaScript is used to add interactive functionality. The entire site can be administed remotely by the IT director from the meta data to the very images and words visible to the user. The site was created entirely from scratch and does not suffer the bloated waste created by proprietary software. Currently, the website is not live, however there is discussion of bring the site live in the near future.', 'ikb.jpg', 228, 0, 1, 0, 0),
(8, 'Intro to Web Design Resource', 'Intro to Web Design Resource', '', 'My first web development professor used this site as an aid for her classes. The busy world of college education has prevented her from maintaining the site over its long standing life. My task was to revise the web tutorial, both content and code to standards compliant XHTML and CSS. The site is backed with PHP and MySQL to allow easier management. If it weren''t for the code samples embedded within each page, the site would verify as XHTML 1.0 Strict on the W3C validator. The rewrite was done without using any proprietary software, just like it originally was over ten years ago.', 'drm.jpg', 289, 1, 1, 0, 0),
(9, 'Metragenix', '2 to 1 Protein Bars', 'http://www.2to1proteinbars.com/', 'Designed by Jason Hess, a Web Designer from 2to1proteinbars.com and developed under the flag of Insight Marketing Solutions. I played point on the development end of this project and created it entirely by hand. The site is HTML5 and CSS3 compliant and utilizes a strong PHP backbone. The client requested no database backend, so each page is carefully crafted with the information embedded.', '2to1.jpg', 293, 1, 1, 1, 0),
(10, 'Inevo360 Challenge', 'Inevo360 Weight Loss Challenge', '', 'I created the back end for this website in addition to a user management interface for the challenge operators to use. The interface features simple actions including check-in management, sortable tables and printable lists. I ultilized PHP 5.3, PHP Data Objects, MySQL, JavaScript, jQuery, jQuery UI, HTML5 and CSS3 to complete this project.', '360.jpg', 279, 1, 1, 0, 0),
(11, 'Insight Marketing Solutions', 'Insight Marketing Solutions', '', 'IMS corporate website was redesigned and rebuilt from the ground up. My involvement was more as a back end programmer and front end supervisor. The back end was created using CodeIgniter as the foundation. I supervised the front end developer in creating an HTML5, responsive website.', 'ims.jpg', 248, 1, 1, 0, 0),
(12, 'MacMannis.com', 'Web Architecture For A Semantic Web', 'http://www.macmannis.com/', 'My personal portfolio site. Currently on version 2, my site utilizes semantic HTML5, forms 3.0 API as well as CSS3 animations, gradients, transitions and much more. The foundation of the site is built on CodeIgniter and PHP 5.3 Object-Oriented Programming. Some JavaScript and jQuery were used throughout the site to add additional functionality. The site features my resume, links to multiple code repositories, a contact page, an online portfolio and a blog is currently in the works. The code for both versions 1 & 2 can be found on my GitHub account.', 'mac.jpg', 266, 1, 1, 0, 0);

CREATE TABLE IF NOT EXISTS `portfolio_content` (
  `portfolio_id` int(11) NOT NULL COMMENT 'Portfolio ID Num',
  `content_id` int(11) NOT NULL COMMENT 'Content ID Num'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Relational Table: portfolio->content';

INSERT INTO `portfolio_content` (`portfolio_id`, `content_id`) VALUES
(1, 2);

CREATE TABLE IF NOT EXISTS `portfolio_tech` (
  `portfolio_id` smallint(6) NOT NULL COMMENT 'Portfolio ID Num',
  `tech_id` smallint(6) NOT NULL COMMENT 'Technology ID Num'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Relational Table: portfolio->technologies';

INSERT INTO `portfolio_tech` (`portfolio_id`, `tech_id`) VALUES
(1, 1),
(1, 3),
(1, 4),
(1, 4),
(1, 6),
(1, 7),
(1, 9),
(1, 10),
(2, 1),
(2, 3),
(2, 5),
(2, 6),
(2, 7),
(2, 9),
(2, 10),
(3, 1),
(3, 3),
(3, 5),
(3, 9),
(3, 10),
(4, 1),
(4, 3),
(4, 5),
(4, 9),
(4, 10);

CREATE TABLE IF NOT EXISTS `switchboard` (
  `sb_site` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'Site Name (For Multiples)',
  `sb_open` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Site Open (Yes = 1)',
  `sb_title` varchar(80) NOT NULL COMMENT 'Site Title (80 char max)',
  `sb_motto` varchar(50) NOT NULL COMMENT 'Site Motto (50 char max)',
  `sb_charset` varchar(10) NOT NULL DEFAULT 'UTF-8' COMMENT 'Site Charset (UTF-8 Default)',
  `sb_type` varchar(16) NOT NULL DEFAULT 'text/html' COMMENT 'Site Content Type (16 char max)',
  `sb_language` varchar(2) NOT NULL DEFAULT 'en' COMMENT 'Site Language (en Default)',
  `sb_keywords` varchar(160) NOT NULL COMMENT 'Site Keywords (160 char max)',
  `sb_description` varchar(160) NOT NULL COMMENT 'Site Description (160 char max)',
  `sb_base_url` varchar(50) NOT NULL COMMENT 'Site Base URL (50 char max)',
  `sb_cdn_url` varchar(50) NOT NULL COMMENT 'Site CDN URL (50 char max)',
  `sb_canonical` varchar(50) NOT NULL COMMENT 'Site Canonical URL (50 char max)',
  `sb_cookie` varchar(12) NOT NULL COMMENT 'Site Cookie Name (12 char max)',
  `sb_site_email` varchar(50) NOT NULL COMMENT 'Site Email Address (50 char max)',
  `sb_google_verification` varchar(50) NOT NULL COMMENT 'Site Google Verification Code (50 char max)',
  `sb_google_analytics` varchar(20) NOT NULL COMMENT 'Google Analytics Code (20 char max)',
  `sb_gosquared_analytics` varchar(20) NOT NULL,
  `sb_address_show` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Show Address (1 = Yes)',
  `sb_phone_show` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Show Phone (1 = Yes)',
  `sb_email_show` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Show Email (1 = Yes)',
  `sb_twitter_show` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'Show Twitter (1 = Yes)',
  PRIMARY KEY (`sb_site`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;

INSERT INTO `switchboard` (`sb_site`, `sb_open`, `sb_title`, `sb_motto`, `sb_charset`, `sb_type`, `sb_language`, `sb_keywords`, `sb_description`, `sb_base_url`, `sb_cdn_url`, `sb_canonical`, `sb_cookie`, `sb_site_email`, `sb_google_verification`, `sb_google_analytics`, `sb_gosquared_analytics`, `sb_address_show`, `sb_phone_show`, `sb_email_show`, `sb_twitter_show`) VALUES
(1, 1, 'MacMannis.com', 'Web Architecture for a Semantic Web', 'UTF-8', 'text/html', 'en', 'macmannis.com,macmannis,web architecture,web design,web development', 'MacMannis.com | Web Architecture for a Semantic Web. PHP5, HTML5, CSS3 and JS Development.', 'http://v2.macmannis.com/', 'http://cdn.macmannis.com/', 'http://v2.macmannis.com/', 'new_mac', 'pat@macmannis.com', '2SrQP-qonPjeiKmmGA7sARrWcl9Ibaeq-OocK2FNJ6M', 'UA-29803754-1', 'GSN-618152-H', 0, 0, 1, 1);

CREATE TABLE IF NOT EXISTS `technologies` (
  `tech_id` smallint(11) NOT NULL AUTO_INCREMENT COMMENT 'Technology ID Num',
  `tech_name` varchar(60) NOT NULL COMMENT 'Technology Name (60 char max)',
  `tech_description` varchar(300) NOT NULL COMMENT 'Technology Description (300 char max)',
  PRIMARY KEY (`tech_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11;

INSERT INTO `technologies` (`tech_id`, `tech_name`, `tech_description`) VALUES
(1, 'PHP5', 'PHP: Hypertext Preprocessor'),
(2, 'HTML5', 'HyperText Markup Language 5'),
(3, 'XHTML', 'eXtensible HyperText Markup Language'),
(4, 'CSS', 'Cascading Style Sheets'),
(5, 'CSS3', 'Cascading Style Sheets 3'),
(6, 'JS', 'JavaScript'),
(7, 'jQuery', 'jQuery'),
(8, 'XML', 'eXtensible Markup Language'),
(9, 'SQL', 'Structured Query Language'),
(10, 'MySQL', 'My''s Structured Query Language');

CREATE TABLE IF NOT EXISTS `visitors` (
  `visitor_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Visitor ID Num',
  `visitor_ip4` varchar(85) NOT NULL COMMENT 'Visitor IPv4 (85 char max to account for 5 chained IPv4)',
  `visitor_ip6` varchar(40) NOT NULL COMMENT 'Visitor IPv6 (40 char max)',
  `visitor_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Visitor Date (MySQL Timestamp Auto Update)',
  `visitor_total` int(11) NOT NULL DEFAULT '1' COMMENT 'Visitor Total (Total Count)',
  PRIMARY KEY (`visitor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `visitor_contact` (
  `visitor_id` int(11) NOT NULL COMMENT 'Visitor ID Num',
  `contact_id` int(11) NOT NULL COMMENT 'Contact ID Num'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Relational Table: visitors -> contact';