<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   mysql_select_db('chess');
   $sql = 'SELECT * from games';

   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_assoc($retval))
   {
   		$str = "[Site ".$row['Site']."]"."[Date ".$row['Date']."]"."[White ".$row['White']."]"."[Black ".$row['Black']."]"."[Result ".$row['Result']."]".$row['Moves'];
         echo json_encode($str);
   }
   
   mysql_close($conn);
?>