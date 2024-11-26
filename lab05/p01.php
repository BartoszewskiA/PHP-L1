<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_COOKIE['user_cookie'])) {
        $user = $_COOKIE['user_cookie'];
        echo "<p>Witaj $user</p>";
        echo "<br><br>";
        echo '<form method="post">';
        echo '<input action="p01_logout.php" type="hidden" name="wyloguj"/>';
        echo '<input type="submit" value="Wyloguj mnie"/>';
        echo '</form>';
    } elseif (isset($_POST['user_form'])) {
        $user = $_POST['user_form'];
        setcookie("user_cookie", $user, time() + 60 * 60 * 24 * 30);
        echo "<p>Witaj $user</p>";
        echo "<br><br>";
        echo '<form action="p01_logout.php" method="post">';
        echo '<input type="hidden" name="wyloguj"/>';
        echo '<input type="submit" value="Wyloguj mnie"/>';
        echo '</form>';
    } else {
        echo  '<form method="post">';
        echo  '<input type="text" name="user_form" placeholder="Login"/>';
        echo   '<input type="submit" value="Zaloguj się"/>';
        echo  '</form>';
    }
    ?>
</body>

</html>