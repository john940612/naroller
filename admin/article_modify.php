<?php
echo '<form id="signInForm" action="article.php" method="post" role="form">'
                        
        
                          echo '<input name="aTitle" type="text" class="form-control" id="name" value="'.$row['aTitle'].'"/>';
                          echo '<input name="aSecondTitle" type="text" class="form-control" id="email" value="'.$row['aSecondTitle'].'"/>';
                          echo '<input name="aText" type="text" class="form-control" id="email"  value="'.$row['aText'].'"/>';
                          echo '<input name="aSummary" type="text" class="form-control" id="email"value="'.$row['aSummary'].'" />';
                          echo  '<button id="updateButton" type="submit" name="submit" class="btn btn-default">修改文章</button>';
                        echo '</form>';
?>