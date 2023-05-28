<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['submit'])){

    $conn= mysqli_connect('localhost:3307' , 'root', '' , 'test') or die('Could not connect: '.mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])){
    
    $naam= $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $sql = "INSERT INTO `users` (`name`, `email`, `phone`) VALUES ('$naam','$email','$phone')";
    
    $geef= mysqli_query($conn,$sql);
    if ($geef) {
        echo 'gekeurd';
    }
    else {
            echo 'niet gekeurd';
        }

    }
} 



?>