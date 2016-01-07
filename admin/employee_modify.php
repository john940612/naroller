<?php
	include("connect_db.php");

	$eId = $_POST['eId'];
	$catch = "SELECT * FROM Employee WHERE eId = $eId";
	//echo $catch;

	echo '<form id="signInForm" action="modify.php" method="post" role="form">';
	echo "<table border='1'>";
	echo '<input name="eId" type="hidden" value="'.$eId.'"/>';

	foreach($dbh->query($catch) as $row)
	{
		
		echo "<tr>";
		    echo "<tr>";
			echo "<td>員工ID</td>";
			echo "<td>";
				print_r ($row['eId']);
			echo "</td>";
		echo "</tr>";
			echo "<td>姓名</td>";		
			echo "<td>";
				echo '<input name="eName" type="text" class="form-control" id="name" value="'.$row['eName'].'"/>';
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>密碼</td>";
			echo "<td>";
				echo '<input name="ePwd" type="text" class="form-control" id="email" value="'.$row['ePwd'].'"/>';
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>權限</td>";
			echo "<td>";
				//print_r ($row['aSummary']);
				echo '<input name="ePerm" type="text" class="form-control" id="email"value="'.$row['ePerm'].'" />';
			echo "</td>";
		echo "</tr>";
		echo "</table>";
	}
	
	echo  '<button id="updateButton" type="submit" name="submit" class="btn btn-default">修改員工</button>';
	echo '</form>';

	//header("location: articleManagementExample.php");
?>