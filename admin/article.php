<?php
	include("connect_db.php");

	date_default_timezone_set('Asia/Taipei');
	
	$aTitle = addslashes($_POST['aTitle']);
	$aSecondTitle = addslashes($_POST['aSecondTitle']);
	$aText = addslashes($_POST['aText']);
	$aSummary = addslashes($_POST['aSummary']);
	$aDateTime = date("Y-m-d H:i:s");
	
	try
	{

		$stmt = $dbh->prepare("INSERT INTO article(aTitle, aSecondTitle, aText, aSummary, aDateTime)
			VALUES(:aTitle, :aSecondTitle, :aText, :aSummary, :aDateTime)");
	
		$stmt->bindParam(':aTitle', $aTitle);
		$stmt->bindParam(':aSecondTitle', $aSecondTitle);
		$stmt->bindParam(':aText', $aText);
		$stmt->bindParam(':aSummary', $aSummary);
		$stmt->bindParam(':aDateTime', $aDateTime);
		if(!$stmt->execute()){
			var_dump($stmt->errorInfo());
		}

	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

	//header("location: articleManagementExample.php");

?>