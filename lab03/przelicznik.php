<?php
$przelicznik = array(
    "łokieć" => array(0.45, "Miara oparta na długości przedramienia od łokcia do końca palców."),
    "stopa" => array(0.3048, "Używana w Anglii i USA, oparta na długości stopy dorosłego mężczyzny."),
    "jard" => array(0.9144, "Tradycyjna miara długości w krajach anglosaskich, równająca się 3 stopom."),
    "liga" => array(4828.03, "Historyczna miara długości, używana głównie w nawigacji, równa 3 milom"),
    "sążeń" => array(2.1336, "Używana w średniowiecznej Europie, równa długości dwóch łokci"),
    "arszyn" => array(0.7112, "Miara długości używana w Rosji, oparta na długości ramienia od łokcia do końca palca")
);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="number" min="1" name="ilosc">
        <select name="jednostka">
            <option value="łokieć">Łokieć</option>
            <option value="stopa">Stopa</option>
            <option value="jard">Jard</option>
            <option value="liga">Liga</option>
            <option value="sążeń">Sążeń</option>
            <option value="arszyn">Arszyn</option>
        </select>
        <input type="submit" value="Przelicz">
    </form>

    <?php
    if (!isset($_GET["ilosc"]) || !isset($_GET["jednostka"]))
        return;
    $ilosc = $_GET["ilosc"];
    $jednostka = $_GET["jednostka"];

    foreach ($przelicznik as $klucz => $wartosc) {
        if ($klucz === $jednostka) {
            echo $ilosc, " [", $klucz, "] = ", $ilosc*$wartosc[0], " [m]<br>";
            echo $klucz, " to ",$wartosc[1];
        }
    }

    ?>


</body>

</html>