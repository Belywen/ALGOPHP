<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Exercice 5</h1>

<?php

$nomsInput = [
    "Your name" => [
        "for_id" => "name", 
        "type" => "text", 
        "required_field" => "required" //Test avec required
    ], 

    "Your fisrtname" => [
        "for_id" => "firstname", 
        "type" => "text", 
        "required_field" => ""
    ],
    "Your city" => [
        "for_id" => "city", 
        "type" => "text", 
        "required_field" => ""
    ],

    "Your email" => [
        "for_id" => "email", 
        "type" => "email", 
        "required_field" => "" //Pour avoir un autre type
    ], 
];

echo afficherInput($nomsInput);

//2eme proposition 
//for est lié à l'id de l'input, il sert également à la collecte d'info via une BDD

function afficherInput($nomsInput) {
    $result = "<form action='action.php' method='post'>";

        foreach($nomsInput as $labels => $attributs) {
            $result .= "<label for=".$attributs["for_id"].">".$labels." : </label></br>
                        <input id=".$attributs["for_id"]."name=".$attributs["for_id"]."type=".$labels." ".$attributs["required_field"]."></br>";
        }

        $result .= "</br><button type='submit'>Envoyer</button>";
    "</form>";

    return $result;
}



//1ere proposition inutile
// function afficherInput($nomsInput) {
//     $result = "<form action='action.php' method='post'>
//         <label>".$nomsInput[0]." : </label></br>
//         <input name='name' id='name' type='text'/></br>
        

//         <label>".$nomsInput[1].": </label></br>
//         <input name='firstname' id='firstname' type='text'/></br>

//         <label>".$nomsInput[2].": </label></br>
//         <input name='city' id='city' type='text'/></br>

//         <button type='submit'>Envoyer</button>
//     </form>";

//     return $result;
// }
?>
    

</body>
</html>

