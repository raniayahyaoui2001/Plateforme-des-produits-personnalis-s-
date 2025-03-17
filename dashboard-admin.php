<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style> 

            *{

                font-family:"Comic Sans MS";
            }

     #menu, #contenu {
    padding:1px 0;
    }

    #main {
    width:95%;
    height:70%;
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
    background-color:transparent;}

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
    a{
        text-decoration: none;
        outline: none;
        color: black;
    }
    .huge1 {
        font-size:35px;
        position:absolute;
        margin-left:150px;
        margin-top:-50px;
        color:red;

    }
    .huge2{
        font-size:35px;
        position:absolute;
        margin-left:150px;
        margin-top:-50px;
        color:red;

    }
    .huge3 {
        font-size:35px;
        position:absolute;
        margin-left:150px;
        margin-top:-50px;
        color:red;

    }
    .huge4{
        font-size:35px;
        position:absolute;
        margin-left:150px;
        margin-top:-50px;
        color:red;

    }

   
   
  h5{
    text-align:center;
    font-size:18px;
  }
  body{
    background: url(img/background2.jpg) no-repeat center fixed; 

  }

  /* HORIZONTAL SCROLL */
.scroll-container{
  overflow: auto;
  white-space: nowrap;
  padding: 5px 70px 5px 20px;
  background: transparent;
  height: 100%;
  border-radius:15px;
}

.gridscroll{
  display:inline-block;
}

.gridscroll img {
  margin-right:22px;
}

.imag{
    height:350px;
    width:350px;
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
 session_start();

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


 $im = $_SESSION['image'];


 ?>

<?php
 include 'header2.html';   

echo"
<br/>
<div id='main'>
    <div id='menu'>
    <ul class='ul-menu'>
    <li> <img src='img/$im' class='i-li' style='height:90px;width:90px;position:absolute;margin-left:1150px;margin-top:-70px;'/> </li>
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
                    <div>Nouveaux Clients !</div>
                </div>
            </div>
            <div class='rowx'>
                <div class='col-xs-3'>
                    <img src='img/prod1.png' style='height:36px;width:36px;'/>
                </div>
                <div class='col-xs-9 text-right'>
                    <div class='huge2'> $nbr_prod </div>
                    <div>Nouveaux Produits !</div>
                </div>
            </div>
            <div class='rowx'>
                <div class='col-xs-3'>
                    <img src='img/categ.png' style='height:36px;width:36px;'/>
                </div>
                <div class='col-xs-9 text-right'>
                    <div class='huge3'>$nbr_categ</div>
                    <div>Nouveaux Catégories !</div>
                </div>
            </div>
            <div class='rowx'>
                <div class='col-xs-3'>
                <img src='img/contact.png' style='height:36px;width:36px;'/>
                </div>
                <div class='col-xs-9 text-right'>
                    <div class='huge4'>$nbr_con</div>
                    <div>Nouveaux Contacts !</div>
                </div>
            </div>
        </div>
        <div>
            <div class='scroll-container'>
                <div class='gridscroll'>
                    
                    <img src='img/charte.jpg' class='imag'/>
                    <img src='img/habillage.jpg' class='imag'/>
                     <img src='img/packaging.jpg' class='imag'/>
                     <img src='img/personnalise.jpg' class='imag'/>
                     <img src='img/shooting.jpg' class='imag'/>
                     <img src='img/web.jpg' class='imag'/>
                </div>
            </div>
        <div>
    

</div> <br/><br/><br/>
";
?>



</body>
</html>
