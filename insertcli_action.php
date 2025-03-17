<?php
    $vnom = $_POST['nom'];
    $vimage = $_POST['image'];
    $vdesc = $_POST['description'];
    require_once("client.php");
    $client = new client();
    $client->setnom($vnom);
    $client->setimage($vimage);
    $client->setdescription($vdesc);
    $retour=$client->ajouter();
    header("Location:list-client.php?retour=$retour");

?>