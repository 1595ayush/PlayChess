<!DOCTYPE html>

<head>
	<title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="../css/homepage.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <script type="text/javascript" src="homepage.js"></script>
</head>

<body>



<?php include'header.php';?>

		<p style="margin-top:100px"></p>
		
		<form action="grade.php" method="post" id="Quiz">
	
               <?php
                    $connect_error = 'Sorry, we are experiencing connection problems';
                    mysql_connect('localhost', 'root', '') or die($connect_error);
                    mysql_select_db('chess') or die($connect_error);
                   
                    $sql = "SELECT * FROM   questions";

                    $result = mysql_query($sql);

                    $name = 1;

                    while($row = mysql_fetch_assoc($result)) { 
                        ?>
                        <p style="color:#f5dd90; font-size:25px;margin-right:5%"><?php echo $row["question_id"]." . ".$row["question"];?></p><br>
                        <input type = 'Radio' Name ="<?=$name?>" value= "A"><span class="opt"><?php echo $row["option_A"]?></span><br>
                        <input type = 'Radio' Name ="<?=$name?>" value= "B"><span class="opt"><?php echo $row["option_B"]?></span><br>
                        <input type = 'Radio' Name ="<?=$name?>" value= "C"><span class="opt"><?php echo $row["option_C"]?></span><br>
                        <input type = 'Radio' Name ="<?=$name?>" value= "D"><span class="opt"><?php echo $row["option_D"]?></span><br>
                        <input type="radio" Name ="<?=$name?>"  value="E" checked="false" style="visibility:hidden" />
                        <br>
                        <?php
                            $name = $name + 1;
                    }?>
                    <br>
            <button type="submit" class="hvr-grow" id="leftbutton1">Submit</button>
		
		</form>
	<div id="foot">        
    <div class="ftabs-left"><a class="nav_element hvr-underline-from-center">@2015  ChessPlay</a></div>
    <div class="ftabs-right"><a class="nav_element hvr-underline-from-center">All rights reserved</a></div>
</div>

</body>

</html>