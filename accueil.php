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
    <link href="base.css" rel="stylesheet"/>
    <link rel="icon" type="image/png" href="resources/img/icon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/59507b5bb9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Belleza&display=swap" rel="stylesheet">
    <script src="main.js"></script>

    <!--TITRE-->
    <title>Pizza du Bourg</title>
</head>

<!------HEADER------>

<header>
<container id="navbar_container">
<div>
    <div class="navbar"><ul>
    <li><a href="accueil.php">Accueil</a></li>
        <li><a href="#carte">La Carte</a></li>
        <li><a href="distributeur.php">Le Distributeur</a></li>
      </ul>
    </div>
</div>
</container>
<img class="logo" src="resources/img/logo.png"/>

<!------SYMBOLES------>
</header>
<div class="drapeau">
   <!-- <img src="resources/img/drapeau.jpg"></img>-->
</div>
<body>

<div class="maint_content">
<h1 class="title1">Bienvenue à la Pizza du Bourg de Ouistreham !</h1>
        <p class="title2">Pizzas à emporter</p> <p class="title2">-</p><p class="title2"> Livraison disponible sur Ouistreham, Colleville-Montgomery, Saint-Aubin d'Arquenay et Hermanville !</p>
<img class="pics1" src="resources/img/pics1_pizza.jpeg"></img>
</div>
    


   <!-- <div class="content1">
        <img src="resources/img/distri.png">
            <p> Notre tout nouveau distributeur de pizza est ouvert !<br> Les pizzas peuvent être commandés froides ou réchauffés <br> et vous disposez d'un large choix parmis les pizzas de <a href="carte.php">notre carte</a> : <br><br>- Paysane<br>- Chavignole<br>- 4 Fromages<br>- Savoyardes<br>- Kebab<br>- Curry<br>- Infernale<br>- Confinée<br>- Barbecue<br>- Burger<br>- Le petit bonheur

    </div>-->
       <!-- <div class="content2">
    <img class="pizzarugby" src="resources/img/pizzarugby.jpg">
        </div>-->
</div>
<img class="italia" src="resources/img/italia.png"></img>
<div id="carte" class="carte"><h1>La Carte</h1>
<h2>
    Nous proposons 3 tailles de pizza différentes : <u>La Simple</u> pour 1 personne 26cm Ø - <u>La Double</u> pour 2 personnes 33cm Ø - <u>La Géante</u> pour 3/4 personnes 40cm Ø
</h2>
</div>

<h2 class="nospizzas"><u>NOS PIZZAS : </u></h2>

<?php foreach($pizzas as $pizzas): ?>

<div class="card">
  <!--<img src="resources/img/pizzacard.png" alt="Pizzas" style="width:100%">-->
  <h1 class="nom"><?= $pizzas->nom ?></h1>
  <p class="price"><?= $pizzas->prix ?></p>
  <p class="desc"><?= $pizzas->description ?></p>
</div>
<?php endforeach; ?>

<div class="btn">
   <a href="#"> <img  src="resources/img/arrowup.png"></img></a>
</div>


</body>
</html>