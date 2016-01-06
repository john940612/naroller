<?php
  //$flag = 1;
  echo "<table border='1'>"; 
  foreach($dbh->query($catch) as $row) {
    /*if ($flag == 1) {*/
      echo "<tr>";
        echo "<th>".$name."</th>";
      echo "</tr>";
      /*$flag = 0;
    }*/
    echo "<tr>";
      echo "<td>";
        print_r (./upload);
      echo "</td>";
    echo "</tr>";
  }
  echo "</table>";

?>