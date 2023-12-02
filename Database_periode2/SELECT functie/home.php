<?php

include "db.php";
$pdo = new Database();

try{

    $hello = $pdo->selectUser(2);
        echo $hello["id"] . "<br>";
        echo $hello["naam"] . "<br>";
        echo $hello["password"] . "<br>";
    


} catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}
?>