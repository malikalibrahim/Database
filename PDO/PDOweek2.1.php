<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <?php

$host = 'localhost:3307';
$db   = 'test';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
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


?>

<form  method="POST">

<label for="product_code">productCode:</label>
<input type="text" name="product_code" required> <br>

<label for="product_naam">productNaam:</label>
<input type="text" name="product_naam" required> <br>

<label for="prijs_per_stuk">prijsPerStuk:</label>
<input type="text" name="phoprijs_per_stuk" required> <br>

<label for="omschrijving">Omschrijving:</label>
<input type="text" name="omschrijving" required> <br>

<input type="submit" name="submit">

</form>







</body>
</html>