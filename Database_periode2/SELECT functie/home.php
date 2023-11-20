<?php

include "db.php";
$pdo = new Database();

try{
   
    $hello = $pdo->selectUser();
    foreach ($hello as $user) {
        echo $user["id"] . "<br>";
        echo $user["naam"] . "<br>";
        echo $user["password"] . "<br>";
    }


} catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}
?>