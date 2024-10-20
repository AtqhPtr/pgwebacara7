<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else</title>
</head>
<body>
    <?php
        $t = 80;

        if ($t > "90") {
        echo "Grade A";
        } elseif ($t > "75") {
        echo "Grade B";
        } else {
        echo "Grade C";
        }
    ?>
</body>
</html>