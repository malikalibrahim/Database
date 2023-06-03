<?php
if(isset($_GET['submit'])){

    echo $_GET ['naam'];
    echo $_GET ['achternaam'];
    echo $_GET ['leeftijd'];
    echo $_GET ['adres'];
    echo $_GET ['mail'];

}


if(isset($_POST['submit'])){

    echo $_GET ['naam'];
    echo $_GET ['achternaam'];
    echo $_GET ['leeftijd'];
    echo $_GET ['adres'];
    echo $_GET ['mail'];

}
/* het verschil is dat de informatie bij git zijn zichtaar bij de link en als je de hompagia refrecht krijg je geen melding dat je nieuwe
informatie moet toevoegen, maaar bij post wel en de informatie is niet zichtbaar op de link */
?>