<?php
include "db.php";
$pdo = new Database();
$id = $_GET['id'];
$tru = $pdo->deleteUser($id);
if ($tru = true){
    header("Location: home.php");
}
?>