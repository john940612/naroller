<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pic</title>
</head>
<body>
<?php
	include("connect_db.php");
	
	//$aTitle = addslashes($_POST['aTitle']);
	$pName = addslashes($_POST['pName']);
	$pDesc = addslashes($_POST['pDesc']);
	$pPath = addslashes($_POST['pPath']);

	try
	{
		
		$stmt = $dbh->prepare("INSERT INTO product(pName, pDesc, pPath)
			VALUES(:pName, :pDesc, :pPath)");

		$stmt->bindparam(":pName", $pName);
		$stmt->bindparam(":pDesc", $pDesc);
		$stmt->bindparam(":pPath", $pPath);

		$stmt->execute();

	}


	catch(PDOException $e)
	{
		echo $e->getMessage();
	}


	//header("location: articleManagementExample.php");

?>
</body>
</html>