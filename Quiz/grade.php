<!DOCTYPE html>


<head>
    <title>Results</title>
    <link rel="stylesheet" type="text/css" href="../css/homepage.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script type="text/javascript" src="homepage.js"></script>
</head>
<body>

	<div id="page-wrap">

<?php include'header.php';?>

        <div id='res1'>RESULTS</div><br>

        <?php
        	$answers = array();
            for($i=1;$i<=10;$i++)
            {
            	array_push($answers, $_POST[$i]);
            }
            $connect_error = 'Sorry, we are experiencing connection problems';
			mysql_connect('localhost', 'root', '') or die($connect_error);
			mysql_select_db('nemil') or die($connect_error);
		   
		    $sql = "SELECT answer FROM   questions";

			$result = mysql_query($sql);

            $totalCorrect = 0;
            $i=0;
            while($row = mysql_fetch_assoc($result))
            {
            	if ($answers[$i] === $row["answer"]) 
        		{
        			$totalCorrect++;
        			echo "<div class='ans' >Correct Answer for Question ".($i+1)." </div>";
        		}
        		else if($answers[$i] === "E")
        		{
        			echo "<div class='ans' >No answer recorded for Question ".($i+1)." </div>";
        		}
                else
                {
                    echo "<div class='ans' >Incorrect answer for Question ".($i+1)." </div>";
                }
            	$i++;
            }
            
            echo "<div id='res2'>$totalCorrect / $i correct</div>";
            
        ?>

<Form name ="form" Method ="POST" Action ="quiz.php">

         <button type="submit" class="hvr-grow" id="leftbutton2">Retake Quiz</button>

</FORM>

<div id="foot">        
    <div class="ftabs-left"><a class="nav_element hvr-underline-from-center">@2015  ChessPlay</a></div>
    <div class="ftabs-right"><a class="nav_element hvr-underline-from-center">All rights reserved</a></div>
</div>

	
	</div>
</body>

</html>