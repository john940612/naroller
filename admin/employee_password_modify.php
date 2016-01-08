<?php
	include("connect_db.php");
	/*session_start();
	if(permission($_SESSION['user_permission']))	
	{*/
		$eId = $_POST['eId'];
		$catch = "SELECT * FROM Employee WHERE eId = $eId";
		//echo $catch;
	
		echo '<form id="signInForm" action="employee_modify_action.php" method="post" role="form">';
		echo "<table border='1'>";
		echo '<input name="eId" type="hidden" value="'.$eId.'"/>';
	
		foreach($dbh->query($catch) as $row)
		{
			
			echo "<tr>";
			echo "</tr>";
				echo "<td>姓名</td>";		
				echo "<td>";
					print_r ($row['eName']);
				echo "</td>";
				echo "</tr>";
			echo "<tr>";
				echo "<td>密碼</td>";
				echo "<td>";
					print_r ($row['ePwd']);
					echo '<input name="ePerm" type="text" class="form-control" id="email"value="'.$row['ePerm'].'" />';
				echo "</td>";
			echo "</tr>";
			echo "</table>";
		}
		
		echo  '<button id="updateButton" type="submit" name="submit" class="btn btn-default" value="1">修改密碼</button>';
		echo '</form>';
	//}
/*
	function permission($_SESSION['user_permission'])
	{
		if($_SESSION['user_permission'] = "general")
			return 1;
		else
			return 0;
	}*/
?>