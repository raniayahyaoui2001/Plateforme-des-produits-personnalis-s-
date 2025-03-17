<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('127.0.0.1','root','','site') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM utilisateur WHERE email='" . $_POST["email"] . "' and mdp = '". $_POST["mdp"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id_user"] = $row['id_user'];
        $_SESSION["nom"] = $row['nom'];
        $_SESSION["prenom"] = $row['prenom'];
        $_SESSION["image"] = $row['image'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["mdp"] = $row['mdp'];
        $_SESSION["role"] = $row['role'];

        } else {
         $message = "Erreur dans l email ou mot de passe!";
        }
    }
    if(isset($_SESSION["id_user"]) and isset($_SESSION["id_user"])=='1') {
    header("Location:dashboard.php");
    }
   /* elseif(isset($_SESSION["id_user"]) and isset($_SESSION["id_user"])>'1'){
        header("Location:dashboard-user.php");
    }*/
    
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title> Bom Gràfico </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 a{
        text-decoration:none;
        color:green;
    }
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
        margin-top:160px;
    }

    .imag{
        position: absolute;
        margin-left:300px;
        margin-top:-300px;
        height:460px;
        width:500px;
    }
</style>
<body>
<section class=" text-center text-lg-start box">
<div class="w3-large"><a href='acceuil.php'> <i class="fa fa-home"></i> Acceuil</a> </div>

<div class="container" >
    <h3 class="mb-4">Se connecter</h3>
      <form  name="formconnexion" method="POST" action="">
      <div class="message"><?php if($message!="") { echo $message; } ?></div>
        <label for="email">Email :</label> <br/>
        <input type="email" id="email" name="email" placeholder="Saisir votre email ..." required> <br/>

        <label for="mdp">Mot de passe :</label> <br/>
        <input type="password" id="mdp" name="mdp" placeholder="Saisir votre mot de passe ..." required> <br/>

     <br/>

      <div> <input type="checkbox" id="check" name="check" value="check"> <h4 class="sesouvenir">Se souvenir de moi </h4> </div> <br/> 
      <div> <h6 class="sesouvenir">Vous n'avez pas de compte ? pensez à <a href="inscription.php"> s'inscrire </a> </h6> </div><br/>

        <!--input type="submit" name="submit" value="submit" -->
<button type="submit" name="submit" value="submit" >submit</button>
        <img src="img/Mobile-login-Cristina-removebg-preview.png" class="imag"/>

       </form>

</div>
  
</section>


</body>
</html>