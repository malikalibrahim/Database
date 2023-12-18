<?php

class Database {
    public $pdo;
 
    public function __construct($db = "kklanten", $user="root", $pass="", $host="localhost:3306") {
        try {
            $this->pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection faild: " . $e->getMessage();
        }
    }

    public function register($naam, $achternaam, $rijbewijsnummer, $email , $wachtwoord) {
        $sql = "INSERT INTO users (naam, achternaam, rijbewijsnummer, email , wachtwoord) VALUES (?,?,?,?,?)";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$naam , $achternaam, $rijbewijsnummer , $email , $wachtwoord]);

    }
    public function login($email, $wachtwoord)
    {
        $sql = "SELECT * FROM users WHERE email = ? AND wachtwoord = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email, $wachtwoord]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}







?>