<?php
	include("connect_db.php");

	date_default_timezone_set('Asia/Taipei');
	
	$submit = addslashes($_POST['submit']);
	$aId = addslashes($_POST['aId']);
	$aTitle = addslashes($_POST['aTitle']);
	$aSecondTitle = addslashes($_POST['aSecondTitle']);
	$aText = addslashes($_POST['aText']);
	$aSummary = addslashes($_POST['aSummary']);
	$aDateTime = date("Y-m-d H:i:s");


	
	try
	{
		if($submit == 1)
		{
			$stmt = "UPDATE article SET aTitle='$aTitle', aSecondTitle='$aSecondTitle',
				aText='$aText', aSummary='$aSummary', aDateTime='$aDateTime' WHERE aId=$aId";
			$dbh->exec($stmt);
		}

		else if($submit == 2)
		{
			$stmt = "DELETE FROM `sad`.`article` WHERE aId=$aId";
			$dbh->exec($stmt);
			$catch = "SELECT * FROM article WHERE aId > $aId";
			foreach($dbh->query($catch) as $row)
			{
				$aId_modify = "UPDATE article SET aId=aId-1 WHERE aId='".$row['aId']."'";
				$dbh->exec($aId_modify);
			}
			
		}
	}


	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

?>