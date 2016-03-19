<?php
include('config.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>History of Chess</title>
	<link href="../css/homepage.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../js/file.js"></script>

	<script type="text/javascript">
		$(function() {
//More Button
$('.more').live("click",function() 
{
	var ID = $(this).attr("id");
	if(!isNaN(ID))
	{
		var top12 =$("#foot").offset().top;


		$("#more"+ID).html('<img src="moreajax.gif" />');
		$.ajax({
			type: "POST",
			url: "ajax_more.php",
			data: "lastmsg="+ ID, 
			cache: false,
			success: function(html){
				$("ol#updates").append(html);
				$("#more"+ID).remove();
			}
		});
	}
	else
	{
		$(".morebox").html('The End');

	}


	return false;


});
});

	</script>
	<style>
		@font-face{
			font-family: superstarHistory;
			src:url(../font/Montserrat-UltraLight.otf);
		}
		body
		{
			font-family:superstarHistory;
			color:#83e2fe;
			font-size:20px;

		}
		/*a { text-decoration:none; color:#0066CC}
		a:hover { text-decoration:underline; color:#0066cc }*/
		*
		{ margin:0px; padding:0px }
		ol.timeline
		{ list-style:none}
		.msg{ margin-right:8%;position:relative; padding-top:8px;padding-bottom: 8px;padding-left: 0px; }
		ol.timeline .msg:first-child{}
		.morebox
		{
			font-weight:bold;
			color:#F5DD90;
			text-align:center;
			border:solid 2px white;
			padding:8px;
			margin-top:15px;
			margin-bottom:8px;
			-moz-border-radius: 6px;-webkit-border-radius: 6px;
		}
		.morebox a{ color:#F5DD90; text-decoration:none}
		#container{margin-top:10%; width:90%; }
		#foot{
  background: black;
  height:7%;
  position: absolute;
  left: 0px;
  margin-top:12.5%;
  width: 100%;
  clear: both;
}

	</style>
</head>

<body>
	<div style="padding:4px; margin-bottom:10px; border-bottom:solid 1px #333333; "></div>
	<?php include'header.php'; ?>
	<div id='container'>
		<ol class="timeline" id="updates">
			<?php
				$sql=mysql_query("select * from messages order by msg_id asc limit 1");
				while($row=mysql_fetch_array($sql))
				{
					$msg_id=$row['msg_id'];
					$topictitle=$row['topictitle'];
					$message=$row['message'];
					
				?>
				 <h1 class="msg" style="color:#F0D9B5"><?php echo $topictitle; ?></h1> 
				<li>
					<?php echo $message; ?>
				</li>
				<br>
				<?php 
				} ?>
		</ol>
			<div id="more<?php echo $msg_id; ?>" class="morebox">
				<a href="#" class="more hvr-grow" id="<?php echo $msg_id; ?>">more</a>
			</div>
		</div>
<div id="foot">        
    <div class="ftabs-left"><a class="nav_element hvr-underline-from-center">@2015  ChessPlay</a></div>
    <div class="ftabs-right"><a class="nav_element hvr-underline-from-center">All rights reserved</a></div>
</div>
	</body>
	</html>
