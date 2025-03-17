<?php
    require_once("favoris.php");
    $favori=new favori();
    $id=$_REQUEST['dd'];
    $r=$favori->supprimer($id);
    if($r)
    {
        header("location:dashboard-user.php");
    }
   
    else
    {
        echo "erreur de suppresion";
    } 
?>