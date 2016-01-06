<?php

	$path = './upload';
	$dh = opendir($path);
	echo "<table border='1'>"; 
	
	/*if ($flag == 1) {
		echo "<tr>";
			echo "<th>".$name."</th>";
		echo "</tr>";
		$flag = 0;
	}*/
	while($file = readdir($dh))
	{
	echo "<tr>";
		echo "<td>";
			echo "<img src=\"$path/$file\"/>";//./upload
		echo "</td>";
	echo "</tr>";
	}
	echo "</table>";

?>