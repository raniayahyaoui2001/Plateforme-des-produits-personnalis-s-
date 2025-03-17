<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style> 
    *{
                font-family:"Comic Sans MS";
            }
     #menu, #menu1 , #contenu {
    padding:1px 0;
    }

    #main {
    max-width:95%;
    max-height:70%;
    margin:auto;
    }
    #menu  {
    max-width:40%;
    float:left;
    width:240px;
    margin-top:40px;
    background-color:#00dfc0;
    border-radius:10px;
    }

    #menu1  {
    max-width:40%;
    float:right;
    margin-left: -240px;
    margin-top:-840px;
    width:410px;
    background-color:#00dfc0;
    border-radius:10px;
    }

    #contenu {
    max-width:80%;
    max-height:60%;
    margin-left:40px;
    margin-top:-30px;
    
   
    }


    
  h5{
    text-align:center;
    font-size:18px;
  }
   body{ 
                background: url(img/background3.jpg) no-repeat center fixed; 
                background-size: cover; 
            }

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
$im = $_SESSION['image'];

 include 'header2.html'; 

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
echo"
<br/>
<div id='main'>
  
<div id='menu'>
<h5>List produit aimé </h5> ";
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
echo "</div>";

echo" <div id='contenu'>";
 include 'contact_form.php'; 
 echo"</div>";

 echo"
 <div id='menu1'>
   <h5>List contact </h5> ";
   include 'list_commande.php'; 
   echo "</div>";

   echo"<img src='img/$im' class='i-li' style='height:100px;width:100px;position:absolute; margin-top:-900px;margin-left:1200px;'/> ";
   echo" </div>";
?>


</body>
</html>
