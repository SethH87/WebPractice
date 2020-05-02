<?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $gender = $_POST["gender"];
    $home_world = $_POST["home-world"];
    $home_country = $_POST["home-country"];
    $home_city = $_POST["home-city"];
    $s_class = $_POST["s-class"];
    $eyecolor = $_POST["eyecolor"];
    $haircolor = $_POST["haircolor"];
    $skintone = $_POST["skintone"];
    $clothtype = $_POST["clothtype"];
    $makeup = $_POST["makeup"];
    $chrweight = $_POST["chrweight"];
    $nationality = $_POST["nationality"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Character Confirmation</title>
    </head>
    <body>
        <h1>Character Submitted</h1>
        <?php
        echo "<p>You have completed the submission</p>";
        echo "<p>";
        echo date('H:i, jS F Y');
        echo "</p>";
        echo htmlspecialchars($name)." name<br>";
        echo htmlspecialchars($age)." age<br>";
        echo htmlspecialchars($sex)." sex<br>";
        echo htmlspecialchars($gender)." gender<br>";
        echo htmlspecialchars($home_world)." home world<br>";
        echo htmlspecialchars($home_country)." home country<br>";
        echo htmlspecialchars($home_city)." home city<br>";
        echo htmlspecialchars($s_class)." social class<br>";
        echo htmlspecialchars($eyecolor)." eye color<br>";
        echo htmlspecialchars($haircolor)." hair color<br>";
        echo htmlspecialchars($skintone)." skin tone<br>";
        echo htmlspecialchars($clothtype)." clothing type<br>";
        echo htmlspecialchars($makeup)." makeup worn<br>";
        echo htmlspecialchars($chrweight)." character weight<br>";
        echo htmlspecialchars($nationality)." nationality<br>";
        $ageup = 0;
        $ageup = $age + 1;
        echo "Next year your character will be ";
        echo htmlspecialchars($ageup)." years old<br>";
        ?>
    </body>
</html>

