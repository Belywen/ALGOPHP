<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Exercice 14</h1>

<?php
$mail = "elan@elan-formation.fr";
$mail1 = "contact@elan";

function validateEmail($mail) {
    if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        echo $mail."est une adresse mail valide.<br>";
    }
    else {
        echo $mail."est une adresse mail invalide.";
    }
}

echo validateEmail($mail);
echo validateEmail($mail1);


?>    

</body>
</html>

