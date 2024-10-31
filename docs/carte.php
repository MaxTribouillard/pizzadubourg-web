<?php

    require("config/commands.php");
    $pizzas=show_pizzas();

?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--LINK-->
    <link href="style.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/59507b5bb9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belleza&display=swap" rel="stylesheet">
    <!--TITRE-->
    <title>PIZZA DU BOURG</title>
</head>

<!------HEADER------>

<header>
    <div class="navbar"><ul>
    <li><a href="accueil.php">Accueil</a></li>
        <li><a href="carte.php">La Carte</a></li>
        <li><a href="distributeur.php">Le Distributeur</a></li>
      </ul>
    </div>

<img class="logo" src="resources/img/logo.png"/>

<!------SYMBOLES------>
</header>

<!--Product Card-->
<div class="content">
<?php foreach($pizzas as $pizzas): ?>
    
        <div class="articlescontent">

            <img src="<?= $pizzas->image ?>"/>

            <p class="nom"><?= $pizzas->nom ?></p>
            <p class="desc"><?= $pizzas->description ?></P>
        <div class="prixdiff">
            <p class="prix">Simple : <?= $pizzas->prix_simple ?>€</p>
            <p class="prix">Double : <?= $pizzas->prix_simple ?>€</p>
            <p class="prix">Géante : <?= $pizzas->prix_simple ?>€</p>
        </div>
    </div>

<?php endforeach; ?>
</div>
</body>
</html>