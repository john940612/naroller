<?php
	//include("session.php");
	include("connect_db.php");
	//$flag = 1;
	//include("display_paging.php");
	$catch = "SELECT * FROM article";
	echo "<table border='0'>";
	echo '<form id="signInForm" action="article_modification.php" method="post" role="form">';

	foreach($dbh->query($catch) as $row)
	{
		/*
		if($flag)
		{
			
			$flag = 0;
		}   */
		echo "<tr>";
			echo "<td><center>";
				echo '<input name="aId" type="radio" class="form-control"  value="
					'.$row['aId'].'"/>';
			echo "</center></td>";       
			//echo "<td>";
				//print_r ($row['aDateTime']);
			//echo "</td>";
			echo "<td>";
				print_r ($row['aTitle']);
				echo '<input name="aTitle" type="hidden" class="form-control" id="name" value="'.$row['aTitle'].'"/>';
			echo "</td>";
			//echo "<td>";
				//print_r ($row['aSecondTitle']);
				//echo '<input name="aSecondTitle" type="hidden" class="form-control" id="email" value="'.$row['aSecondTitle'].'"/>';
			//echo "</td>";
			//echo "<td colspan='2'>";
				//print_r ($row['aText']);
				//echo '<input name="aText" type="hidden" class="form-control" id="email"  value="'.$row['aText'].'"/>';
			//echo "</td>";
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