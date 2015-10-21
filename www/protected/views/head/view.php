
<?php
    foreach ($page as $p){
       echo '<p>';
       echo $p->title;
       echo '</p>';
       echo '<textarea rows = "25" cols = "100" readonly >';
       echo $p->content;
       echo '</textarea';
    }
?>

