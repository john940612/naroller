<?php
	include("connect_db.php");
	$catch = "SELECT * FROM Employee";
	echo '<table border="1">';
	echo '<form id="signInForm" action="employee_modify.php" method="post" role="form">';
	echo "<tr>";
		//echo "<th>修改</th>";
		echo '<th>員工ID</th>';
		echo '<th>姓名</th>';
		echo '<th>密碼</th>';
		echo '<th>權限</th>';
	echo '</tr>';
    $i=1;
	foreach($dbh->query($catch) as $row){
		if($i==1){
            echo '<tr class="trtd1">';
			echo '<td>';
				echo '<input name="eId" type="radio" class="form-control" id="name" value="'.$row['eId'].'"/>';
				print_r ($row['eId']);
			echo '</td>';	
			echo '<td>';
				print_r ($row['eName']);
				//echo '<input name="eName" type="hidden" class="form-control" id="email" value="'.$row['eName'].'"/>';
			echo '</td>';
			echo '<td>';
				print_r ($row['ePerm']);
				//echo '<input name="ePerm" type="hidden" class="form-control" id="email"value="'.$row['ePerm'].'" />';
			echo '</td>';
		  echo '</tr>';
            $i=2;
        }
        else{
            echo '<tr class="trtd2">';
                echo '<td>';
                    echo '<input name="eId" type="radio" class="form-control" id="name" value="'.$row['eId'].'"/>';
                    print_r ($row['eId']);
                echo '</td>';	
                echo '<td>';
                    print_r ($row['eName']);
                    //echo '<input name="eName" type="hidden" class="form-control" id="email" value="'.$row['eName'].'"/>';
                echo '</td>';
                echo '<td>';
                    print_r ($row['ePerm']);
                    //echo '<input name="ePerm" type="hidden" class="form-control" id="email"value="'.$row['ePerm'].'" />';
                echo '</td>';
            echo '</tr>';
            $i=1;
        }
	}
	echo  '<button id="updateButton" type="submit" name="submit" class="btn btn-default">修改員工權限</button>';
	echo '</form>';
	echo '</table>';
?>