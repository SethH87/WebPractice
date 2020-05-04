<?php
    $num_1 = $_POST["gmgoods"];
    $num_2 = $_POST["grgoods"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Testing</title>
    </head>
    <body>
        <h1>Goods Submitted</h1>
        <?php
        echo '<p>';
        if ($num_1 == 0 && $num_2 == 0){
            echo 'No amounts were input!<br><br>';
        }else {
            $prices['General Merchandise'] = $num_1;
            $prices['Grocery'] = $num_2;

            foreach($prices as $key => $value){
                echo $key.':  '.$value.'<br>';
            }
            echo '<br>';
            echo '<table>';
            while($element = each($prices)){
                echo '<tr>';
                echo '<td>'.$element['key'].'</td>';
                echo '<td>'.$element['value'].'</td>';
                echo '<br></tr>';
            }
            $ar_1 = array(array('Type','Quantity','Price','Total Price'),
                          array('General Merchandise',$num_1,13.0,($num_1 * 13.0)),
                          array('Grocery',$num_2,7.0,($num_2 * 7.0)));
            echo '<tr><td><br></td></tr>';
            for($row = 0; $row < 3; $row++){
                echo '<tr>';
                for($column = 0; $column < 4; $column++){
                    echo '<td>'.$ar_1[$row][$column].'</td>';
                }
                echo '</tr>';
            }
            echo '<tr><td><br></td></tr>';
            echo '<tr><td><br></td></tr>';
            array_multisort($ar_1);
            for($row = 0; $row < 3; $row++){
                echo '<tr>';
                for($column = 0; $column < 4; $column++){
                    echo '<td>'.$ar_1[$row][$column].'</td>';
                }
                echo '</tr>';
            }
        }
        echo '</table>';
        echo '</p>';
        ?>
    </body>
</html>