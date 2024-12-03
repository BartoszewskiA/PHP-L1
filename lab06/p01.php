<!DOCTYPE html>
<?php
session_start();
if(isset($_POST['usun']))
    session_destroy();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['stopnie']) && is_numeric($_GET['stopnie'])) {
        $c = $_GET['stopnie'];
        $_SESSION['pop'] = $c;
        $f = $c * 1.8 + 32;
    } elseif (isset($_SESSION['pop'])) {
        $c = $_SESSION['pop'];
        $f = $c * 1.8 + 32;
    }
    ?>

    <?php
    echo "<form method=\"get\">";
    if (isset($c))
        echo "<input type=\"number\" placeholder=\"Celcius\" name=\"stopnie\" value=\"$c\"/>";
    else
        echo "<input type=\"number\" placeholder=\"Celcius\" name=\"stopnie\"/>";
    echo "<input type=\"submit\" valur=\"przelicz\" />";
    echo "</form>";
    ?>
    <?php
    if (isset($c))
        echo "<p>$c C = $f F</p>";
    ?>

    <br>
    <br>
    <form method="post">
        <input type="hidden" name="usun" />
        <input type="submit" value="Usun sesje" />
    </form>
</body>

</html>