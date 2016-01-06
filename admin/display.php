<?php
  include("connect_db.php");
  $catch = "SELECT * FROM Article";
  $flag = 1;
  echo "<table border='1'>"; 
  foreach($dbh->query($catch) as $row) {
    if ($flag == 1) {
      echo "<tr>";
        echo "<th>時間</th>";
        echo "<th>標題</th>";
        echo "<th>副標</th>";
        echo "<th>文章</th>";
        echo "<th>大綱</th>";
      echo "</tr>";
      $flag = 0;
    }
    echo "<tr>";
      echo "<td>";
        print_r ($row['aDateTime']);
      echo "</td>";
      echo "<td>";
        print_r ($row['aTitle']);
      echo "</td>";
      echo "<td>";
        print_r ($row['aSecondTitle']);
      echo "</td>";
      echo "<td>";
        print_r ($row['aText']);
      echo "</td>";
      echo "<td>";
        print_r ($row['aSummary']);
      echo "</td>";
    echo "</tr>";
  }
  echo "</table>";

?>