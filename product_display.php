<?php
	include("admin/connect_db.php");
	//$flag = 1;
	//include("display_paging.php");
	$catch = "SELECT * FROM product";
	echo "<table border='1'>";
	echo "<tr>";
		echo "<th>產品名稱</th>";
		echo "<th>產品介紹</th>";
		echo "<th>產品圖片</th>";
	echo "</tr>";
	foreach($dbh->query($catch) as $row)
	{
		echo "<tr>";
			echo "<td>";
				print_r ($row['pName']);
			echo "</td>";
			echo "<td>";
				print_r ($row['pDesc']);
			echo "</td>";
			echo "<td>";
				//print_r ($row['pPath']);
				echo "<img src='".$row['pThumb']."'/>";//./upload
			echo "</td>";
		echo "</tr>";
	}
	echo "</table>";



?>