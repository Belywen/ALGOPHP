<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Exercice 4</h1>


<?php
//1ere proposition
// $capitales = [
//     "France" => ["Capitale" => "Paris", "Lien" => "<a href='https://fr.wikipedia.org/wiki/France'>Lien wiki</a>"],
//     "Allemagne" => ["Capitale" =>"Berlin", "Lien" => "<a href='https://fr.wikipedia.org/wiki/Allemagne'>Lien wiki</a>"],
//     "USA" => ["Capitale" => "Washington", "Lien" => "<a href='https://fr.wikipedia.org/wiki/Washington'>Lien wiki</a>"],
//     "Italie" => ["Capitale" => "Rome","Lien" => "<a href='https://fr.wikipedia.org/wiki/Rome'>Lien wiki</a>"]
// ];

//2e proposition
$capitales = [
    "France" => ["Capitale" => "Paris", "Lien" => "https://fr.wikipedia.org/wiki/"],
    "Allemagne" => ["Capitale" =>"Berlin", "Lien" => "https://fr.wikipedia.org/wiki/"],
    "USA" => ["Capitale" => "Washington", "Lien" => "https://fr.wikipedia.org/wiki/"],
    "Italie" => ["Capitale" => "Rome","Lien" => "https://fr.wikipedia.org/wiki/"]
];


foreach($capitales as $pays => $value) {
    echo "$pays a pour capitale : ".$value["Capitale"]."</br>";
}

echo "</br>".afficherTableHTML($capitales);
   
function afficherTableHTML($capitales) {
    ksort($capitales);
    $result = "<table border=1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Lien wiki</th>
                    </tr>
                </thead>
                <tbody>";
    foreach ($capitales as $pays => $value) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($value["Capitale"])."</td>
                        <td><a href=".$value["Lien"].$value["Capitale"].">Lien</a></td>
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
