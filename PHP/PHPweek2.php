<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>

    <?php

$variabele1 = 10;
$variabele2 = 10;

if ( $variabele1 == $variabele2 ) {
    echo "De twee waarden zijn gelijk";
}

$variabele3 = 10;
$variabele4 = 10;

if ( $variabele3 != $variabele4 ) {
    echo "De twee waarden zijn gelijk";
}

$variabele5 = 10;
$variabele6 = 10;

if ( $variabele5 == $variabele6 ) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}



if(isset($_POST['submit'])){
	$naam = $_POST['naam'];
	echo ("Welkom " + $naam + "!");
}



?>





	<form method="GET" action="home.php">
		<input type="text" name="naam">
		<input type="text" name="achternaam">
		<input type="number" name="leeftijd">
		<input type="text" name="adres">
		<input type="email" name="mail">
		<input type="submit" name="submit">
	</form>

	<form method="POST" action="home.php">
		<input type="text" name="naam">
		<input type="text" name="achternaam">
		<input type="number" name="leeftijd">
		<input type="text" name="adres">
		<input type="email" name="mail">
		<input type="submit" name="submit">
	</form>




    
</body>
</html>

