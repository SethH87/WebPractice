<?php
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Recall</title>
    </head>
    <body>
        <h1>Goods Submitted</h1>
        <?php
            $titles = array('Length','Width','Depth');
            echo '<p>';
            for ($i = 0; $i < 3; $i++){
                echo $titles[$i].'<br>';
            }
            echo '<br>';
            foreach ($titles as $current){
                echo $current.'<br>';
            }
            echo '</p>';
        ?>
    </body>
</html>