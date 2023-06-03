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
    
} 
catch (\PDOException $e) 
{
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$query="INSERT INTO producten (product_naam, prijs_per_stuk,omschrijving) values (?, ?, ? )";
$result=$pdo->prepare($query);
$array_data = array($name , $prijs , $omschrijving);
$result->execute($array_data);
/* Data selecteren    */
echo "<h2> Selecteer mijn Data</h2>";
$stmt = $pdo->query("SELECT * FROM producten ");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    echo "Product Code: " . $row['product_code'] . "<br>";
    echo "Product Naam: " . $row['product_naam'] . "<br>";
    echo "Prijs: " . $row['prijs_per_stuk'] . "<br><br>";
}
/* selecteren single row   */
echo "<h2>Selecteer een enkele rij met placeholders</h2>";
$stmt = $pdo->prepare("SELECT * FROM producten WHERE product_code = ?");
$productNaam = 1;
$stmt->execute([$productNaam]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);


if ($row) {
    echo "Product Code: " . $row['product_code'] . "<br>";
} else {
    echo "No results found.<br><br>";
}
/* Data selecteren placeholder   */
echo "<h2>Selecteer een enkele rij met named parameters</h2>";
$stmt = $pdo->prepare("SELECT * FROM producten WHERE product_code = ?");
$productNaam = 2;
$stmt->execute([$productNaam]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);


if ($row) {
    echo "Product Code: " . $row['product_code'] . "<br>";

} else {
    echo "No results found.<br><br>";
}




}




?>