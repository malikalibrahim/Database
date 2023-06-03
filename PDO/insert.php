<?php

if(isset($_POST['submit'])) {
    $name = $_POST['product_naam'];
    $prijs = $_POST['prijs_per_stuk'];
    $omschrijving = $_POST['omschrijving'];
    

$host = 'localhost';
$port = 3307;
$db   = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port;";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connectie gemaakt!";
} 
catch (\PDOException $e) 
{
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$query="INSERT INTO producten (product_naam, prijs_per_stuk,omschrijving) values (?, ?, ? )";
$result=$pdo->prepare($query);
$array_data = array($name , $prijs , $omschrijving);
$result->execute($array_data);


}



?>


<form  method="POST" action= 'select.php'>

<label for="product_naam" >productNaam:</label>
<input type="text" name="product_naam" required> <br>

<label for="prijs_per_stuk">prijsPerStuk:</label>
<input type="text" name="prijs_per_stuk" required> <br>

<label for="omschrijving">Omschrijving:</label>
<input type="text" name="omschrijving" required> <br>


<input type="submit" name="submit">

</form>