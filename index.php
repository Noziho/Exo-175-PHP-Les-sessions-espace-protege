<?php
session_start();
$_SESSION['logged'] = false;
$password = "azerty";

if (isset($_POST['submit'])) {
    if ($_POST['password'] === $password) {
        $_SESSION['logged'] = true;
        if ($_SESSION['logged'] === true) {
            header("Location: home.php");
        }
        else {
            echo "Veuillez vous connectez";
        }

    }
    else {
        echo "Le password est incorect";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="index.php" method="post">
    <label for="id-password">Password: </label>
    <input type="password" name="password" id="id-password">

    <input type="submit" name="submit">
</form>
</body>
</html>
