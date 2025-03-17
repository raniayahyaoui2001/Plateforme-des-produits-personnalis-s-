<?php
    $vnom = $_POST['nom'];
    $vimage = $_POST['image'];
    require_once("categorie.php");
    $categorie = new categorie();
    $categorie->setnom($vnom);
    $categorie->setimage($vimage);
    $retour=$categorie->ajouter();
    header("Location:list-categorie.php?retour=$retour");

?>