<?php
	session_start();
	if(isset($_SESSION['kalisetty'])){
		unset($_SESSION['kalisetty']);
		header('location:login.php');
	}
?>
