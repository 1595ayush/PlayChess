<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="tuts.css">
	<link rel="stylesheet" type="text/css" href="../css/homepage.css">
	<script type="text/javascript" src="func1.js"></script>
</head>
<body onload="loadTable()">
	<div id="wrapper">
	<?php include'header.php'; ?> 
	<div class = "left">
		<div id="b">
			<p id="desc" class="margins"><b>Tutorial 1</b></p>
			<h3 class="piece-title"> The Pawn - The Backbone of Chess </h3>
			<p class="description margins" style="color:#82E2FF">Here is a <i>pawn</i> - go ahead and drag it to a legal square. If you want to take back your move, just click <i>undo</i>.</p>
			<p class="margins" id="hintButton" style="cursor:pointer" onclick="showHint()">Here's a hint!</p>
			<p class="margins" id="hint" style="visibility:hidden">A pawn can move either one or two squares forward on the first move.</p>
		</div>
		<div id="alertbox">
			<p style="color:#F5DD90;">Well Done!</p>
			<p>Click on Next Button to go to next tutorial</p>
			<a style="color:#F5DD90;" href="pawn.php">Try Again</a>
		</div>
	</div>
	<table id="chessTable" border="1"></table>
	<div id="right">
		<?php include 'rtopbox.php';?>
	</div>
	<?php include'../footer.php'; ?>
	</div>
</body>
</html>
