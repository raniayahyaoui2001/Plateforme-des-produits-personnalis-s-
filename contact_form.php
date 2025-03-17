<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style> 
           *{
                font-family:"Comic Sans MS";
            }

            /* Style inputs with type="text", select elements and textareas */
input[type=text],input[type=email], input[type=tel],select, textarea {
    width: 80%; /* Full width */
    padding: 12px; /* Some padding */ 
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
  }
  
  /* Style the submit button with a specific background color etc */
  input[type=submit] {
    background-color: #0c6453;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left:380px;
    margin-top:20px;
  }
  
  /* When moving the mouse over the submit button, add a darker green color */
  input[type=submit]:hover {
    background-color:white ;
    color: grey;
  }
  
  /* Add a background color and some padding around the form */
  .contactform {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
    height : 650px;
    width : 500px;
    margin-top:50px;
    margin-left : 220px;
    color:grey;
    margin-bottom:50px;
   
  }

  .f{
    height : 500px;
    width : 500px;
  }

  </style>
</head>
<body>
    
<?php
require_once("produit.php");
require_once("categorie.php");
require_once("commande.php");
require_once("contacts.php");
require_once("utilisateur.php");
?>
<?php
 $connex=new pdo('mysql:host=127.0.0.1;dbname=site','root','');
 $connex->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 $produit=new produit();
 $les_prod=$produit->editAll();
 $nbr_prod=count($les_prod);



 $categorie=new categorie();
 $les_categ=$categorie->editAll();
 $nbr_categ=count($les_categ);

 $contact=new contacts();
 $les_con=$contact->editAll();
 $nbr_con=count($les_con);

 
 $commande=new commande();
 $les_com=$commande->editAll();
 $nbr_com=count($les_com);


 $utilisateur=new utilisateur();
 $les_users=$utilisateur->editAll();
 $nbr_user=count($les_users);

 $conx = mysqli_connect('127.0.0.1:3306','root','','site') or die('Unable To connect');
 $ob= "SELECT * FROM categorie";
 $list = mysqli_query($conx,$ob);

 ?>
<?php
echo"<div class='contactform col-md-7 '>
<div class='f'>
<form  action='commande_action.php' name='formcontact' method='POST' >
<h5> Contact pour commande </h5> 
<div class='form-group'>
  <label for='nom_complet'>Nom complet</label> <br/>
  <input type='text' id='nom_complet' name='nom_complet' placeholder='Saisir votre nom complet ...' required> <br/>
  </div>
  <div class='form-group'>
  <label for='email'>Email</label> <br/>
  <input type='email' id='email' name='email' placeholder='Saisir votre email ...' required> <br/>
  </div>
  <div class='form-group'>
  <label for='tel'>Téléphone</label> <br/>
  <input type='tel' id='tel' name='tel' placeholder='Saisir votre numéro ...'' required> <br/>
  </div>
 <div class='form-group'>
  <label for='id_categorie'>Catégorie</label> <br/>
  <select class='form-control' name='id_categorie'>";
      while ($row = mysqli_fetch_array($list)):
          echo" <option value='".$row[0]."'>". $row[1]."</option>";
      endwhile;
      echo" 
  </select> <br/>
  </div>
  <div class='form-group'>
  <label for='infos'>Informations </label> <br/>
  <textarea id='infos' name='infos' placeholder='Saisir plus de détails...' style='height:100px'  required></textarea> <br/>
  </div>

  <input type='submit' name='Bouton' value='Envoyer'>

 </form>
 </div>
</div>
<br/><br/>";
?>

</body>
</html>
