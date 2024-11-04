<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Exercice 13</h1>

<?php

$tableauValeurs = [True, "texte, 10, 25, 369", ["valeur1", "valeur2"]];

function vardump($tableauValeurs) {  
    foreach ($tableauValeurs as $var) {
        $result = var_dump($var);
    }    
    return $result;
}

echo vardump($tableauValeurs);

?>    

</body>
</html>

