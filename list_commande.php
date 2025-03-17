<!DOCTYPE html>
<html>
<head>
    <style>
    
        th,td{
            padding:4px;
            font-size:12px;
        }
        </style>
</head>
<body>

<?php

require_once("commande.php");
require_once("categorie.php");
require_once("utilisateur.php");

?>
 <?php
 $commande=new commande();
 $les_com=$commande->editAll();
 $nbr_com=count($les_com);


 $categorie=new categorie();
 $les_categ=$categorie->editAll();
 $nbr_categ=count($les_categ);

 $utilisateur=new utilisateur();
 $les_users=$utilisateur->editAll();
 $nbr_user=count($les_users);

 $vidu = $_SESSION['id_user'];
 $les_com=$commande->editAllBy($vidu);
 $nbr_com=count($les_com);
 ?>
<table>
<tr>
     <th> Nom Complet </th>
     <th> Email </th>
     <th> Téléphone </th>
     <th> Plus d'informations </th>
 </tr>

 <?php

    foreach ($les_com as $row1) {
      echo"
      <tr>
                <td>$row1[1]</td>
                <td>$row1[2]</td>
                <td>$row1[3]</td>
                <td>$row1[4]</td>
                </tr>
           ";


    }


 ?>

</table>

</body>
</html>
