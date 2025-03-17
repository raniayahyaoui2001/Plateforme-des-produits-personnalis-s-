
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title> Bom Gràfico </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

    .{
       font-family:"Times New Roman";    
    }
    .sesouvenir{
        position: absolute;
        margin-top:-23px;
        margin-left:20px;
    }

    .box{
        position: absolute;
        margin-left:300px;
        margin-top:120px;
    }

    .imag{
        position: absolute;
        margin-left:300px;
        margin-top:-300px;
        height:400px;
        width:400px;
    }

    .message{
        color:red;

    }

    a{
        text-decoration:none;
        color:green;
    }

   
</style>
<body>
    
<?php
// Connexion à MySQL
$connection=mysqli_connect("127.0.0.1", "root", "", "site");
$message="";
if (!$connection)
{ // Contrôler la connexion
    $MessageConnexion = die ("connection impossible !");
}
else 
{
    if(isset($_POST['Bouton']))
    { 
        $conn = mysqli_connect('127.0.0.1','root','','site') or die('Unable To connect');
        $select = mysqli_query($conn, "SELECT * FROM utilisateur WHERE email = '".$_POST['email']."'");
        if (mysqli_num_rows($select)) {
            $message = "Vous avez déjà un compte!";
        } else {
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $image=$_POST['image'];
            $email=$_POST['email'];
            $mdp=$_POST['mdp'];
            $role='user';
            // Requête d'insertion
            $AjouterUser="INSERT INTO utilisateur (nom,prenom,image,email,mdp,role) VALUES ('$nom','$prenom','$image', '$email', '$mdp','$role')";

            // Exécution de la reqête
            mysqli_query($connection, $AjouterUser) or die('Erreur SQL !'.$AjouterContact.'<br>'.mysqli_error($connection));

            header("Location:login.php");
        } 
        
    }
}

?>
<section class=" text-center text-lg-start box">
    <div>
    <div class="w3-large"><a href='acceuil.php'> <i class="fa fa-home"></i> Acceuil</a> </div>
      <form  name="formconnexion" method="POST" action="">
      <h3 class="mb-4">S'inscrire </h3>
      <div class="message"><?php if($message!="") { echo $message; echo" <br/> <a href='login.php'> connecter à votre compte </a> " ;} ?></div> 
      <br/>  
      <label for="nom">Nom :</label> <br/>
        <input type="texte" id="nom" name="nom" placeholder="Saisir votre nom ..." required> <br/>
        
        <label for="prenom"> Prénom :</label> <br/>
        <input type="texte" id="prenom" name="prenom" placeholder="Saisir votre prenom  ..." required> <br/>
        
        <label for="image"> Image :</label> <br/>
        <input type="file" id="image" name="image" placeholder="importer votre image ..." required> <br/>
        
        <label for="email">Email :</label> <br/>
        <input type="email" id="email" name="email" placeholder="Saisir votre email ..." required> <br/>
        
        <label for="mdp">Mot de passe :</label> <br/>
        <input type="password" id="mdp" name="mdp" placeholder="Saisir votre mot de passe ..." required> <br/>

     <br/>

      <input type="submit" name="Bouton" value="S'inscrire">

        <img src="img/2853458-removebg-preview.png" class="imag"/>

       </form>

    </div>
  
</section>


</body>
</html>