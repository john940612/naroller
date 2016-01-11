<?php
	include("admin/connect_db.php");
	//$flag = 1;
	//include("display_paging.php");
	$catch = "SELECT * FROM product";
	echo '<table>';
	echo '<tr class="headRow">';
		echo "<th>產品名稱</th>";
		echo "<th>產品介紹</th>";
		echo "<th>產品圖片</th>";
	echo "</tr>";
    $i = 1;
	foreach($dbh->query($catch) as $row){
        if($i==1){
            echo '<tr class="trtd1">';
            $i=2;
        }
        else{
            echo '<tr class="trtd2">';
            $i=1;
        }
		
			echo '<td class="productNameCol">';
				print_r ($row['pName']);
			echo '</td>';
			echo '<td>';
				print_r ($row['pDesc']);
			echo '</td>';
			echo '<td>';
				//print_r ($row['pPath']);
				$tok_thimb = explode('.', $row['pThumb'], 2);
				$pThumb = $tok_thimb[0].$tok_thimb[1];
				echo "<img src='".'./admin'.$pThumb."'/>";//./upload
			echo "</td>";
		echo "</tr>";
	}
	echo "</table>";



?>