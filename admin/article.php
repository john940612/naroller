<?php
	include("connect_db.php");

	date_default_timezone_set('Asia/Taipei');
	
	$aTitle = addslashes($_POST['aTitle']);
	$aSecondTitle = addslashes($_POST['aSecondTitle']);
	$aText = addslashes($_POST['aText']);
	$aSummary = addslashes($_POST['aSummary']);
	$aDateTime = date("Y-m-d / H:i:s");

	try
	{

		$stmt = $dbh->prepare("INSERT INTO article(aTitle, aSecondTitle, aText, aSummary, aDateTime)
			VALUES(:aTitle, :aSecondTitle, :aText, :aSummary, :aDateTime)" );
	
		$stmt->bindparam(":aTitle", $aTitle);
		$stmt->bindparam(":aSecondTitle", $aSecondTitle);
		$stmt->bindparam(":aText", $aText);
		$stmt->bindparam(":aSummary", $aSummary);
		$stmt->bindparam(":aDateTime", $aDateTime);

		$stmt->execute();

	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

	//header("location: articleManagementExample.php");

?>