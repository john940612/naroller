<?php
	include("connect_db.php");

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$eName = $_SESSION['login_user']
		$catch = "SELECT * FROM Employee WHERE eName = $eName";
	
		echo '<form id="signInForm" action="employee_password_modify_action.php" method="post" role="form">';
		echo "<table border='1'>";

		foreach($dbh->query($catch) as $row)
		{
			
			echo "<tr>";
			echo "</tr>";
				echo "<td>姓名</td>";		
				echo "<td>";
					print_r ($row['eName']);
					echo '<input name="ePwd" type="hidden" class="form-control" id="email" 
						value="'.$row['eName'].'" />';
				echo "</td>";
				echo "</tr>";
			echo "<tr>";
				echo "<td>密碼</td>";
				echo "<td>";
					print_r ($row['ePwd']);
					echo '<input name="ePwd" type="text" class="form-control" id="email" 
						value="'.$row['ePwd'].'" placeholder="'.$row['ePwd'].'" />';
				echo "</td>";
			echo "</tr>";		
		}
		echo "</table>";
		echo  '<button id="updateButton" type="submit" name="submit" class="btn btn-default">修改密碼</button>';
		echo '</form>';
	}

?>