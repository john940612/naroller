<?php
	include("connect_db.php");
	$catch = "SELECT * FROM Article";
	echo "<table border='1'>";
	echo '<form id="signInForm" action="article_modify.php" method="post" role="form">';
	echo "<tr>";
		//echo "<th>修改</th>";
		echo "<th>員工ID</th>";
		echo "<th>姓名</th>";
		echo "<th>密碼</th>";
		echo "<th>權限</th>";
	echo "</tr>";
	foreach($dbh->query($catch) as $row)
	{
		echo "<tr>";
			//echo "<td>";
				//echo '<input name="aId" type="radio" class="form-control" id="name" value="'.$row['a'].'"/>';
			//echo "</td>";		
			echo "<td>";
				print_r ($row['eId']);
				echo '<input name="eId" type="hidden" class="form-control" id="name" value="'.$row['eId'].'"/>';
			echo "</td>";
			echo "<td>";
				print_r ($row['eName']);
				echo '<input name="eName" type="hidden" class="form-control" id="email" value="'.$row['eName'].'"/>';
			echo "</td>";
			echo "<td>";
				print_r ($row['ePwd']);
				echo '<input name="ePwd" type="hidden" class="form-control" id="email"  value="'.$row['ePwd'].'"/>';
			echo "</td>";
			echo "<td>";
				print_r ($row['ePerm']);
				echo '<input name="ePerm" type="hidden" class="form-control" id="email"value="'.$row['ePerm'].'" />';
			echo "</td>";
		echo "</tr>";
	}
	echo  '<button id="updateButton" type="submit" name="submit" class="btn btn-default">修改員工權限</button>';
	echo '</form>';
	echo "</table>";