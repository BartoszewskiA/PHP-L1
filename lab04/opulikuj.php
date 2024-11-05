<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_POST["tytul"]) || !isset($_POST["tresc"]) || !isset($_POST["imie"])) {
        echo "<p>Przejdz na panel administracyjny: </p>";
        echo "<a href=\"panel.html\">Panel administracyjny</a>";
        return;
    }
    $tytul = $_POST["tytul"];
    $tresc = $_POST["tresc"];
    $podpis = $_POST["imie"];
    $plik = @fopen("dane.txt", "a");

    if (!($plik)) {
        echo "Błąd otwarcia pliku.";
        return;
    }
    fwrite($plik, $tytul);
    fwrite($plik,"\n");
    fwrite($plik, $tresc);
    fwrite($plik, "\n");
    fwrite($plik,$podpis);
    fwrite($plik, "\n");
    fclose($plik);
    echo "<p>Dziękujemy za opublikowanie postu</p>";
    echo "<a href=\"panel.html\">Panel administracyjny</a>";

    ?>
</body>

</html>