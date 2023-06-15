<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    




</body>
</html>
<?php



// Deel 1
$tijd =  date("h:i:sa");
if ($tijd < 11 ){
    echo "Goedemorgen";

} else if ($tijd > 12 && $tijd < 16){

echo "Goedemidag";
} else {
    echo "Goedeavond";
}
// Deel2
$getal1 = 6;
$getal2 = 9;
$bereken = $getal1 + $getal2;
$gemidelde = $bereken / 2;
echo"<br>" .$gemidelde;

// Deel3



function tijd($tijd){
$currentDate = date('Y-m-d');
$endOfYear = date('Y-12-31');
$remainingDays = (strtotime($endOfYear) - strtotime($currentDate)) / (60 * 60 * 24);

echo "<br>"."Aantal resterende dagen tot het einde van het jaar: " . $remainingDays . " dagen"."<br>";
}

tijd($tijd);
//Deel4

function berekenLengte($strings) {
    $totale_lengte = 0;
    foreach ($strings as $string) {
    $totale_lengte += strlen($string);
    }
    return $totale_lengte;
}

$array_met_strings = array("Hallo", "Wereld", "Dit", "is", "een", "test");
$resultaat = berekenLengte($array_met_strings);
echo $resultaat; 

?>