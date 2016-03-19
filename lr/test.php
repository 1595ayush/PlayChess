<?php 
require 'core/init.php';
if(logged_in() === true) {
	header('Location: ../ChessBoard/chessgame.php');
} else {
	header('Location: login.php');
}
?>