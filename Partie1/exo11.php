<h2>Exercice 11</h2>

<?php
    $compteur = 0;

    $voitures = array("Peugeot", "Renault", "BMW", "Mercedes");

    foreach ($voitures as $value) {
        echo $value."</br>";
   
        $compteur++;
    };

    echo "</br>";    
    echo "Il y a ".$compteur." marques de voitures dans le tableau :";
    echo "</br></br>";
?>