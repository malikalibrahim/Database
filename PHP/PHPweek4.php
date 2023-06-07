<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <?php

/* Deel 1*/

for ($i = 0; $i <= 50; $i++) {
    echo $i . "<br>";
}





/* Deel 2*/

$klasgenoten = [
    "Jan",
    "Piet",
    "Klaas",
    "Marie",
    "Emma",
    "Sara",
    "Tom",
    "Lisa",
    "Bas",
    "Linda"
];

foreach ($klasgenoten as $naam) {
    echo $naam . "<br>";
}

/* Deel 3*/

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

for ($i = 3; $i <= 14; $i++) {
    echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.<br />';
}

/* Deel 4*/
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

foreach ($maanden as $maanden) {
    if ($maanden >= 3 && $maanden <= 14) {
        echo 'Maand ' . ($maanden+ 1) . ' is ' . $maand . '.<br />';
    }
}



?>
</body>
</html>
