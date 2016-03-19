<?php
function protect_page() {
	if(isset($_SESSION['user_id'])) {
		header('Location: ../lr/protected.php');
		exit();
	}
}
?>