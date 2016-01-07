<?php
	include("connect_db.php");

	date_default_timezone_set('Asia/Taipei');
	
	//$aId = "";
	$aTitle = addslashes($_POST['aTitle']);
	$aSecondTitle = addslashes($_POST['aSecondTitle']);
	$aText = addslashes($_POST['aText']);
	$aSummary = addslashes($_POST['aSummary']);
	$aDateTime = date("Y-m-d H:i:s");
<<<<<<< HEAD
/*
	$aTitle = "test";
	$aSecondTitle = "test";
	$aText = "test";
	$aSummary = "test";
	$aDateTime = date("Y-m-d / H:i:s");
*/

	echo $aTitle;
	echo $aSecondTitle;
	echo $aText;
	echo $aSummary;
	echo $aDateTime;

=======
	
>>>>>>> e7b057fd026fd602517553fc23be6d3612914152
	try
	{
		
		$stmt = $dbh->prepare("INSERT INTO article(aTitle, aSecondTitle, aText, aSummary, aDateTime)
			VALUES(:aTitle, :aSecondTitle, :aText, :aSummary, :aDateTime)");
<<<<<<< HEAD

		//$stmt->bindparam(":aId", $aId);
		$stmt->bindparam(":aTitle", $aTitle);
		$stmt->bindparam(":aSecondTitle", $aSecondTitle);
		$stmt->bindparam(":aText", $aText);
		$stmt->bindparam(":aSummary", $aSummary);
		$stmt->bindparam(":aDateTime", $aDateTime);

		$stmt->execute();
		echo "1";
=======
	
		$stmt->bindParam(':aTitle', $aTitle);
		$stmt->bindParam(':aSecondTitle', $aSecondTitle);
		$stmt->bindParam(':aText', $aText);
		$stmt->bindParam(':aSummary', $aSummary);
		$stmt->bindParam(':aDateTime', $aDateTime);
		if(!$stmt->execute()){
			var_dump($stmt->errorInfo());
		}
>>>>>>> e7b057fd026fd602517553fc23be6d3612914152

	}


	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
/*
	if(!$dbh->queryExec($stmt))
	{
		echo 'fail';
	}*/


	//header("location: articleManagementExample.php");

?>