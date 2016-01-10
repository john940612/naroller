<?php
	include("session.php")
	$path = './thumb';
	$dh = opendir($path);

	echo "<table border='1'>"; 
	echo '<form id="signInForm" action="product_modify.php" method="post" role="form">';
							
	while($file = readdir($dh))
	{
		if(basename($file) != '.' && basename($file) != '..')
		{
			echo "<tr>";
				echo "<td>";
					echo '<input name="pFile" type="radio" class="form-control" id="name" value="'.$file.'" style="width:13px; height:13px;"/>';
					//echo '<input name="pThumb" type="hidden" class="form-control" id="name" value="
						//thumb/'.$file.'"/>';
				echo "</td>";
				echo "<td>";
					echo "<img src=\"$path/$file\"/>";//./upload
				echo "</td>";
			echo "</tr>";
		}
	}
	
	echo "</table>";
	echo '<button id="updateButton" type="submit" name="submit" class="btn btn-default">選擇產品圖片</button>';
	echo '</form>';
/*
	echo '<form id="signInForm" action="productAddExample.php" method="post" role="form">';
		echo '<input name="pName" type="text" class="form-control" id="name" placeholder="請輸入文章標題" />';
		echo '<input name="pDesc" type="text" class="form-control" id="email" placeholder="請輸入文章副標題(可為空)" />';
		echo '<input name="pPath" type="text" class="form-control" id="email" value="'.$_POST['pPath'].'" placeholder="'.$_POST['pPath'].'"/>'.$_POST['pPath'];
		echo '<button id="updateButton" type="submit" name="submit" class="btn btn-default">新增產品</button>';
	echo '</form>';/*
/*
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
*/
?>