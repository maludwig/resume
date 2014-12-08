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
	
    <script type="text/javascript">
        $(window).load(function(){
            $fh2 = $("#toodark>h2");
            $fh2.hide();
            $($fh2[0]).fadeIn(800).delay(3000).fadeOut();
            $($fh2[1]).delay(5000).fadeIn().delay(3000).fadeOut();
            $($fh2[2]).delay(10000).fadeIn();
        });
        $(function(){
            $("#btn-power").click(function(){
                $("#neon").toggleClass("off");
            });
        });
	</script>
</head>

<body>
    <div id="header">
        <div id="btn-power"></div>
        <div id="neon" class="off"></div>
    </div>
    <div id="content">
        
    </div>
    <div id="toodark">
        <h2>Looking for a web developer?</h2>
        <h2>It's too dark in here to find one.</h2>
        <h2>Shake your flashlight to charge it.</h2>
    </div>
    
</body>
</html>

