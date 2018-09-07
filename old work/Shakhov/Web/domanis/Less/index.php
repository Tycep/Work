<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <link rel="stylesheet/less" type="text/css" href="styles.less" /> -->
	<?php
	require_once 'php/Less.php';
	$parser = new Less_Parser();
	$parser->parse( '@color: #4D926F; #header { color: @color; } h2 { color: @color; }' );
	$css = $parser->getCss();
	echo $css;
	// $parser = new Less_Parser();
	// $parser->parseFile( 'styles.less', '/' );
	// $css = $parser->getCss();
	?>

	<!-- <style rel="stylesheet/less" type="text/css">
		@color: black;
		body{
			background-color: @color;
		}
	</style> -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
	<script type="text/javascript" src="anime/anime.min.js"></script>
	<script type="text/javascript" src="Scripts/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="Scripts/common.js"></script>
	<title>Document</title>
</head>

<body>
	<!-- <audio src="sound/Portal 2 - Core.mp3" id="audio"></audio> -->
	
	<section id="main">
		<div class="chell"></div>
		<div class="glados"></div>
	</section>

	<section id="boot">
		<audio controls autoplay loop hidden="true" id="audio">
			<source src="sound/Portal 2 - Core.mp3" type="audio/mp3">
		</audio>
		<!-- <embed src="sound/Portal 2 - Core.mp3" width="180" height="90" loop="true" autostart="true" hidden="true"/> -->
		<div class="logo"><img src="img/logo.png"></div>
		<script type="text/javascript">
			// var audio = document.getElementById("audio");
			// audio.play();
	</script>
	</section>
	
</body>
</html>