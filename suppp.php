<?php
    require_once("produit.php");
    $produit=new produit();
    $id=$_REQUEST['dd'];
    $r=$produit->supprimer($id);
    if($r)
    {
        header("location:list-produit.php");
    }
   
    else
    {
        echo "erreur de suppresion";
    } 
?>