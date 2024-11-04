<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Exercice 8</h1>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";
$nb = 4;

echo repeterImage($url, $nb);

function repeterImage($url, $nb) {
    $result = "";

    for ($i = 1; $i <= $nb; $i++) {
        $result .= "<img src=".$url." />";
    }

    return $result;
}
?>
    

</body>
</html>

