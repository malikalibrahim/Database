<?php
class Database {
    public $pdo;
 
    public function __construct($db = "testdb_p2", $user="root", $pass="", $host="localhost:3306") {
        try {
            $this->pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection faild: " . $e->getMessage();
        }
    }


    public function insertUser($user, $password) {
        $sql = "INSERT INTO user VALUES (null, :naam, :password)";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([':naam'=>$user, ':password'=>$password]);

    }

    public function login($id = null) {
     
            $stmt = $this->pdo->prepare("SELECT * FROM user WHERE id = ?");
            $stmt->execute([$id]);	
            $result = $stmt->fetch();
            return $result;
        }
    }

?>
 
 