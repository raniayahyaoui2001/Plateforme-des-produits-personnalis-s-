<?php
session_start();

    $vnom = $_POST['nom_complet'];
    $vemail = $_POST['email'];
    $vtel = $_POST['tel'];
    $vinfos = $_POST['infos'];
    $vid = $_POST['id_categorie'];
    $vidu = $_SESSION['id_user'];
    require_once("commande.php");
    $commande = new commande();
    $commande->setnom($vnom);
    $commande->setemail($vemail);
    $commande->settel($vtel);
    $commande->setinfos($vinfos);
    $commande->setIdCateg($vid);
    $commande->setIduser($vidu);
    
    $retour=$commande->ajouter();
    header("Location:dashboard-user.php");

?>