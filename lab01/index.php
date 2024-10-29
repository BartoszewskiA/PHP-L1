<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lab 01</h2>
    <?php
    $wiersze=20;
    $kolumny=10;
    // $licznik =0;
    echo '<table style="border: 1px solid green">';
    for($i =0; $i<$wiersze; $i++)
    {
        echo "<tr>";
            for($j=0; $j<$kolumny; $j++)
            {
                echo "<td style=\"background-color:aqua\">";
                // echo $licznik++;
                echo $i*$kolumny+ $j;
                echo "</td>";
            }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>