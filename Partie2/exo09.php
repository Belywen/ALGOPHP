<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Exercice 9</h1>

<?php
$nomsRadio = ["Monsieur", "Madame", "Mademoiselle"];

echo afficherRadio($nomsRadio);

function afficherRadio($nomsRadio) {
    $result = "<form action='traitement.php' method='POST'>";

    foreach ($nomsRadio as $title) {
        $result .= "<input id=".strtolower($title)." name='civilite' value='civilite' type='radio'/>
                    <label for=".strtolower($title).">".$title."</label></br>";
    }
    $result .= "</form>";
    return $result;
}

?>
    

</body>
</html>

