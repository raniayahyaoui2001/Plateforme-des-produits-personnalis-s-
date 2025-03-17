<?php
    require_once("categorie.php");
    $categorie=new categorie();
    $id=$_REQUEST['dd'];
    $res = $categorie->cnx()->query("SELECT * from categorie where id_categorie=$id");
    $la_categorie=$res->fetch();
    $la_categorie[1]=$_POST['nom'];
    $la_categorie[2]=$_POST['image'];
    $categorie->setnom($la_categorie[1]);
    $categorie->setimage($la_categorie[2]);
    $r=$categorie->modifier($id);
    if($r)
    {
        header("location:list-categorie.php");
    }  
    else 
    {
        echo "echec de modificationn";
    }
        
   
?>