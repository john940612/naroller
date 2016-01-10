<?php
	include("connect_db.php");




	$catch = "SELECT * FROM Employee";
	echo "<table border='1'>";
	echo '<form id="signInForm" action="employee_modify.php" method="post" role="form">';
	echo "<tr>";
		echo "<th>修改</th>";	
		echo "<th>員工ID</th>";
		echo "<th>姓名</th>";
		echo "<th>權限</th>";
	echo "</tr>";
	foreach($dbh->query($catch) as $row)
	{
		echo "<tr>";
			echo "<td>";
				echo '<input name="eId" type="radio" class="form-control" id="name" value="'.$row['eId'].'"/>';
			echo "</td>";
			echo "<td>";
				print_r ($row['eId']);
			echo "</td>";
			echo "<td>";
				print_r ($row['eName']);
			echo "</td>";
			echo "<td>";
				print_r ($row['ePerm']);
			echo "</td>";
		echo "</tr>";
	}
	echo  '<button id="updateButton" type="submit" name="submit" class="btn btn-default">選擇修改員工</button>';
	echo '</form>';
	echo "</table>";
	
?>