<?php

    require("config/commands.php");
    $vetements=show_vetements();

?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--LINK-->
    <link href="base.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="resources/img/icon.png">
    <script src="https://kit.fontawesome.com/59507b5bb9.js" crossorigin="anonymous"></script>
    <!--TITRE-->
    <title>PAYE TA SAPE !</title>
</head>

<!------HEADER------>

<header>
    <div class="navbar"><ul>
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="sneakers.php">Sneakers</a></li>
        <li><a href="vetements.php">Vêtements</a></li>
      </ul>
    </div>

<img class="logo" src="resources/img/logo_pizzadubourg.png"/>

<input type="search" class="searchbar" value="Rechercher...">
<!------SYMBOLES------>
<a href="client/account.html"><i class="fa-solid fa-user" id="account"></i></a>
<i class="fa-solid fa-magnifying-glass" id="search"></i>
</header>

<!------BODY------>

<body>

<p class="descriptif">Paye ta sape ? C'est LE bon plan des Caennais pour trouver ses affaires à très bas prix ! Livraison sur Caen uniquement, pour les remises en main propres merci de nous contacter sur instagram.</p>

<p class="textcontent">Découvez nos articles :</p>

<!--Product Card-->
<div class="content">
<?php foreach($vetements as $vetement): ?>
    
        <div class="articlescontent">

            <a href="products/produit.html"> <img src="<?= $vetement->image ?>"/>

            <p class="nom"><?= $vetement->nom ?></p>
        <div class="prixdiff">
            <p class="prix"><?= $vetement->prix ?>€</p>
            <p class="promo"><?= $vetement->promo ?>€</p>
            </a>
        </div>
    </div>

<?php endforeach; ?>
</div>
</body>
</html>