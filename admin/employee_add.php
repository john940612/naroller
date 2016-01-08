<?php
	include("connect_db.php");

	session_start();
	if(permission($_SESSION['user_permission']))
	{
		//$aId = "";
		$eId = addslashes($_POST['eId']);
		$eName = addslashes($_POST['eName']);
		$ePwd = addslashes($_POST['ePwd']);
		$ePerm = addslashes($_POST['ePerm']);
		
	
		try
		{
			
			$stmt = $dbh->prepare("INSERT INTO article(eId,ePName,ePwd,ePerm)
				VALUES(:eId, :eName, :ePwd, :ePerm)");
	
			//$stmt->bindparam(":aId", $aId);
			$stmt->bindparam(":eId", $eId);
			$stmt->bindparam(":eName", $eName);
			$stmt->bindparam(":ePwd", $ePwd);
			$stmt->bindparam(":ePerm", $ePerm);
	
			$stmt->execute();
	
		}
	
	
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	function permission($_SESSION['user_permission'])
	{
		if($_SESSION['user_permission'] = "admin")
			return 1;
		else
			return 0;
	}
?>