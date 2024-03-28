<?php

// FUNCTION PIZZAS //

function add_pizzas($nom, $image, $prix, $description){
    if(require("admin.php")){
        $req = $access->prepare("INSERT INTO pizzas (nom, image, prix, description) VALUES ($nom, $image, $prix, $description)");
        $req->execute(array($image, $nom, $prix, $desc, $promo));

        $req->closeCursor();
    }
}

function show_pizzas(){
    if(require("admin.php")){
        $req=$access->prepare("SELECT * FROM pizzas ORDER BY id DESC");
        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
        

    }
}


// FUNCTION  //

// function add_vetements($nom, $image, $prix, $description){
//    if(require("admin.php")){
//        $req = $access->prepare("INSERT INTO vetements (nom, image, prix, description) VALUES ($nom, $image, $prix, $description)");
//        $req->execute(array($image, $nom, $prix, $promo));
//
//        $req->closeCursor();
//    }
//}

//function show_vetements(){
//    if(require("admin.php")){
//        $req=$access->prepare("SELECT * FROM vetements ORDER BY id DESC");
 //       $req->execute();
//
 //       $data = $req->fetchAll(PDO::FETCH_OBJ);
//
 //       return $data;

  //      $req->closeCursor();
        

//    }
//}

// DELETE FUNCTION

function delete($id){
    if(require("admin.php")){
        $req=$access->prepare("DELETE FROM produits WHERE id=?");
        $req->execute(array($id));

    }
}
?>