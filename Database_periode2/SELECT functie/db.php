<?php
class Database {
    public $pdo;
 
    public function __construct($db = "testdb_p2", $user="root", $pass="", $host="localhost:3306") {
        try {
            $this->pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connected to database $db";
        } catch (PDOException $e) {
            echo "Connection faild: " . $e->getMessage();
        }
    }


    public function insertUser($user, $password) {
        $sql = "INSERT INTO user VALUES (null, :naam, :password)";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([':naam'=>$user, ':password'=>$password]);

    }

    public function selectUser($id = null) {
        if (!$id) {
            $stmt = $this->pdo->query("SELECT * FROM user");
            $result = $stmt->fetchAll();
            return $result;
        } else {
            $sql = "SELECT * FROM user WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);	
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
    }
    
}
?>
 
 