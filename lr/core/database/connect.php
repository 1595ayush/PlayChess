<?php
$connect_error = 'Sorry we are experiencing connection issues.';

mysql_connect('localhost', 'root', '') or die($connect_error);
mysql_select_db('chess') or die($connect_error);
?>