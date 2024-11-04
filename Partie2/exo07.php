<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Exercice 7</h1>

<?php
$civilites = [
    "Monsieur" => ["checked_field" => ""], 
    "Madame" => ["checked_field" => "checked"], 
    "Mademoiselle" => ["checked_field" => ""]
];

echo genererCheckbox($civilites);


function genererCheckbox($civilites) {
    $result = "<form action='traitement.php' method='POST'>
        <legend>Diverses cases à cocher :</legend>";

        foreach ($civilites as $title => $checked_field){
            $result .= "<input id=".strtolower($title)." name=".strtolower($title)." type='checkbox'".$checked_field['checked_field'].">
                    <label for=".strtolower($title).">".$title."</label></br>";
            }
    
    $result .= "</form>";
    return $result;
}
?>
    

</body>
</html>

