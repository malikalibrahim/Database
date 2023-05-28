<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <?php

for ($i = 0; $i <= 50; $i++) {
}
$klas = ["malii", "malik", "malio", "maliou", "malpoi", "meroi", "msdrio", "merios","msdrixo", "meriogs"];
echo '<br>'. $klas[0]. '</br>';
echo '<br>'. $klas[1]. '</br>';
echo '<br>'. $klas[2]. '</br>';
echo '<br>'. $klas[3]. '</br>';
echo '<br>'. $klas[4]. '</br>';
echo '<br>'. $klas[5]. '</br>';
echo '<br>'. $klas[6]. '</br>';
echo '<br>'. $klas[7]. '</br>';
echo '<br>'. $klas[8]. '</br>';
echo '<br>'. $klas[9]. '</br>';

$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

$lengte = count($maanden);
for ($i = 0; $i < $lengte; $i++) {
    echo '<br>'. $maanden[$i]. '</br>';
}
foreach ($maanden as $maanden) {
echo $klas;
}
?>
</body>
</html>