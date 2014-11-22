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
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/hook.js"></script><!-- Some JS I made to implement hooks -->
	<script src="js/touch.js"></script><!-- Some JS I made to simplify binding commands to touch events -->
	<script src="js/linearalgebra-1.3.js"></script><!-- A library I made to do linear algebra. Originally built for the Whiteboard to help interpolate curves -->
	<script src="js/jquery-linearalgebra-1.0.js"></script><!-- A jQuery extension I made to interface between the DOM and the linear algebra library -->
	<script src="js/jquery-center.1.2.js"></script><!-- A jQuery extension I made to center elements in different ways easily -->
	<script src="js/color.1.1.js"></script><!-- A library I made to work easily with colors -->
    <!-- The Javascript that powers this purposefully annoying shake-light functionality on this page -->
    <!-- Seriously, who actually buys shake-lights? Or those crank lights that only last for like 20 seconds? -->
    <!-- What good will they be in any kind of emergency? Like, "Oh no! Zombies! Good thing I can see for 20 seconds before I need to make noise!" -->
    <!-- Anyways, the flashlight serves as a way of showcasing my Javascript and CSS3 abilities -->
    <script src="js/jquery-flashlight-1.0.js"></script>
    <!-- The flashlight also loads quite quickly, and serves to hide the loading of heavier content. Only ~300kb of has been loaded at this point. -->
    <script src="lib/codemirror.js"></script>
    <link rel="stylesheet" href="lib/codemirror.css">
    <link rel="stylesheet" href="theme/ambiance.css">
    <script src="mode/htmlmixed/htmlmixed.js"></script>
    <script src="mode/xml/xml.js"></script>
    <script src="mode/javascript/javascript.js"></script>
    <script src="mode/css/css.js"></script>
	<script src="js/jquery-slowtype-1.0.js"></script>
	
    <script type="text/javascript">
        $(window).load(function(){
            $("#dial").center();
            $("#lightswitch").center();
        });
	</script>
</head>

<body>
    <div id="content">
        
    </div>
    
    <div id="dial">
        <div id="admin">
            <pre></pre>
        </div>
        <div id="human">:D</div>
        <div id="developer">
            <textarea id="code" name="code">
            </textarea>
        </div>
        <div id="examples">EXAMP</div>
        <h1 id="lightswitch">ON</h1>
    </div>
    <div id="flashlight">
        <h2>Looking for a web developer?</h2>
        <h2>It's too dark in here to find one.</h2>
        <h2>Shake your flashlight to charge it.</h2>
    </div>
    
</body>
</html>

