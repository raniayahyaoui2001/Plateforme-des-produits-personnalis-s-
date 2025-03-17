<?php
    require_once("client.php");
    $client=new client();
    $id=$_REQUEST['dd'];
    $r=$client->supprimer($id);
    if($r)
    {
        header("location:list-client.php");
    }
   
    else
    {
        echo "erreur de suppresion";
    } 
?>