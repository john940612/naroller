<?php
	include("connect_db.php");
	//$flag = 1;
	//include("display_paging.php");
	$catch = "SELECT * FROM article";
	echo "<table border='0'>";
	echo "<tr>";
		echo "<th><center>標題</center></th>";
		//echo "<th>時間</th>";
		echo "<th width=''>副標題</th>";
		//echo "<th>副標</th>";
		//echo "<th colspan='2'>文章</th>";
		echo "<th colspan='2'>內容</th>";
	echo "</tr>";
	foreach($dbh->query($catch) as $row)
	{
		/*
		if($flag)
		{
			
			$flag = 0;
		}   */
		echo "<tr>";
			echo "<td width=''>";
				print_r ($row['aTitle']);
				echo '<input name="aTitle" type="hidden" class="form-control" id="name" value="'.$row['aTitle'].'"/>';
			echo "</td>";       
			//echo "<td>";
				//print_r ($row['aDateTime']);
			//echo "</td>";
			echo "<td width=''>";
				print_r ($row['aSecondTitle']);
				echo '<input name="aTitle" type="hidden" class="form-control" id="name" value="'.$row['aSecondTitle'].'"/>';
			echo "</td>";
			//echo "<td>";
				//print_r ($row['aSecondTitle']);
				//echo '<input name="aSecondTitle" type="hidden" class="form-control" id="email" value="'.$row['aSecondTitle'].'"/>';
			//echo "</td>";
			//echo "<td colspan='2'>";
				//print_r ($row['aText']);
				//echo '<input name="aText" type="hidden" class="form-control" id="email"  value="'.$row['aText'].'"/>';
			//echo "</td>";
			echo "<td colspan='2' width='30%'>";
				print_r ($row['aText']);
				echo '<input name="aText" type="hidden" class="form-control" id="email"value="'.$row['Text'].'" />';
			echo "</td>";
		echo "</tr>";
	}
	echo "</table>";



?>