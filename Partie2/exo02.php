<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Exercice 2</h1>

<?php
$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
];


foreach($capitales as $pays => $value) {
    echo "$pays a pour capitale : ".$value."</br>";
}

echo "</br>".afficherTableHTML($capitales);
   
function afficherTableHTML($capitales) {
    ksort($capitales);
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                    </tr>
                </thead>
                <tbody>";
    foreach ($capitales as $pays => $value) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($value)."</td>
                    </tr>";
    }
    $result .= "</body></table>"; //.= permet de concaténer la fonction + les 2 balises de fin
    return $result;
}


?>
    </tr>
 </table>

</body>
</html>

