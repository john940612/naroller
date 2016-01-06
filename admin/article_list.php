<?php
	
	include("connect_db.php");
	$catchArticle = "SELECT aTitle, aSecondTitle, aDateTime FROM article"

	echo "<table border='1'>"; 
	foreach($dbh->query($catchArticle) as $row) {
		if ($flag == 1) {
			echo "<tr>";
			echo "<th width=22%>店名</th>";
			echo "<th width=31%>地址</th>";
			echo "<th width=14%>電話</th>";
			echo "<th width=5%>平均價位</th>";
			echo "<th>營業時間</th>";
			echo "</tr>";
		}
		echo "<tr>";
			echo "<td>";
				print_r ($row['aTitle']);
			echo "</td>";
			echo "<td>";
				print_r ($row['aSecondTitle']);
			echo "</td>";
			echo "<td>";
				print_r ($row['aDateTime']);
			echo "</td>";
		echo "</tr>";
		}
	echo "</table>";

?>