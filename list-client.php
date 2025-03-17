<?php
require_once("client.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Détails clients </title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>          
        <style>
             *{
                font-family:"Comic Sans MS";
            }
            body{ 
                background: url(img/background2.jpg) no-repeat center fixed; 
                background-size: cover; 
             }
            h3{
                text-align:center;
                font-family:"Comic Sans MS";

            }
            .tab{
                width: 50%;
                margin-left: 25%;
            }
            h4{
                color:black;
                text-align:center;
            }
            .image{
                height:100px;
                width:140px;
            }
            h5{
                position: absolute;
                margin-left:1250px;
            }

         #menu, #contenu {
    padding:1px 0;
    }

    #main {
    max-width:95%;
    max-height:70%;
    margin:auto;
    }
    #menu  {
    width:100px;
    height:400px;
    float:left;
    width:240px;
    background-color:transparent;
    }
    #contenu {
    max-width:80%;
    max-height:60%;
    margin-left:250px;
    background-color:transparent;
    }

    .box {
    display: grid;
    width: 500px;
    grid-template-columns: 250px 250px 250px 250px;
    align-items: start;
    justify-content: space-between;
    }

    .box :first-child {
    align-self: center;
    }

    .rowx{
        border-radius:30px;
        border-width:1px;
        border-style:groove;
        border-color:black;
        margin:20px 5px;
        padding:20px;
        height:100px;
        width:240px;

    }


    .ul-menu {
       
       align-items: center;
       justify-content: space-between;
       padding: 10px 10px 10px 30px;
       color: black;
       white-space: nowrap;
       transition: 0.3s;
       font-weight:bold;
     margin-top:10px;
     list-style: none;
      }

      ul{
        list-style-type: none;
    }

    .x-a, .x-a:focus {
     display: flex;
     align-items: center;
     justify-content: space-between;
     color: rgb(0, 0, 0);
     white-space: nowrap;
     transition: 0.3s;
     text-decoration: none;
   }
   .x-a i, .x-a:focus i {
     font-size: 12px;
     line-height: 0;
     margin-left: 5px;
     text-decoration: none;
   }
   .x-a:hover, .x .active, .x .active:focus, .x-li:hover > a {
     color: #0c6453;
     text-decoration: none;
   }
    .huge{
        font-size:30px;
        position:absolute;
        margin-left:100px;
        margin-top:-12px;
        color:red;

    }
    .plus{

position:absolute;
margin-left:450px;
}
    
   
  h5{
    text-align:center;
    font-size:18px;
    position:absolute;
    margin-left:900px;
  }

  .cli{
    margin-top:30px;
    font-size:12px;
    font-weight:bold;
  }

  
  .image-c{
                height:100px;
                width:140px;
            }


            
         </style>
    </head>
    <body>
<?php


require_once("produit.php");
require_once("client.php");
require_once("categorie.php");
require_once("contacts.php");

 ?>
 <?php
 $connex=new pdo('mysql:host=127.0.0.1;dbname=site','root','');
 $connex->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 $produit=new produit();
 $les_prod=$produit->editAll();
 $nbr_prod=count($les_prod);

 $client=new client();
 $les_cli=$client->editAll();
 $nbr_cli=count($les_cli);

 $categorie=new categorie();
 $les_categ=$categorie->editAll();
 $nbr_categ=count($les_categ);

 $contact=new contacts();
 $les_con=$contact->editAll();
 $nbr_con=count($les_con);
 ?>
    <?php include 'header2.html';   
    echo"
 <br/> <div id='main'>
 <div id='menu'>
 <ul class='ul-menu'>
 <a href='dashboard.php' class='x-a'> <li class='x-li'> Tableau de bord </li> </a> <br/>
 <a href='list-produit.php' class='x-a'> <li class='x-li'> <img src='img/prod.png' style='height:24px;width:24px;'/> Liste des produits </li></a> <br/>
 <a href='list-categorie.php' class='x-a'> <li class='x-li'><img src='img/categ.png' style='height:24px;width:24px;'/>  Liste des catégories </li></a> <br/>
 <a href='list-client.php' class='x-a'> <li class='x-li'> <img src='img/client1.png' style='height:24px;width:24px;'/> Liste des clients </li></a> <br/>
 <a href='list-contact.php' class='x-a'> <li class='x-li'> <img src='img/message.png' style='height:24px;width:24px;'/> Liste des contacts </li></a> <br/>
 <a href='list-contact-message.php' class='x-a'> <li class='x-li'> <img src='img/commande.png' style='height:24px;width:24px;'/> Liste des commandes </li></a> <br/>

</ul>
 </div>

<div id='contenu'>
<h3>  Détails clients  </h3>
<h4>
<br/>
<a href='insertcli.php'>  <i class='fa fa-plus plus' style='font-size:24px'></i>  </a>
 <br>";
        // Récupérer les notes depuis la Bd
            $client=new client();
            $les_com=$client->editAll();
            $nbr_com=count($les_com);
        // Récupérer la client du l'animal 
          //  $animal=new animal();
          //  $les_anim=$animal->editAll();
           // $nbr_anim=count($les_anim);
            // Afficher la liste des commandes
            
            echo "<table class='table' id='tab'>";
            //<td> client </td>
            echo "<thead> <tr> <td> Nom  </td> <td> Image </td><td>  Description</td> <td> </td> </tr> </thead> <tbody>";
            foreach ($les_com as $icom)
            {    
                echo "<tr><td>". $icom[1]."</td><td> <img src='img/client/". $icom[2]."' class='image-c'></td><td>". $icom[3]."</td>";
                echo "<td>
                    <a href='modifcli.php?dd=$icom[0]'> <i class='fa fa-edit' style='font-size:24px'></i></a>
                    <a onclick='if(confirm('voulez vous ?'))' href='suppcli.php?dd=$icom[0]'><i class='fa fa-trash-o' style='font-size:24px;color:red'></i></a>
                </td></tr>";
            }
            echo "</tbody> </table></div> </div>";
   ?>
   </h4>
   </body>
   </html>