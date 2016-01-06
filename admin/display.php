<?php
  $flag = 1;
  echo "<table border='1'>"; 
  foreach($dbh->query($catch) as $row) {
    if ($flag == 1) {
      echo "<tr>";
        echo "<th width=22%>時間</th>";
        echo "<th width=31%>標題</th>";
        echo "<th width=14%>副標</th>";
        echo "<th width=5%>文章</th>";
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