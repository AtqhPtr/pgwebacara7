<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Tabel</title>
</head>
<body>
    <?php
    $laptop = array("ASUS", "HP", "ACER", "LENOVO", "HUAWEI");
    $colors = array("black", "white", "tosca", "grey", "navy");
    $ram = array("2GB", "4GB" , "8GB", "16GB", " 1TB");
    
    echo "<table border = '1'>";
    for($i=0; $i<=4; $i++){
        echo "<tr><td> $laptop[$i] </td><td> $colors[$i] </td> <td> $ram[$i] </td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>