<!DOCTYPE html>
<html>
<head>
	<title>Chess</title>
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
	<script type="text/javascript" src="homepage.js"></script>
</head>
<body>
<div>
	<div id="wrapper">
	<?php include'header.php'; ?>
		<a href="lr/test.php"><div class="boxes hvr-grow" id="play"></div></a>
		<a href="PGNViewer/pgn2.php"><div class="boxes hvr-grow" id="pgnView"></div></a>
		<a href="History/history.php"><div class="boxes1 hvr-grow" id="history"></div></a>
		<a href="News/news.php"><div class="boxes1 hvr-grow" id="news"></div></a>
		<a href="tuts/pawn.php"><div class="boxes1 hvr-grow" id="tuts" ></div></a>
		<a href="Quiz/quiz.php"><div class="boxes1 hvr-grow" id="quiz"></div></a>
	</div>
	<div id="container"></div>
	<?php include'footer.php'; ?>
	</div>
</body>
</html>