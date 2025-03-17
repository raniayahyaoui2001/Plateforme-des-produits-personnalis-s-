<?php
    require_once("categorie.php");
    $categorie=new categorie();
    $id=$_REQUEST['dd'];
    $r=$categorie->supprimer($id);
    if($r)
    {
        header("location:list-categorie.php");
    }
   
    else
    {
        echo "erreur de suppresion";
    } 
?>