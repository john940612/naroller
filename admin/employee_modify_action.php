<?php
	include("connect_db.php");

		
	$submit = addslashes($_POST['submit']);
	$eId = addslashes($_POST['eId']);
	$eName = addslashes($_POST['eName']);
	$ePwd = addslashes($_POST['ePwd']);
	$ePerm = addslashes($_POST['ePerm']);


	
	try
	{
		if($submit == 1)
		{
			$stmt = "UPDATE employee SET eName='$eName', ePwd='$ePwd',
				ePerm='$ePerm' WHERE eId=$eId";
			$dbh->exec($stmt);
		}

		else if($submit == 2)
		{
			$stmt = "DELETE FROM `sad`.`employee` WHERE eId=$eId";
			$dbh->exec($stmt);
		}
	}


	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

?>