<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
</head>
<body>

    <?php
    echo "<table>";
    for ( $x = 1; $x < 10; $x++){
        echo "<tr>";
        for ( $y = 1; $y <10; $y++){
            echo "<td>".$x * $y."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>