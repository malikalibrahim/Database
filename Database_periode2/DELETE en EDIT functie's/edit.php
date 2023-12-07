<?php
include "db.php";
$pdo = new Database();

if ( $_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['username']) && !empty($_POST['password'])) {
    $id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pdo->editUser($id, $username, $password);
    header("Location: home.php");
} else {

    
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
<style>
body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            width : 100%;	
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            width : 30%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
    <form method="POST">
<input type="text" placeholder= "Username" name="username">
<input type="text"  placeholder= "Passwoord" name="password">
<input type="submit" name="submit">

    </form>
</body>
</html>