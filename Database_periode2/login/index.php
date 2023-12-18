<?php
include "database.php";
$db = new Database;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hash = ($_POST['wachtwoord']);
    $email = $_POST['email'];
    $cont = $db->login($email, $hash);
    if ($cont) {
        header("location: login.php");
    } else {
        echo "opdonderen";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="email">
        <input type="text" name="wachtwoord">
        <input type="submit">
    </form>
</body>
</html>