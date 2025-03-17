<?php
    require_once("produit.php");
    $produit=new produit();
    $id=$_REQUEST['dd'];
    $res = $produit->cnx()->query("SELECT * from produit where id_produit=$id");
    $la_produit=$res->fetch();
    $la_produit[1]=$_POST['nom'];
    $la_produit[2]=$_POST['image'];
    $produit->setnom($la_produit[1]);
    $produit->setimage($la_produit[2]);
    $r=$produit->modifier($id);
    if($r)
    {
        header("location:list-produit.php");
    }  
    else 
    {
        echo "echec de modificationn";
    }
        
   
?>