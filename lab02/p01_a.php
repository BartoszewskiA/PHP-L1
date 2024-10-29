<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if(!isset($_GET["liczba"]))
    {
        echo "<p>Brak danych</p>";
        return;
    }
    $n = $_GET["liczba"];
    $a = 1;
    $b = 1;
    $c = 0;
    $tab[0] = 1;
    $tab[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $c = $a + $b;
        $a = $b;
        $b = $c;
        $tab[] = $c;
    }
    echo "<ol>";
    foreach ($tab as $liczba) {
        echo "<li> $liczba</li>";
    }
    echo "</ul>";
    ?>

</body>

</html>