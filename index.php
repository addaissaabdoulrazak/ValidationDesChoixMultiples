<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=a, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form action="./tratement.php" method="post">
    Quelles sont vos pizza préferer?<br />
    <!-- Nous allons utiliser une petite << astuce >> nous permettant d'afficher c'est 4 checkbox grâce a une boucle
        et en ecrivant tout simplement un seul input:checkbox, Et pour cela nous allons devoir changer d'abord 
        l'extension de notre fichier html en php-->
    <?php
    $choisir = array("Reine", "Calzone", "4 Frommage", "Orientale", "Savoyarde");
    foreach ($choisir as $une_pizza) {
      echo "<input type='checkbox' name='pizza[]' value='$une_pizza ' /> $une_pizza <br />";
    }
    ?>
    <!-- <input type="checkbox" name="pizza[]" value="Reine" / > Reine <br />
    <input type="checkbox" name="pizza[]" value="Calzone" /> Calzone <br />
    <input type="checkbox" name="pizza[]" value="4 Frommage" /> 4 Frommage
    <br />
    <input type="checkbox" name="pizza[]" value="Orientale" /> Orientale
    <br /> -->
    <p>
      <input type="submit" value="Envoyer" />
    </p>
  </form>
</body>

</html>