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
    <div class="navbar"><ul>
    <li><a href="accueil.php">Accueil</a></li>
        <li><a href="#carte">La Carte</a></li>
        <li><a href="#distributeur">Le Distributeur</a></li>
      </ul>
    </div>
</div>
</container>
<img class="logo" src="resources/img/1.png"/>

<!------SYMBOLES------>
</header>
<div class="drapeau">
   <!-- <img src="resources/img/drapeau.jpg"></img>-->
</div>
<body>

<div class="maint_content">
<h1 class="title1">Bienvenue à la Pizza du Bourg de Ouistreham !</h1>
        <p class="title2">Pizzas à emporter</p> <p class="title2">-</p><p class="title2"> Livraison disponible sur Ouistreham, Colleville-Montgomery, Saint-Aubin d'Arquenay et Hermanville !</p>
<img class="pics1" src="resources/img/pizzaccueil.jpg"></img>
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

<div class="part2">
<h2 class="nospizzas">→ NOS PIZZAS : </h2>

<?php foreach($pizzas as $pizzas): ?>
<div class="card">
  <!--<img src="resources/img/pizzacard.png" alt="Pizzas" style="width:100%">-->
  <h1 class="nom"><?= $pizzas->nom ?></h1>
  <p class="price"><?= $pizzas->prix ?></p>
  <p class="desc"><?= $pizzas->description ?></p>
</div>
<?php endforeach; ?>
</div>


<h1 id="distributeur" class="distributeur-title">Le Distributeur</h1>
<div class="distributeur">
<img class="distributeur-img" src="resources/img/distributeur.jpg">
<p class="distributeur-txt"><u>Voici notre nouveau distributeur automatique de pizzas !</u><br> <br> Imaginez-vous pouvoir déguster <u>une pizza fraîchement préparée</u>, avec vos ingrédients préférés, en quelques minutes seulement, où que vous soyez.

<br><br> Notre distributeur offre une expérience culinaire pratique et personnalisée. Que vous soyez pressé lors d'une pause déjeuner ou que vous ayez une envie soudaine de pizza en rentrant chez vous après une longue journée, <u>notre distributeur répond à vos besoins.</u>

<br> <br>De plus, <u>notre engagement envers la fraîcheur et la qualité des ingrédients</u> garantit que chaque bouchée de votre pizza sera délicieuse et satisfaisante.

<br> <br>Alors, pourquoi ne pas venir découvrir par vous-même cette nouvelle façon de savourer vos pizzas préférées ? </P>

</div>

<div class="distributeur_maps">
<iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3087.8018540051257!2d-0.26816152322505!3d49.27434167134439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480a67005f3577c3%3A0xff22d9fb362c3dcf!2sDistributeur%20de%20pizza%20du%20bourg!5e1!3m2!1sfr!2sfr!4v1712917759684!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<!--
<div class="btn">
   <a href="#"> <img  src="resources/img/arrowup.png"></img></a>
</div>
-->

</body>
</html>