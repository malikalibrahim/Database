<?php
include "database.php";
$db = new Database;
if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $hash = password_hash( $_POST['wachtwoord'], PASSWORD_DEFAULT);
    $db->register($_POST['naam'] , $_POST['achternaam'], $_POST['Rijbewijsnummer'],  $_POST['email'], $hash);
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title> 
     <link rel="stylesheet" href="style.css">
 
</head>
<body>

    <div class="contener">
    <div class="hoofdpagina">
       
            
        <form  method="POST">
            
             <div class="pagina">
              
            <div class="ce">  <h1>Registreren</h1>
       
            <label for="naam">Naam:</label>
            <input type="text" name="naam">

            <label for="achternaam">Achternaam:</label>
            <input type="text" name="achternaam">

            <label for="Rijbewijsnummer">Rijbewijsnummer:</label>
            <input type="tel" name="Rijbewijsnummer">

            <label for="email">E-mail:</label>
            <input type="email" name="email">
            
            <label for="wachtwoord">Wachtwoord:</label>
            <input type="password" name="wachtwoord"><br>

            <input type="submit" name="submit">
           
            </div></div>
        </form>
    
    </div>
</div>


</body>
</html>