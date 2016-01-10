<?php
	include("connect_db.php");
		
	$submit = addslashes($_POST['submit']);
	$eName = addslashes($_POST['eName']);
	$ePwd = addslashes($_POST['ePwd']);


	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		try
		{
			$stmt = "UPDATE employee SET ePwd='$ePwd' WHERE eName=$eName";
			$dbh->exec($stmt);
			header("location: employeeManagement.php");
		}

		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

?>