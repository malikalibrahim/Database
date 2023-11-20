<?php

include "db.php";
$pdo = new Database();

try{
    $pdo->insertUser("test", "test");
    echo "gelukt";
} catch (PDOException $e){
    echo "Error: " . $e->getMessage;
}
?>