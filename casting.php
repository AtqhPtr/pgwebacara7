<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting</title>
</head>
<body>
    <?php
        $bil1 = 5;       // Integer
        $bil2 = 5.34;    // Float
        $bil3 = 0;       // Integer
        $bil4 = -1;      // Integer
        $bil5 = 0.1;     // Float
        $teks1 = "hello"; // String
        $teks2 = "";      // String
        $boolean = true;    // Boolean
        $null = NULL;    // NULL

        $bil1 = (bool)  $bil1;
        $bil2 = (bool)  $bil2;
        $bil3 = (bool)  $bil3;
        $bil4 = (bool)  $bil4;
        $bil5 = (bool)  $bil5;
        $teks1 = (bool) $teks1;
        $teks2 = (bool) $teks2;
        $boolean = (bool)  $boolean;
        $null = (bool)  $null;

        //memeriksa
        var_dump($bil1); 
        echo "<br>";
        var_dump($bil2); 
        echo "<br>";
        var_dump($bil3); 
        echo "<br>";
        var_dump($bil4);
        echo "<br>";
        var_dump($bil5);
        echo "<br>";
        var_dump($teks1);
        echo "<br>";
        var_dump($teks2);
        echo "<br>";
        var_dump($boolean);
        echo "<br>";
        var_dump($null);
        echo "<br>";
    ?> 
</body>
</html>