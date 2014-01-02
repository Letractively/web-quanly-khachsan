<?php
	ob_start();
	session_start(); 
	session_destroy();
	header("location: ../adminpage/admin.php");
	//header("location: ../index.php");
?>