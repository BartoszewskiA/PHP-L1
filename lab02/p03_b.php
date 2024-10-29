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
        echo "<p>Status: gość</p>";
        return;
    }
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    //$login = "gosc";
    foreach ($users as $u => $p) {
        if ($u === $user && $p === $pass)
        {
            $login = $u;
            break;
        }
   
    }
    //if ($login !== "gosc")
    if(isset($login))
        echo "<p>Witaj $login!</p>";
    else
        echo "<p>Status: gość</p>";
    ?>
</body>

</html>