<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1" width = "80%" style = "border-collapse: collapse; margin: auto;">
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 10; $j++) {
                    $c = $i * $j;
                    echo "<td>$j * $i = $c<td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>

