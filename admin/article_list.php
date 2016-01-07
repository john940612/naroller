<?php
	include("connect_db.php");
	$catch = "SELECT * FROM Article";
	echo "<table border='1'>";
	echo '<form id="signInForm" action="article_modify.php" method="post" role="form">';
	echo "<tr>";
		echo "<th>修改</th>";
		echo "<th>時間</th>";
		echo "<th>標題</th>";
		echo "<th>副標</th>";
		echo "<th>文章</th>";
		echo "<th>大綱</th>";
	echo "</tr>";
	foreach($dbh->query($catch) as $row)
	{
		echo "<tr>";
			echo "<td>";
				echo '<input name="aId" type="radio" class="form-control" id="name" value="
					'.$row['aId'].'"/>';
			echo "</td>";		
			echo "<td>";
				print_r ($row['aDateTime']);
			echo "</td>";
			echo "<td>";
				print_r ($row['aTitle']);
				echo '<input name="aTitle" type="hidden" class="form-control" id="name" value="'.$row['aTitle'].'"/>';
			echo "</td>";
			echo "<td>";
				print_r ($row['aSecondTitle']);
				echo '<input name="aSecondTitle" type="hidden" class="form-control" id="email" value="'.$row['aSecondTitle'].'"/>';
			echo "</td>";
			echo "<td colspan='2'>";
				print_r ($row['aText']);
				echo '<input name="aText" type="hidden" class="form-control" id="email"  value="'.$row['aText'].'"/>';
			echo "</td>";
			echo "<td colspan='2'>";
				print_r ($row['aSummary']);
				echo '<input name="aSummary" type="hidden" class="form-control" id="email"value="'.$row['aSummary'].'" />';
			echo "</td>";
		echo "</tr>";
	}
	echo  '<button id="updateButton" type="submit" name="submit" class="btn btn-default">修改文章</button>';
	echo '</form>';
	echo "</table>";

?>