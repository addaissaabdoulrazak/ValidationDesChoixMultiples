<?php
if (!empty($_POST["pizza"])) {

    $pizza = $_POST["pizza"];
    # Note: on n'affecte pas, puis on controle mais plutôt on contrôle puis on affecte => l'instruction if doit
    # etre utiliser avant l'affectation de ( $pizza = $_POST["pizza"];)  et non après.
    foreach ($pizza as $key) {
        echo "$key <br>";
    }
} else {
    echo "please choise a pizza !! thanks";
}
