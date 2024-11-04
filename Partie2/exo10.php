<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Exercice 10</h1>

<?php
$champs = [
    "Nom" => [
        "for_id" => "name", 
        "type" => "text", 
        "required_field" => "required" 
    ], 

    "Prénom" => [
        "for_id" => "firstname", 
        "type" => "text", 
        "required_field" => ""
    ],
    
    "Email" => [
        "for_id" => "email", 
        "type" => "email", 
        "required_field" => "" 
    ], 

    "Ville" => [
        "for_id" => "city", 
        "type" => "text", 
        "required_field" => ""
    ],    
];

$sexe = [
    "Féminin" => "F",
    "Masculin" => "M"
];

$metiers = ["Développeur logiciel", "Designer web", "Intégrateur"];



function afficherChampsTexte($champs) {
    global $result;

    foreach($champs as $labels => $attributs) {
        $result .= "<label for=".$attributs["for_id"].">".$labels." : </label></br>
                    <input id=".$attributs["for_id"]."name=".$attributs["for_id"]."type=".$labels." ".$attributs["required_field"]."></br>";
    }
}

function afficherSexe($sexe) {
    global $result;

    $result .= "</br>";

    foreach ($sexe as $type => $letterSexe) {
        $result .= "<input id=".strtolower($type)." name='sexe' value='sexe' type='radio'/>
                    <label for=".strtolower($type).">".$type."</label></br>";
    }
}

function afficherMetiersDeroulant($metiers) {
    global $result;

    $result .= "</br>
                <select id='metier' name='metier'>";

    foreach($metiers as $job) {
        $result .= "<option value=".strtolower(htmlspecialchars($job)).">".$job."</br></option>";
    }

    $result .= "</select></br></br>";
    return $result;
}

function formComplet() {
    global $champs;
    global $sexe;
    global $metiers;

    $result = "<form action='traitement.php' method='POST'>
               <legend>Merci de bien vouloir renseigner les champs ci-dessous :</br></br>";
    
    $result .= afficherChampsTexte($champs);
    $result .= afficherSexe($sexe);
    $result .= afficherMetiersDeroulant($metiers);

    $result .= "</br><button type='submit'>Envoyer</button>
            </form>";
    return $result;
}


echo formComplet();

?>
    

</body>
</html>

