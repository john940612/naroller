<?php
	include("connect_db.php");

		$eId = addslashes($_POST['eId']);
		$eName = addslashes($_POST['eName']);
		$ePwd = addslashes($_POST['ePwd']);
		//$ePerm = addslashes($_POST['ePerm']);
		
	
		try
		{
			
			$stmt = $dbh->prepare("INSERT INTO employee(eId,eName,ePwd)
				VALUES(:eId, :eName, :ePwd)");
	
			//$stmt->bindparam(":aId", $aId);
			$stmt->bindparam(":eId", $eId);
			$stmt->bindparam(":eName", $eName);
			$stmt->bindparam(":ePwd", $ePwd);
			//$stmt->bindparam("general", $ePerm);
			if(!$stmt->execute()){
				var_dump($stmt->errorInfo());
			}	
			//$stmt->execute();
	
		}
	
	
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	 	header("location: employeeManagement.php");

		
					?>