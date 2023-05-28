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

$conn = new mysqli($host, $user, $pass, $db, $port, $charset);
$sql = "INSERT INTO producten(product_naam,prijs_per_stuk,omschrijving) values ('$name', '$prijs', '$omschrijving')";
mysqli_query($conn, $sql);
}
?>
<form  method="POST">


<label for="product_naam">productNaam:</label>
<input type="text" name="product_naam" required> <br>

<label for="prijs_per_stuk">prijsPerStuk:</label>
<input type="text" name="prijs_per_stuk" required> <br>

<label for="omschrijving">Omschrijving:</label>
<input type="text" name="omschrijving" required> <br>

<input type="submit" name="submit">

</form>