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
	
    <script type="text/javascript">
        $(window).load(function(){
            $fh2 = $("#toodark>h2");
            $fh2.center().hide();
            $($fh2[0]).fadeIn(500).delay(2500).fadeOut(400);
            $($fh2[1]).delay(3500).fadeIn(500).delay(2500).fadeOut(400);
            $($fh2[2]).delay(7000).fadeIn(500);
            $("#toodark").delay(9000).fadeOut(400);
            setTimeout(function(){
                window.scrollTo(0,0);
            },9000);
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
    <div id="header" class="off">
        <div id="btn-power"></div>
        <div id="neon"></div>
        <h3>403-479-3269 &nbsp;&nbsp;&nbsp; <a href="mailto:mitchell.ludwig@gmail.com">mitchell.ludwig@gmail.com</a></h3>
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
                <p><a href="http://cross-consultants.com/">Cross Consultants</a> is a security firm.</p>
                <p><a href="http://thecalgarycollection.ca/">The Calgary Collection</a> is a collection of folk music.</p>
                <p><a href="http://cross-consuladsaasdtants.com/">Nothinglink</a> is a dickface firm.</p>
            </div>
        </div>
        <div class="section">
            <h2>Education</h2>
            <div class="scontent">
                <div class="tile">
                    <img src="img/edu-UofC.png" />
                    University of Calgary (2008-2013) Computer Science, with a degree Concentration in Information Security
                </div>
                <div class="tile">
                    <img src="img/edu-CompTIA.png" />
                    CompTIA A+, Network+, and Security+ Certified
                </div>
                <div class="tile">
                    <img src="img/edu-Microsoft.png" />
                    Microsoft Certified Professional (MCP), Microsoft Certified Systems Administrator (MCSA)
                </div>
                <div class="tile">
                    <img src="img/edu-GATE.png" />
                    Graduate of “Gifted And Talented Education” (GATE) program, with an IQ of 140 (top 1% by intelligence)
                </div>
            </div>
        </div>
        <div class="section">
            <h2>Web Development Experience</h2>
            <div class="scontent">
                <ul>
                    <li>Extensive experience with dealing directly with clients to provide exactly what the client wants</li>
                    <li>Proficient with modern web technologies, including HTML5, CSS3, JavaScript, AJAX, jQuery, Bootstrap, Wordpress</li>
                    <li>Proficient with many back-end technologies, including </li>
                    <ul>
                        <li>LAMP/WAMP (Linux/Windows, PHP, MySQL, Apache), Node, Python, Java</li>
                        <li>SSH/SSL, git, FTP, DNS</li>
                        <li>Virtualization (Amazon Cloud, VMWare) </li>
                    </ul>
                </ul>
            </div>
        </div>
        <div class="section">
            <h2>Web Administration Experience</h2>
            <div class="scontent">
                <ul>
                    <li>Extensive experience as a technician, working at every level, from basic desktop computers to maintaining massive scale server architecture, including virtual environments</li>
                    <li>Extensive experience using the Amazon EC2 Cloud to set up and maintain reliable web servers</li>
                    <li>Extensive experience with Windows Server products</li>
                    <li>Primary experience is with cloud-based virtualized Linux (CentOS) servers</li>
                </ul>
            </div>
        </div>
        <div class="section">
            <h2>Work History</h2>
            <div class="scontent">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pretium convallis arcu at posuere. Integer rhoncus ullamcorper velit eget gravida. Nunc id nibh dolor, quis imperdiet purus. Sed interdum nunc non mauris lobortis viverra. Cras lacus orci, mollis vitae congue ut, cursus et mi. Duis venenatis faucibus magna vulputate dignissim. Suspendisse ultricies malesuada purus ac malesuada. Quisque vehicula, risus vitae cursus tincidunt, eros eros suscipit massa, in iaculis tellus nisl eu metus. Duis congue, quam at ultricies sollicitudin, erat elit malesuada eros, vitae posuere sem sapien nec tellus. Pellentesque arcu arcu, malesuada sed consequat sed, rutrum at leo. Cras vel sem nec leo interdum interdum et et nibh. In eget est diam, sit amet fermentum purus.</p>
                <p>Sed vitae enim quis nibh malesuada pretium. Nulla facilisi. Suspendisse nisl eros, dignissim quis lacinia a, ullamcorper eget ipsum. Praesent consequat, felis et aliquam porttitor, enim lorem consectetur lectus, ac porttitor mi neque quis ante. Proin diam enim, ullamcorper id pretium quis, commodo nec ipsum. Ut consequat lorem non urna eleifend ultricies pharetra risus pretium. Cras posuere dignissim eros, sit amet tincidunt elit pulvinar vitae. Quisque sed orci vel nisi hendrerit dictum in ac mi. Aliquam tempus tincidunt dictum. Nam consequat varius nunc ac elementum. Praesent neque lacus, tempus a malesuada sit amet, mattis hendrerit nunc. Nunc non nulla sed lacus aliquet auctor vel quis nisl. Donec eget ligula eget tellus suscipit congue. Donec tortor mauris, scelerisque a vehicula at, posuere non risus. Fusce posuere tempor aliquet. Suspendisse tincidunt lorem at magna consequat eu varius lacus dignissim.</p>
                <p>Aenean in eleifend lacus. Nunc sollicitudin, turpis vel blandit pretium, tellus quam blandit urna, eu tincidunt ligula sem at enim. Sed eget orci sed elit eleifend adipiscing vitae a dolor. Mauris ultrices rutrum pulvinar. Ut nec velit sit amet eros hendrerit sodales. Vestibulum ultrices, turpis eu vulputate condimentum, leo orci ullamcorper velit, eu congue magna nibh eget magna. Pellentesque tincidunt ipsum feugiat dolor tincidunt a vestibulum elit luctus.</p>
                <p>Ut vel lectus lacus, eu tempus orci. Sed quis mauris purus, id fringilla nisi. In interdum imperdiet ante, ullamcorper tincidunt purus condimentum vel. Nunc vulputate, ante vitae auctor interdum, neque quam volutpat libero, nec semper felis tellus et ligula. Etiam auctor bibendum arcu. Sed nulla nunc, egestas a cursus vitae, adipiscing eu lorem. Sed eget enim a eros luctus viverra eu vitae tellus. Aenean ac turpis orci, ac varius ipsum. Vivamus aliquam, massa adipiscing hendrerit cursus, est libero tincidunt tellus, sit amet pretium diam purus nec orci. Curabitur commodo, leo vel gravida elementum, odio felis tincidunt odio, quis dictum lorem enim eu nisl. Praesent lorem eros, fringilla in dictum id, gravida nec elit. Proin tincidunt sollicitudin fringilla. Mauris dictum ante non orci scelerisque vel commodo diam sollicitudin. Phasellus euismod turpis gravida elit sodales imperdiet ac vel risus. Mauris sed enim mauris. Suspendisse potenti.</p>
                <p>In hac habitasse platea dictumst. Sed porttitor dui vitae magna elementum posuere. Curabitur condimentum fermentum odio eget malesuada. Vivamus vel eros lorem, vitae sollicitudin lacus. Sed eget bibendum ipsum. Mauris tincidunt consectetur ornare. Proin porttitor velit eu mauris tristique feugiat. Donec pellentesque aliquam tellus quis pulvinar. Vestibulum metus ante, euismod nec rhoncus quis, placerat eget elit. Fusce metus ante, euismod eu molestie vel, gravida eget massa.</p>
                <p>Proin lorem nunc, auctor non vulputate quis, sollicitudin et nisi. Integer eu elit mi. In scelerisque dignissim sapien vitae tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed ultrices libero quis diam pulvinar in viverra lorem consectetur. Cras ullamcorper porttitor tempus. Sed ullamcorper scelerisque urna vel blandit. Donec turpis dolor, ultricies at malesuada eu, malesuada et arcu. Nulla id pretium dolor. Morbi iaculis mi ut ligula dictum a fermentum nisl sodales.</p>
                <p>Nam risus massa, aliquam nec fermentum ultrices, malesuada in felis. Donec bibendum bibendum luctus. Cras suscipit sollicitudin magna in iaculis. Proin risus dolor, iaculis vitae posuere id, eleifend ac dolor. Nunc ultrices euismod quam sed rhoncus. In hac habitasse platea dictumst. Etiam cursus, libero in mollis iaculis, leo lectus fringilla neque, eget pharetra diam odio vitae nunc. Suspendisse potenti. Proin lobortis lorem et nisl pellentesque tempor. Nunc suscipit nisi gravida nibh dapibus vitae elementum augue ullamcorper. Nam ultrices lorem sed lectus suscipit sed feugiat odio bibendum. Pellentesque eu rhoncus est. Mauris at felis lacus. Fusce tellus sem, sodales ac posuere sit amet, porta ac metus.</p>
                <p>Nullam vehicula ultrices lorem eu pellentesque. Suspendisse sodales tempus scelerisque. Nunc rutrum feugiat molestie. Phasellus gravida, erat id elementum tempor, nibh lacus luctus eros, sed euismod mauris sem eget neque. Quisque et arcu mi, in lacinia turpis. Duis auctor nunc sit amet turpis dignissim auctor. Cras quis dui eget magna egestas sodales. Vivamus sed justo purus. Suspendisse id tellus ac dolor tincidunt blandit. Donec dolor augue, lobortis sed dapibus sed, pulvinar blandit ante. Donec tellus nibh, blandit in dictum vitae, malesuada in magna. In lacinia eleifend neque at interdum. Donec risus magna, vulputate vitae fermentum vel, consectetur sit amet neque. In ultrices, diam eu gravida aliquet, lectus neque consequat felis, nec interdum nulla diam a nunc. Quisque molestie luctus metus, ut rutrum tortor pellentesque a. Etiam ullamcorper metus vel est consequat tempus.</p>
                <p>Nulla facilisi. Sed quis sem eu nisl eleifend ultrices. Nullam in ligula felis, sed convallis odio. Suspendisse ultricies, lectus at dictum facilisis, ante risus tempor lacus, eu sodales urna diam a eros. Quisque condimentum porta malesuada. Nullam imperdiet, mauris non adipiscing accumsan, eros dolor feugiat turpis, vel varius orci enim sed augue. Cras nulla neque, mattis in pulvinar in, volutpat fringilla enim. Nulla interdum odio at ipsum feugiat nec vestibulum mauris aliquam. Sed varius magna vitae tortor pellentesque eu adipiscing lacus fermentum. Aliquam in ultrices odio. Duis odio dolor, aliquet non congue et, euismod a massa.</p>

            </div>
        </div>
        <div id="shroud"></div>
    </div>
    <div id="toodark">
        <h2>Looking for a web developer?</h2>
        <h2>It's too dark in here to find one.</h2>
        <h2>You'd better turn on the lights.</h2>
    </div>
    
</body>
</html>

