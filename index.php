<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Resume - Mitchell Ludwig</title>
    <!-- Hi! So you've decided to take a peek at the code. Awesome! I've kept everything purposefully unminified, so that you can look at the code, and easily understand the structure. -->
    <script src="js/ie-redirect.js"></script><!-- redirect IE9 and under to the sympathy page -->
    <!-- I'm using Less as my CSS compiler, because it has a rich feature set of awesome shorthand that really helps with speeding up development. On a normal web page, these would be precompiled server-side. I've left them here for your viewing pleasure. -->
	<link rel="stylesheet/less" type="text/css" href="less/style.less" />
	<script src="js/less-2.0.0.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,300' rel='stylesheet' type='text/css'><!-- A pretty font -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"><!-- Icon font -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery-center.1.2.js"></script>
	
    <script>
        $(window).load(function(){
            $fh2 = $("#toodark>h2");
            $fh2.center().hide();
            $($fh2[0]).fadeIn(500).delay(2500).fadeOut(400);
            $($fh2[1]).delay(3500).fadeIn(500).delay(2500).fadeOut(400);
            $($fh2[2]).delay(7000).fadeIn(500);
            $("#toodark").delay(9000).fadeOut(400);
            setTimeout(function(){ window.scrollTo(0,0); },8500);
            setTimeout(function(){ window.scrollTo(0,0); },9000);
            $("#toodark").click(function() {
                $(this).hide();
            });
            $(".tile div img").center();
        });
        
        $(function(){
            $("#btn-power").click(function(){
                //$("#neon").toggleClass("off").delay(200).toggleClass("off").delay(200).toggleClass("off").delay(400);
                $(this).fadeOut();
                $("#header").toggleClass("off");
                setTimeout(function() { $("#header").toggleClass("off"); },100);
                setTimeout(function() { $("#header").toggleClass("off"); },200);
                setTimeout(function() { $("#header").toggleClass("off"); },240);
                setTimeout(function() { $("#header").toggleClass("off"); },250);
                setTimeout(function() { $("#header").toggleClass("off"); },265);
                setTimeout(function() { $("#header").toggleClass("off"); },280);
                setTimeout(function() { $("#header").toggleClass("off"); },500);
                setTimeout(function() { $("#header").toggleClass("off"); },800);
                $("#shroud").delay(1700).fadeOut(2000);
            });
            window.scrollTo(0,0);
        });
	</script>
</head>

<body>
    <div id="container">
        <div id="header" class="off">
            <h1>Mitchell Ludwig</h1>
            <h3><a href="tel:4034793269">403-479-3269</a> &nbsp;&nbsp;&nbsp; <a href="mailto:mitchell.ludwig@gmail.com">mitchell.ludwig@gmail.com</a></h3>
        </div>
        <div id="content">
            <div class="section">
                <h2>Tech Demo</h2>
                <div class="scontent">
                    The <a href="http://edgemontgeek.com/whiteboard/">Whiteboard App</a> is a web app I designed and implemented to showcase my web development skills. It allows for people to share a whiteboard in the cloud, and visually communicate ideas over any distance. Built on LAMP (Linux [CentOS], Apache, MySQL, PHP) in the Amazon EC2 cloud.
                </div>
            </div>
            <div class="section">
                <h2>Other Sample Work</h2>
                <div class="scontent">
                    <p><a href="http://cross-consultants.com/">Cross Consultants</a> is a security firm. Cloud hosted, built on PHP. While an extremely simple site, it does feature a quiz in the Learn section, that generates a certificate.</p>
                    <p><a href="http://thecalgarycollection.ca/">The Calgary Collection</a> is a folk music collection, curated by the amazing Gillian M<sup>c</sup>Kercher. Cloud hosted (Amazon EC2), built on LAMP, powered by Wordpress. Scalable architecture was leveraged to handle large volumes during peak times. </p>
                    <p><a href="https://github.com/maludwig">Latest GitHub account</a> | <a href="https://github.com/masludwig">First GitHub account</a></p>
                </div>
            </div>
            <div class="section">
                <h2>Education</h2>
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
                        <div><img src="img/edu-W3Schools-css.png" /></div>
                        <p>CSS3 Certified by W3Schools</p>
                    </div>
                    <div class="tile">
                        <div><img src="img/edu-GATE.png" /></div>
                        <p>Graduate of “Gifted And Talented Education” (GATE) program, with an IQ in the top 1% by intelligence</p>
                    </div>
                </div>
            </div>
            <div class="section">
                <h2>Web Development Experience</h2>
                <div class="scontent">
                    <ul>
                        <li>Extensive experience with dealing directly with clients to provide exactly what the client wants</li>
                        <li>Proficient with modern web technologies, including:</li>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>JavaScript</li>
                            <li>XML</li>
                            <li>AJAX</li>
                            <li>jQuery</li>
                            <li>Bootstrap</li>
                            <li>Context Management System (Wordpress)</li>
                        </ul>
                        <li>Proficient with many back-end technologies, including </li>
                        <ul>
                            <li>LAMP/WAMP: (Linux/Windows, PHP, MySQL, Apache)</li>
                            <li>ISS: ASP.NET (C#), Java</li>
                            <li>SSH/SSL, git, FTP, DNS</li>
                            <li>Virtualization (Amazon Cloud, VMWare)</li>
                            <li>Scripting (bash, VBScript, JScript)</li>
                            <li>git: Version control software</li>
                        </ul>
                    </ul>
                </div>
            </div>
            <div class="section">
                <h2>Web Administration Experience</h2>
                <div class="scontent">
                    <ul>
                        <li>Extensive experience as a technician, working at every level, from basic desktop computers to maintaining massive scale server architecture, including virtual environments</li>
                        <li>Extensive experience with Windows Server products</li>
                        <li>Primary experience is with cloud-based (Amazon EC2) virtualized Linux (CentOS) servers</li>
                    </ul>
                </div>
            </div>
            <div class="section">
                <h2>Work History</h2>
                <div class="scontent">
                    <?php include("./workexperience.php"); ?>
                </div>
            </div>
            &copy; 2014 - Mitchell Ludwig
            <div id="shroud"></div>
        </div>
    </div>
</body>
</html>

