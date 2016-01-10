<?php
	include("session.php")
	$path = './thumb';
	$dh = opendir($path);

	echo "<table border='1'>"; 
	
	while($file = readdir($dh))
	{
		if(basename($file) != '.' && basename($file) != '..')
		{
			echo "<tr>";
				echo "<td>";
					echo "<img src=\"$path/$file\"/>";//./upload
				echo "</td>";
			echo "</tr>";
		}
	}
	echo "</table>";

?>