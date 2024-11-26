<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Jesteś wylogowany</p>
    <p><a href="p01.php">Zaloguj się ponownie</a>
        <?php
        if (isset($_POST['wyloguj']))
            setcookie("user_cookie");
        ?>
</body>

</html>