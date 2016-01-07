<?php
	include("connect_db.php");

	date_default_timezone_set('Asia/Taipei');
	
	$aId = addslashes($_POST['aId']);
	$aTitle = addslashes($_POST['aTitle']);
	$aSecondTitle = addslashes($_POST['aSecondTitle']);
	$aText = addslashes($_POST['aText']);
	$aSummary = addslashes($_POST['aSummary']);
	$aDateTime = date("Y-m-d H:i:s");

	try
	{		
		$stmt = "UPDATE article SET aTitle='$aTitle', aSecondTitle='$aSecondTitle',
			aText='$aText', aSummary='$aSummary', aDateTime='$aDateTime' WHERE aId=$aId";
		/*
		$stmt->bindparam(":aTitle", $aTitle);
		$stmt->bindparam(":aSecondTitle", $aSecondTitle);
		$stmt->bindparam(":aText", $aText);
		$stmt->bindparam(":aSummary", $aSummary);
		$stmt->bindparam(":aDateTime", $aDateTime);
*/
		echo $stmt;
		//$stmt->execute();
		$dbh->exec($stmt);
	}


	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

?>