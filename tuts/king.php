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
			<p id="desc" class="margins"><b>Tutorial 6</b></p>
			<h3 class="piece-title"> The King - Priceless Piece </h3>
			<p class="description margins" style="color:#82E2FF">The king is priceless - it can't be taken! That's why there's no field for you to input how much a king is worth.<b>Show us that you know how to move it.</b></p>
			<p class="margins" id="hintButton" style="cursor:pointer" onclick="showHint()">Here's a hint!</p>
			<p class="margins" id="hint" style="visibility:hidden">The king can move to any square adjacent to the one it's currently on.</p>
		</div>
		<div id="alertbox">
			<p style="color:#F5DD90;">Well Done! You have completed the tutorials</p>
			<p>Click on Next Button to start playing the game</p>
			<a style="color:#F5DD90;" href="king.php">Try Again</a>
		</div>
	</div>
	<table id="chessTable" border="1"></table>
	<div id="right">
		<?php include 'rtopbox.php';?> 
	</div>
	<?php include'../footer.php'; ?>
</body>
</html>