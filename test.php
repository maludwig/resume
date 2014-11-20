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
	<script src="js/jquery-slowtype-1.0.js"></script>
    <script type="text/javascript">
        $(function(){
            $.get("files/bash.txt",function(data){
                $("#bash").slowtype(data, 200, 8);
            });
            $("#content").slowtype($("html").html(), 200, 8);
        });
        
	</script>
</head>

<body>
    <div id="content">
        Derp
    </div>
    <div id="bash">
        Derp
    </div>
</body>
</html>

