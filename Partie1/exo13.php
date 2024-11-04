<h2>Exercice 13</h2>

<?php
    $notes = array(10, 12, 8, 19, 3, 16, 11, 13, 9);
    
    echo "Les notes obtenues par l'élève sont : ";
    foreach ($notes as $value) {
        echo strval($value);
        echo " ";
    }

    $moyenne = round(array_sum($notes) / count($notes), 2);

    echo "</br>";
    echo "Sa moyenne générale est donc de : ".$moyenne;

    
?>



