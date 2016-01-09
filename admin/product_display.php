<?php
	include(dirname(__FILE__)."/connect_db.php");
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
				$tok_thumb = explode(".", $row['pThumb'], 2);
				$pThumb = $tok_thumb[0].$tok_thumb[1];
				echo "<img src='".dirname(__FILE__).$pThumb."'/>";//./upload
			echo "</td>";
		echo "</tr>";
	}
	echo "</table>";



?>