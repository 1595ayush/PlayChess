<?php 
include 'core/init.php';
include 'includes/overall/header.php';
?>
<h1>Home</h1>
<?php
global $session_user_id;
if(has_access($session_user_id, 1) === true) {
	echo 'Welcome Admin!';
} else if(has_access($session_user_id, 2) === true) {
	echo 'Welcome Moderater!';
}
?>
<?php include 'includes/overall/footer.php'; ?>