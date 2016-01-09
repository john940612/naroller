<?php
	include("connect_db.php");

<<<<<<< HEAD
/*	session_start();
	if(permission($_SESSION['user_permission']))
	{*/
=======
	//session_start();
	//if(permission($_SESSION['user_permission']))
	//{
>>>>>>> ee4b943393be3bd71bd60bf042db3b2c0eb3d45a
		$eId = $_POST['eId'];
		$catch = "SELECT * FROM Employee WHERE eId = $eId";
		echo $catch;
	
		echo '<form id="signInForm" action="employee_modify_action.php" method="post" role="form">';
		echo "<table border='1'>";
		echo '<input name="eId" type="hidden" value="'.$eId.'"/>';
	
		foreach($dbh->query($catch) as $row)
		{
			
			echo "<tr>";
				echo "<td>姓名</td>";		
				echo "<td>";
					print_r ($row['eName']);
				echo "</td>";
				echo "</tr>";
			echo "<tr>";
				echo "<td>權限</td>";
				echo "<td>";
					//print_r ($row['aSummary']);
					echo '<input name="eName" type="hidden" class="form-control" id="email"value="'.$row['eName'].'" />';
					echo '<input name="ePwd" type="hidden" class="form-control" id="email"value="'.$row['ePwd'].'" />';
					echo '<input name="ePerm" type="hidden" class="form-control" id="email"value="'.$row['ePerm'].'" />';
				echo "</td>";
			echo "</tr>";
			echo "</table>";
		}
		
		echo  '<button id="updateButton" type="submit" name="submit" class="btn btn-default" value="1">修改員工</button>';
		echo  '<button id="updateButton" type="submit" name="submit" class="btn btn-default" value="2">刪除員工</button>';
		echo '</form>';
	//}
<<<<<<< HEAD
/*
	function permission($_SESSION['user_permission'])
	{
		if($_SESSION['user_permission'] = "admin")
			return 1;
		else
			return 0;
	}
*/
=======

	//function permission($_SESSION['user_permission'])
	//{
		//if($_SESSION['user_permission'] = "admin")
			//return 1;
		//else
			//return 0;
	//}

>>>>>>> ee4b943393be3bd71bd60bf042db3b2c0eb3d45a
	//header("location: articleManagementExample.php");
?>