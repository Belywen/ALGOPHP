<h2>Exercice 12</h2>

<?php
    $users = [
        "Mickael" => "FRA",
        "Virgile" => "ESP",
        "Stéphane" => "ENG",
    ];

    foreach ($users as $name => $lang) {
        switch ($lang) {
            case "FRA":
                echo "Salut ".$name;
                echo "</br>";
                break;
            case "ESP":
                echo "Hola ".$name;
                echo "</br>";
                break;
            case "ENG":
                echo "Hello ".$name;
                echo "</br>";
                break;
            default:
                echo "This language is unknown.";
                echo "</br>";
                break;
        }
}
?>