<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php
        $n = 6;

        switch ($n) {
        case 6:
            echo "Hello";
            break;
        case 0:
            echo "Hello, again!";
            break;
        default:
            echo "Hello, Hello, Hello";
        }
    ?>
</body>
</html>