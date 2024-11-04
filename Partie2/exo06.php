<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Exercice 6</h1>

<?php
$elements = ["Monsieur", "Madame", "Mademoiselle"];

echo alimenterListeDeroulante($elements);


function alimenterListeDeroulante($elements) {
    $result = "<form action='traitement.php' method='POST'>
                <label for='choice'>Civilité</br></br></label>
                <select id='choice' name='choice'>";

        foreach($elements as $civilite) {
            $result .= "<option value=".strtolower(iconv('UTF-8', 'ISO-8859-1//IGNORE', $civilite)).">".$civilite."</br></option>";
        }

        $result .= "</select></br></br>
                    <button type='submit'>Envoyer</button>";
    "</form>";

    return $result;
}
?>
    

</body>
</html>

