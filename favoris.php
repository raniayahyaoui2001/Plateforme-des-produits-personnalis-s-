<!DOCTYPE html>
<html>
<head>
    <style>
        .imag{
            height:100px;
            width:100px;
            margin-left:70px;
        }

        .fa{
            position: absolute;
            margin-left:-15px;
        }
        </style>
</head>
<body>

<?php
session_start();
require_once("produit.php");
require_once("favori.php");
require_once("utilisateur.php");

?>
 <?php
 $produit=new produit();
 $les_prod=$produit->editAll();
 $nbr_prod=count($les_prod);


 $favori=new favori();
 $les_fav=$favori->editAll();
 $nbr_fav=count($les_fav);

 $utilisateur=new utilisateur();
 $les_users=$utilisateur->editAll();
 $nbr_user=count($les_users);

 $vidu = $_SESSION['id_user'];
 $les_prod1=$produit->editAllBy($vidu);
 $nbr_prod1=count($les_prod1);
 ?>

 <?php

  
    foreach ($les_prod1 as $row1) {
        if($row1[3]==1){
            echo"<div>
            <img src='img/galerie/charte graphique/".$row1[2]."' class='imag' /> 
            <a onclick='if(confirm('voulez vous ?'))' href='supfav.php?dd=$row1[0]'><i class='fa fa-trash-o' style='font-size:15px;color:red'></i></a>
            </div>";
        }elseif($row1[3]==2){
            echo"<div>
            <img src='img/galerie/packaging/".$row1[2]."' class='imag' /> 
            <a onclick='if(confirm('voulez vous ?'))' href='supfav.php?dd=$row1[0]'><i class='fa fa-trash-o' style='font-size:15px;color:red'></i></a>
            </div>";
        }elseif($row1[3]==3){
            echo"<div>
            <img src='img/galerie/shooting/".$row1[2]."' class='imag' /> 
            <a onclick='if(confirm('voulez vous ?'))' href='supfav.php?dd=$row1[0]'><i class='fa fa-trash-o' style='font-size:15px;color:red'></i></a>
            </div>";
        }elseif($row1[3]==4){
            echo"<div>
            <img src='img/galerie/habillage/".$row1[2]."' class='imag' /> 
            <a onclick='if(confirm('voulez vous ?'))' href='supfav.php?dd=$row1[0]'><i class='fa fa-trash-o' style='font-size:15px;color:red'></i></a>
            </div>";
        }elseif($row1[3]==5){
            echo"<div>
            <img src='img/galerie/personalise/".$row1[2]."' class='imag' /> 
            <a onclick='if(confirm('voulez vous ?'))' href='supfav.php?dd=$row1[0]'><i class='fa fa-trash-o' style='font-size:15px;color:red'></i></a>
            </div>";
        }elseif($row1[3]==6){
            echo"<div>
            <img src='img/galerie/web/".$row1[2]."' class='imag' /> 
            <a onclick='if(confirm('voulez vous ?'))' href='supfav.php?dd=$row1[0]'><i class='fa fa-trash-o' style='font-size:15px;color:red'></i></a>
            </div>";
        }

       
    }
 ?>



</body>
</html>
