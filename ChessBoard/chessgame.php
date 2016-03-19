
<!DOCTYPE html>
<html>	
<head>

	<title>Chess</title>

	<link type="text/css" rel="stylesheet" href="css/chessboard-0.3.0.min.css">
	<link type="text/css" rel="stylesheet" href="css/sweet-alert.css">
	<link rel="stylesheet" type="text/css" href="../css/homepage.css">
	
	<script src="js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="js/sweet-alert.js"></script>
	<script type="text/javascript" src="js/cinnamon_engine_1_2b.js"></script>
	<script type="text/javascript" src="js/chessboard-0.3.0.min.js"></script>
	<script type="text/javascript" src="js/chess.js"></script>
	<script type="text/javascript" src="js/json3.min.js"></script>
	<script type="text/javascript" src="js/cinnamon.js"></script>

	<style>
		@font-face{
			font-family: superstar4;
			src: url(../font/Montserrat-UltraLight.otf);
		}
		@font-face{
			font-family: superstar;
			src: url(../font/Montserrat-ExtraBold.otf);
		}
		body
		{
			margin: 0;
			padding: 0;
			background: url("../img/back.jpg");
			font-family: superstar4;
		}
		#startPositionBtn
		{
			margin-left: 46%;
			margin-top: 0.6%;
		}
		#status
		{
			font-weight: lighter;
			color:#f5dd90;
			font-size: 25px;
			position: absolute;
			right:70px;
			top:100px;
		}
		#pgn
		{
			top:150px;
			color:#82E2FF;
			font-size: 25px;
			position: absolute;
			right:154px;
		}
			#leftbutton1{
		font-family: superstarQuiz;
		background: transparent;
		height: 37px;
		width: 129px;
		float: left;
		margin-top: 20px;
		margin-left: 44%;
		margin-bottom: 1px;	
		text-align: center;
		font-size: 25px;
		cursor:pointer;
		border-radius: 5px;
		border: 2px solid white;
		color: #F5DD90;
		margin-bottom: 50px;
}
.hvr-grow {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
}

		/*.hvr-underline-from-center {
			display: inline-block;
			vertical-align: middle;
			-webkit-transform: translateZ(0);
			transform: translateZ(0);
			box-shadow: 0 0 1px rgba(0, 0, 0, 0);
			-moz-osx-font-smoothing: grayscale;
			position: relative;
			overflow: hidden;
		}
		.hvr-underline-from-center:before {
			content: "";
			position: absolute;
			z-index: -1;
			left: 50%;
			right: 50%;
			bottom: 0;
			background: #ffbb03;
			height: 1px;
			-webkit-transition-property: left, right;
			transition-property: left, right;
			-webkit-transition-duration: 0.3s;
			transition-duration: 0.3s;
			-webkit-transition-timing-function: ease-out;
			transition-timing-function: ease-out;
		}
		.hvr-underline-from-center:hover:before, .hvr-underline-from-center:focus:before, .hvr-underline-from-center:active:before {
			left: 0;
			right: 0;
		}
		.nav_element:hover {
			background-position:bottom; 
		}
		.nav_element{
			color: transparent;
			text-decoration: none;
			font-family: superstar;
			text-transform: uppercase;
			background:url(../img/slide.png);
			-webkit-background-clip: text;
			-webkit-transition :background-position 0.3s ease-in-out,;
			transition :background-position 0.3s ease-in-out;
			letter-spacing: 2px;
			margin-top: 20px;
			padding-bottom: 5px;
		}

		.logo{
			float: left;
			margin-right: 30px;
		}

		.htabs{
			color: white;
			float: left;
			font-size: 20px;
			height: 100%;
			text-align: center;
			margin-right: 30px;
			padding-top: 7px;
		}
		.login{
			color: white;
			float: right;
			font-size: 20px;
			height: 100%;
			text-align: center;
			margin-right: 5%;
			padding-top: 7px;
		}
		#header{
			background: black;
			position:absolute;
			left:0px;
			top:0px;
			height:12%;
			width:100%;
		}
		.ftabs-left{
			color: white;
			float: left;
			font-size: 17px;
			height: 100%;
			margin-left: 5%;
			margin-right: 7px;
			margin-top: -10px;
			cursor: default;
		}

		.ftabs-right{
			color: white;
			float: right;
			font-size: 17px;
			height: 100%;
			margin-right: 5%;
			margin-top: -10px;
			cursor: default;
		}
		#footer{
			background: black;
			height:7%;
			position: absolute;
			width: 100%;
			clear: both;
			left: 0px;
			top: 675px;
		}*/		
	</style>

</head>
<body>
	<?php include("header.php"); ?>
	<div id="board" style="width:520px; margin-left:400px; margin-top:90px;"></div>
	<Form name ="form" Method ="POST" Action ="chessgame.php">

         <button type="submit" class="hvr-grow" id="leftbutton1">RESTART</button>

</FORM>
	<span id="status"></span>
	<span id="pgn"></span><br>
	<!-- <span id="fen"></span> -->
	<?php include("../footer.php"); ?>
</body>
</html>