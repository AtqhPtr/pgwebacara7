<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <?php

    //Arithmetic Operators
        $x = 30;  
        $y = 6;

        echo $x + $y;
        echo "<br>";
        echo $x - $y;
        echo "<br>";
        echo $x * $y;
        echo "<br>";
        echo $x / $y;
        echo "<br>";
        echo $x % $y;
        echo "<br>";
        echo $x ** $y;

        echo "<br>";
        echo "<br>";

    //Assignment Operators 
    //x=y
        $x = 50;  
        echo $x;

        echo "<br>";

    //x+=y
        $x = 60;  
        $x += 50;
        
        echo $x;

        echo "<br>";

    //equal
        $a = 1;
        $b = true;
        
        var_dump($a == $b);

        echo "<br>";
    
    //identical
        $a = 2;
        $b = "2";

        var_dump($a === $b);

        echo "<br>";

        $a = 2;
        $b = 2;

        var_dump($a === $b);
    ?>  

</body>
</html>