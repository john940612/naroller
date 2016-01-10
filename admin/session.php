<?php
	session_start();
	if($_SESSION['permission'] != "admin" && $_SESSION['permission'] != "general")
	{
		header("location: ../index.php");
	}
?>