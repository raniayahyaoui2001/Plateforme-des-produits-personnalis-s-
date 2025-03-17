<?php
    $vnom = $_POST['nom'];
    $vimage = $_POST['image'];
    $vid = $_POST['id_categorie'];
    require_once("produit.php");
    $produit = new produit();
    $produit->setnom($vnom);
    $produit->setimage($vimage);
    $produit->setIdcateg($vid);
    $retour=$produit->ajouter();
    header("Location:list-produit.php?retour=$retour");

?>