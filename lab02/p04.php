<?php
$users = array(
    "AAA" => "111",
    "BBB" => "222",
    "CCC" => "333"
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

    <?php
    if (!isset($_POST["user"]) || !isset($_POST["pass"])) {
        echo '<h2>Logowanie:</h2>';
        echo "<form action=\"\" method=\"post\">";
        echo '<label for="user">Użytkownik:</label>';
        echo '<input type="text" name="user" required>';
        echo '<label for="pass">Hasło:</label>';
        echo '<input type="password" name="pass" required>';
        echo '<input type="submit" value="Zaloguj się">';
        echo '</form>';
    }
    ?>

    <?php
    if (!isset($_POST["user"]) || !isset($_POST["pass"])) {
        return;
    }

    $user = $_POST["user"];
    $pass = $_POST["pass"];
    //$login = "gosc";
    foreach ($users as $u => $p) {
        if ($u === $user && $p === $pass) {
            $login = $u;
            break;
        }
    }
    //if ($login !== "gosc")
    if (isset($login))
        echo "<p>Witaj $login!</p>";
    else
        echo "<p>Status: gość</p>";
    ?>
</body>

</html>