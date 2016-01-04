<?php
	include("connect_db.php");

	date_default_timezone_set('Asia/Taipei');

	$aDateTime = date("Y-m-d / H:i:s");
	$aTitle = addslashes($_POST['aTitle']);
	$aSecondTitle = addslashes($_POST['aSecondTitle']);
	$aText = addslashes($_POST['aText']);
	$aSummary = addslashes($_POST['aSummary']);

	try
	{

		$stmt = $dbh->prepare("INSERT INTO article(aDateTime, aTitle, aSecondTitle, aText, aSummary)
			VALUES(:aDateTime, :aTitle, :aSecondTitle, :aText, :aSummary)");

		$stmt->bindparam(":aDateTime", $aDateTime);
		$stmt->bindparam(":aTitle", $aTitle);
		$stmt->bindparam(":aSecondTitle", $aSecondTitle);
		$stmt->bindparam(":aText", $aText);
		$stmt->bindparam(":aSummary", $aSummary);

		$stmt->execute();

	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}

?>