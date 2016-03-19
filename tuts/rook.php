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
			<p id="desc" class="margins"><b>Tutorial 4</b></p>
			<h3 class="piece-title">The Rook - The Sturdy Castle</h3>
			<p class="description margins" style="color:#82E2FF">A rook is on the board in all of its sturdy glory. Go ahead and <b> Move it to a legal square</b>.</p>
			<p class="margins" id="hintButton" style="cursor:pointer" onclick="showHint()">Here's a hint!</p>
			<p class="margins" id="hint" style="visibility:hidden">Rooks move vertically and horizontally.</p>
		</div>
		<div id="alertbox">
			<p style="color:#F5DD90;">Well Done!</p>
			<p>Click on Next Button to go to next tutorial</p>
			<a style="color:#F5DD90;" href="rook.php">Try Again</a>
		</div>
	</div>
	<table id="chessTable" border="1"></table>
	<div id="right">
		<?php include 'rtopbox.php';?>
	</div>
	<?php include'../footer.php'; ?>
</body>
</html>
