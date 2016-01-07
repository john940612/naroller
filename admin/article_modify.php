<?php
	include("connect_db.php");

	$aId = $_POST['aId'];
	$catch = "SELECT * FROM Article WHERE aId = $aId";
	//echo $catch;

	echo '<form id="signInForm" action="modify.php" method="post" role="form">';
	echo "<table border='1'>";
	echo '<input name="aId" type="hidden" value="'.$aId.'"/>';

	foreach($dbh->query($catch) as $row)
	{
		
		echo "<tr>";
			echo "<td>標題</td>";		
			echo "<td>";
				echo '<input name="aTitle" type="text" class="form-control" id="name" value="'.$row['aTitle'].'"/>';
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>副標</td>";
			echo "<td>";
				echo '<input name="aSecondTitle" type="text" class="form-control" id="email" value="'.$row['aSecondTitle'].'"/>';
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>時間</td>";
			echo "<td>";
				print_r ($row['aDateTime']);
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>大綱</td>";
			echo "<td>";
				//print_r ($row['aSummary']);
				echo '<input name="aSummary" type="text" class="form-control" id="email"value="'.$row['aSummary'].'" />';
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>文章</td>";
			echo "<td>";
				//print_r ($row['aText']);
				echo '<input name="aText" type="text" class="form-control" id="email"  value="'.$row['aText'].'"/>';
			echo "</td>";
		echo "</tr>";
		echo "</table>";
	}
	
	echo  '<button id="updateButton" type="submit" name="submit" class="btn btn-default">修改文章</button>';
	echo '</form>';

	//header("location: articleManagementExample.php");
?>