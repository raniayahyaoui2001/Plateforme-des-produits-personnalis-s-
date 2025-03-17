<?php
 require_once("categorie.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
         *{
        font-family:"Comis Sans MS";
    
    }
        body{ 
                background: url(img/background3.jpg) no-repeat center fixed; 
                background-size: cover; 
            }

            
        .form-control{
            width:200px;
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
    font-weight:bold;
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
        padding:15px;
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

   .huge1 {
        font-size:35px;
        position:absolute;
        margin-left:95px;
        margin-top:-10px;
        color:red;

    }
    .huge2{
        font-size:35px;
        position:absolute;
        margin-left:95px;
        margin-top:-10px;
        color:red;

    }
    .huge3 {
        font-size:35px;
        position:absolute;
        margin-left:95px;
        margin-top:-10px;
        color:red;

    }
    .huge4{
        font-size:35px;
        position:absolute;
        margin-left:95px;
        margin-top:-10px;
        color:red;

    }
    .cli{
    margin-top:40px;
    font-size:13px;
    color:black;
    font-weight:bold;
  }
    
  
  h5{
    text-align:center;
    font-size:18px;
  }

  .aj{
    
    margin-left: 250px;
    margin-right: 300px;
  }
 
 

  .btn{
    margin-left:400px;
  }
  h3{
            font-family:"comic sans ms";
            margin-left:120px;

        }
</style>

<meta charset="utf-8" />
 <title> Modifier une catégorie  </title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
    <br/><div id='main'>
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
    <div class='box'>
        <div class='rowx'>
            <div class='col-xs-3'>
                <img src='img/client.png' style='height:36px;width:36px;'/>
            </div>
            <div class='col-xs-9 text-right'>
                <div class='huge1'>$nbr_cli </div>
                <div class='cli'>Nouveau Client !</div>
            </div>
        </div>
        <div class='rowx'>
            <div class='col-xs-3'>
                <img src='img/prod1.png' style='height:36px;width:36px;'/>
            </div>
            <div class='col-xs-9 text-right'>
                <div class='huge2'> $nbr_prod </div>
                <div class='cli'>Nouveau Produit !</div>
            </div>
        </div>
        <div class='rowx'>
            <div class='col-xs-3'>
                <img src='img/categ.png' style='height:36px;width:36px;'/>
            </div>
            <div class='col-xs-9 text-right'>
                <div class='huge3'>$nbr_categ</div>
                <div class='cli'>Nouveau Catégorie !</div>
            </div>
        </div>
        <div class='rowx'>
            <div class='col-xs-3'>
            <img src='img/contact.png' style='height:36px;width:36px;'/>
            </div>
            <div class='col-xs-9 text-right'>
                <div class='huge4'>$nbr_con</div>
                <div class='cli'>Nouveau Contact !</div>
            </div>
        </div>
    </div>
 
 <hr/>
";
 
     $categorie=new categorie();
     // Récupérer l'id à modifier (depuis la page précédente)
     $id = $_REQUEST['dd'];
     // Récupérer toutes les données de categorie
     $res = $categorie->cnx()->query("SELECT * from categorie where id_categorie=$id");
     $la_categorie=$res->fetch();
   echo"

 <div class='aj'> 
   <form action='modif_action.php?dd=$id' method='post'>
   <h3>Modifier une catégorie </h3>
   <br> <br>
     <div class='form-group'>
        <label for='nom'>Nom </label>
        <input type='text' class='form-control' id='nom'  value='$la_categorie[1]' name='nom' size='50'/>  
     </div>
     <div class='form-group'>
        <label for='image'>Image</label>
        <input type='file' class='form-control' id='image'  value='$la_categorie[2]' name='image'/>
     </div> <br/>
     <button type='submit' class='btn btn-primary ajout'>Terminer</button>
    </form>
  </div> ";
 ?>

</body>
</html>