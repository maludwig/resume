<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Resume - Mitchell Ludwig</title>
	<!-- Hi! So you've decided to take a peek at the code. Awesome! I've kept everything purposefully unminified, so that you can look at the code, and easily understand the structure. -->
	<!-- If you're familiar with GitHub, you can take a closer look at the code by checking out the repo: https://github.com/maludwig/resume -->
	<script src="js/ie-redirect.js"></script>
	<!-- redirect IE9 and under to the sympathy page -->
	<!-- I'm using Less as my CSS compiler, because it has a rich feature set of awesome shorthand that really helps with speeding up development. On a normal web page, these would be precompiled server-side. I've left the less link here for your viewing pleasure. -->
	<!--
	<link rel="stylesheet/less" type="text/css" href="less/style.less" />
	<script src="js/less-2.0.0.min.js"></script>
	-->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!-- A pretty font -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<!-- Exotic header font -->
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

	<!-- If you don't know what jQuery is, why are you looking at my code? -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery-center.1.2.js"></script>
	<!-- Parallax scrolling -->
	<script src="js/parallax.min.js"></script>

	<script>
		$(window).load(function () {
			$(".tile div img").center(); //Center the education images. Must be done after page load, unless image widths/heights are prespecified.
		});
		$(window).resize(function () {
			$(".tile div img").center(); //Center the education images. Must be done after page load, unless image widths/heights are prespecified.
		});
		$(function () {
			$(".parallax-window").parallax({
				imageSrc: "img/bg3.png",
				naturalWidth: 2160,
				naturalHeight: 3840,
			});
		});
	</script>
</head>

<body>
	<div id="container" class="parallax-window">
		<header>
			<h1>Mitchell Ludwig</h1>
			<h3><a href="tel:+14034793269">403-479-3269</a> &nbsp;&nbsp;&nbsp; <a href="mailto:mitchell.ludwig@gmail.com">mitchell.ludwig@gmail.com</a></h3>
		</header>
		<div id="content">
			<section>
				<h2>Other Versions</h2>
				<div class="scontent">
					<div class="file"><a class="pdf" href="files/mitchell_ludwig.pdf">PDF Version</a></div>
				</div>
			</section>
			<section>
				<h2>Tech Demo</h2>
				<div class="scontent">
					The <a href="http://edgemontgeek.com/whiteboard/">Whiteboard App</a> is a web app I designed and implemented to showcase my web development skills. It allows for people to share a whiteboard in the cloud, and visually communicate ideas over any distance. Built on LAMP (Linux [CentOS], Apache, MySQL, PHP) in the Amazon EC2 cloud.
				</div>
				<h2>Other Sample Work</h2>
				<div class="scontent">
					<p><a href="http://thecalgarycollection.ca/">The Calgary Collection</a> is a folk music collection, curated by the amazing Gillian M<sup>c</sup>Kercher. Cloud hosted (Amazon EC2), built on LAMP, powered by Wordpress. Scalable architecture was leveraged to handle large volumes during peak times. </p>
					<p><a href="https://github.com/maludwig">Latest GitHub account</a> | <a href="https://github.com/turiyag">First GitHub account</a></p>
				</div>
			</section>
			<section>
				<h2>Education and Certifications</h2>
				<div class="scontent">
					<div class="tile">
						<div><img src="img/edu-UofC.png" /></div>
						<p>University of Calgary (2008-2013) Computer Science, Concentration in Information Security</p>
					</div>
					<div class="tile">
						<div><img src="img/edu-CompTIA.png" /></div>
						<p>CompTIA A+, Network+, and Security+ Certified</p>
					</div>
					<div class="tile">
						<div><img src="img/edu-Microsoft.png" /></div>
						<p>Microsoft Certified Professional (MCP), Microsoft Certified Systems Administrator (MCSA)</p>
					</div>
					<div class="tile">
						<div><img src="img/edu-W3Schools-sofar.png" /></div>
						<p>CSS3 and Javascript Certified by W3Schools</p>
					</div>
					<div class="tile">
						<div><img src="img/edu-AWS-CSA-A.png" /></div>
						<p>AWS Certified Solutions Architect - Associate</p>
					</div>
				</div>
			</section>
			<section>
				<h2>Data Science Experience</h2>
				<div class="scontent">
					<ul>
						<li>Extensive experience with:</li>
						<ul>
							<li>SQL (Oracle, PostgreSQL, MySQL)</li>
							<li>Java</li>
							<li>Python (inc. pandas, NumPy, Matplotlib, Jupyter, Tensorflow, and Keras)</li>
							<li>API Integration</li>
							<li>Docker/Kubernetes</li>
							<li>Amazon Web Services</li>
						</ul>
						<li>Proficient with many other technologies, including:</li>
						<ul>
							<li>Machine Learning</li>
							<li>Tableau</li>
							<li>ETL tools (ex. Pentaho Data Integration)</li>
						</ul>
					</ul>
				</div>
			</section>
			<section>
				<h2>Web Development Experience</h2>
				<div class="scontent">
					<ul>
						<li>Extensive experience with dealing directly with clients to provide exactly what the client wants</li>
						<li>Proficient with modern web technologies, including:</li>
						<ul>
							<li>HTML5</li>
							<li>CSS3</li>
							<li>JavaScript</li>
							<li>React/React Native</li>
							<li>XML</li>
							<li>AJAX</li>
							<li>jQuery</li>
							<li>Bootstrap</li>
							<li>Content Management Systems (inc. Wordpress)</li>
						</ul>
						<li>Proficient with many back-end technologies, including </li>
						<ul>
							<li>NodeJS (inc. ExpressJS, Babel, Webpack)</li>
							<li>LAMP/WAMP: (Linux/Windows, PHP, MySQL, Apache)</li>
							<li>ISS: ASP.NET (C#), Java</li>
							<li>SSH/SSL, git, FTP, DNS</li>
							<li>Virtualization (Amazon Cloud, VMWare)</li>
							<li>Scripting (bash, VBScript, JScript)</li>
							<li>git: Version control software</li>
						</ul>
					</ul>
				</div>
			</section>
			<section>
				<h2>Web Administration Experience</h2>
				<div class="scontent">
					<ul>
						<li>Extensive experience as a technician, working at every level, from basic desktop computers to maintaining massive scale server architecture, including virtual environments</li>
						<li>Most experience with cloud-based (Amazon EC2) and virtualized Linux (CentOS/RHEL) servers</li>
						<li>Experience with Windows and Linux server products</li>
					</ul>
				</div>
			</section>
			<section>
				<h2>Work History</h2>
				<div class="scontent">
					<?php include("./workexperience.php"); ?>
				</div>
			</section>
			&copy; 2020 - Mitchell Ludwig
		</div>
	</div>
</body>

</html>
