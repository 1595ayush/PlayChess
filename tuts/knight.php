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
			<p id="desc" class="margins"><b>Tutorial 2</b></p>
			<h3 class="piece-title"> The Knight - The Little Piece Who Could Jump </h3>
			<p class="description margins" style="color:#82E2FF">The <i>knight</i> is the only piece in the game that can hop over other pieces. Like the previous exercise, <b>move the knight to a legal square</b>.</p>
			<p class="margins" id="hintButton" style="cursor:pointer" onclick="showHint()">Here's a hint!</p>
			<p class="margins" id="hint" style="visibility:hidden">A knight moves in an "L" shape: 2 squares in one direction, and then 1 square in a direction perpendicular to the first one.</p>
		</div>
		<div id="alertbox">
			<p style="color:#F5DD90;">Well Done!</p>
			<p>Click on Next Button to go to next tutorial</p>
			<a style="color:#F5DD90;" href="knight.php">Try Again</a>
		</div>
	</div>
	<table id="chessTable" border="1"></table>
	<div id="right">
		<?php include 'rtopbox.php';?>
	</div>
	<?php include'../footer.php'; ?>
</body>
</html>
