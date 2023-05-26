<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    
<?php
/* Deel 1*/
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];

echo $myArray;
/* Dee2 1*/
$myArray [6]= ['auto','fiets','brommer','bus','vliegtuig','trein','scoter'];
echo count($myArray);

/* Deel 3*/

/*   2= "bar"  */
/*   5= "4"  */
/*   8= "Toyota"  */
/*   9= "3"  */
/*   12= "5"  */
/*   19= "Five"  */

/* Deel 4*/
$cijfersPHP =  [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];
$aantalcijfers = array_sum($cijfersPHP) / count($cijfersPHP);
$afronden = round($aantalcijfers, 1);
echo "Gemiddelde is: ".$afronden;
/* Deel 4B
het is korter en kost minder tijd maar als je het hebt over een heel 
groot project dan worden deze regels moeilijk te lezen denk ik

*/


?>
    
</body>
</html>
