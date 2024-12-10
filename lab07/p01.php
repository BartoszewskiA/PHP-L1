<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <select name="cpu">
            <option value="i3">Intel i3</option>
            <option value="i5">Intel i5</option>
            <option value="i7">Intel i7</option>
            <option value="i9">Intel i9</option>
        </select>
        <br><br>
        <select name="ram">
            <option value="8 GB">8 GB</option>
            <option value="16 GB">16 GB</option>
            <option value="32 GB">32 GB</option>
            <option value="64 GB">64 GB</option>
        </select>
        <br><br>
        <select name="gpu">
            <option value="zintegrowana">Zintegrowana</option>
            <option value="Radeon 3040">Radeon 3040</option>
            <option value="Radeon 4060">Radeon 4060</option>
            <option value="Radeon 4070">Radeon 4070</option>
        </select>
        <br><br>
        <input type="text" name="imie" placeholder="Imię" />
        <input type="text" name="nazwisko" placeholder="Nazwisko" />
        <input type="submit" value="Wyślij zamówienie" />
    </form>
    <?php
    if (!isset($_POST['imie']) || !isset($_POST['nazwisko'])) {
        exit;
    }
    if (empty($_POST['imie']) && empty($_POST['nazwisko'])) {
        echo "<p>Wypełnji formularz przed wysłaniem zamówienia</p>";
        exit;
    }
    $cpu = $_POST['cpu'];
    $ram = $_POST['ram'];
    $gpu = $_POST['gpu'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    //$zamawiajacy = array('imie' => $imie, "nazwisko"=>$nazwisko);
    $zamawiajacy = compact("imie", "nazwisko");
    $zamowienieTablica = compact("cpu", "ram", "gpu", "zamawiajacy");
    print_r($zamowienieTablica);
    $zamowienieJSON = json_encode(
        $zamowienieTablica,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );

    //Sprawdzenie poprawności konwersji
    if ($zamowienieJson === false) {
        echo "Błąd podczas kodowania JSON: " . json_last_error_msg();
        exit;
    }

    if (file_put_contents("zamowienie.json", $zamowienieJSON) !== false) {
        echo "Błąd konwersji";
    } else {
        echo "<p>Twoje zamówienie zostało wysłane</p>";
    }
    ?>

</body>

</html>