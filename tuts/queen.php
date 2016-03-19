<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="tuts.css">
	<link rel="stylesheet" type="text/css" href="../css/homepage.css">
	<script type="text/javascript" src="func1.js"></script>
</head>
<body onload="loadTable()">
	<?php include'header.php'; ?> 
	<div class="left">
		<div id="b">
			<p id="desc" class="margins"><b>Tutorial 5</b></p>
			<h3 class="piece-title">The Bishop - The One-Dimensional Sniper </h3>
			<p class="description margins" style="color:#82E2FF">Here we have a <i>light squared bishop</i>. We'll cover the <i>dark squared bishop</i> in the next exercise. Go ahead and <b>move the bishop to a legal square</b>.</p>
			<p class="margins" id="hintButton" style="cursor:pointer" onclick="showHint()">Here's a hint!</p>
			<p class="margins" id="hint" style="visibility:hidden">Bishops can move as far as they want diagonally.</p>
		</div>
		<div id="alertbox">
			<p style="color:#F5DD90;">Well Done!</p>
			<p>Click on Next Button to go to next tutorial</p>
			<a style="color:#F5DD90;" href="queen.php">Try Again</a>
		</div>
	</div>
	<table id="chessTable" border="1"></table>
	<div id="right">
		<?php include 'rtopbox.php';?>		
	</div>
	<?php include'../footer.php'; ?>
</body>
</html>
