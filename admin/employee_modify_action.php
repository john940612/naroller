<?php
	include("connect_db.php");

		
	$submit = addslashes($_POST['submit']);
	$eId = addslashes($_POST['eId']);
	$ePerm = addslashes($_POST['ePerm']);


	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		try
		{
			if($submit == 1)
			{
				$stmt = "UPDATE employee SET ePerm='$ePerm' WHERE eId=$eId";
				$dbh->exec($stmt);
			}

			else if($submit == 2)
			{
				$stmt = "DELETE FROM `sad`.`employee` WHERE eId=$eId";
				$dbh->exec($stmt);
			}
			header("location: employeeManagement.php");
		}


		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

?>