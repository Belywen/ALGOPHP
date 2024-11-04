<h1>Exercice 1</h1>

<style>
    .red {
        color:red;
    }
</style>

<?php

$texte = "Mon texte est un paramètre.";
$color = "red";

function convertirMajRouge($texte) { 
    $result = mb_strtoupper($texte);
    $result = "<p class='red'>".$result."</p>";
    return $result;
}

echo convertirMajRouge($texte);
?>