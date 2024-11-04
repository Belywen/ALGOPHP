<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Exercice 11</h1>

<?php

$date = "2024-10-28 12:00:00";
$dateTime = new DateTime($date);
$now = new DateTime();


// var_dump($date);
// var_dump($dateTime);

// $result = date('l j F Y', strtotime($date))."</br></br>"; //Affiche date lettre et anglais

// echo $fmt->format($now);

function formaterDateFR($date) {    
    global $dateTime;  

    $fmt = new IntlDateFormatter(
        'fr_FR',  //locale
        IntlDateFormatter::FULL, // format date
        IntlDateFormatter::NONE, // format heure
        'Europe/Paris', // fuseau horaire
        IntlDateFormatter::GREGORIAN);

    $result = $fmt->format($dateTime);  
    return $result;
}

echo formaterDateFR($date);

?>    

</body>
</html>

