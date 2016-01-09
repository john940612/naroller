<?php
	include("connect_db.php");
	
	//$aTitle = addslashes($_POST['aTitle']);
	$pName = addslashes($_POST['pName']);
	$pDesc = addslashes($_POST['pDesc']);
	$pFile = addslashes($_POST['pFile']);
	$pPath = dirname(__FILE__)."/upload/".$pFile;
	$pThumb = dirname(__FILE__)."/thumb/".$pFile;

	try
	{
		
		$stmt = $dbh->prepare("INSERT INTO product(pName, pDesc, pPath, pThumb)
			VALUES(:pName, :pDesc, :pPath, :pThumb)");

		$stmt->bindparam(":pName", $pName);
		$stmt->bindparam(":pDesc", $pDesc);
		$stmt->bindparam(":pPath", $pPath);
		$stmt->bindparam(":pThumb", $pThumb);

		$stmt->execute();

	}


	catch(PDOException $e)
	{
		echo $e->getMessage();
	}


	header("location: product_list.php");

?>