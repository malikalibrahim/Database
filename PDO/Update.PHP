<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $id = $_POST['product_id'];
    $name = $_POST['product_naam'];
    $prijs = $_POST['prijs_product'];
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

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        echo "Connectie gemaakt!";
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    $query = "UPDATE producten SET product_naam=?, prijs_product=?, omschrijving=? WHERE product_id=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$name, $prijs, $omschrijving, $id]);

        echo "Product succesvol bijgewerkt.";


}




?>

<form method="POST">
    <label for="product_id">Product ID:</label>
    <input type="number" name="product_id" required><br>

    <label for="product_naam">Productnaam:</label>
    <input type="text" name="product_naam" required><br>

    <label for="prijs_product">Prijs per stuk:</label>
    <input type="text" name="prijs_product" required><br>

    <label for="omschrijving">Omschrijving:</label>
    <input type="text" name="omschrijving" required><br>

    <input type="submit" name="submit" value="Toevoegen">
</form>