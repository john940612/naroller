<?php
	include("connect_db.php");

		$eId = addslashes($_POST['eId']);
		$eName = addslashes($_POST['eName']);
		$ePwd = addslashes($_POST['ePwd']);
		$ePerm = addslashes($_POST['ePerm']);
		
	
		try
		{
			
			$stmt = $dbh->prepare("INSERT INTO employee(eId,ePName,ePwd,ePerm)
				VALUES(:eId, :eName, :ePwd,'general')");
	
			//$stmt->bindparam(":aId", $aId);
			$stmt->bindparam(":eId", $eId);
			$stmt->bindparam(":eName", $eName);
			$stmt->bindparam(":ePwd", $ePwd);
			$stmt->bindparam("general", $ePerm);
	
			$stmt->execute();
	
		}
	
	
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	 	header("location: employeeManagement.php");

		
					?>