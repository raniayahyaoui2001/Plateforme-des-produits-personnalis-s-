<!DOCTYPE html>
<html>
<head>
<style>
    *{
        font-family:"Comic Sans MS";
    }
.contact{
    background: url("img/background4.jpg") center center;

}
/* Style inputs with type="text", select elements and textareas */
input[type=text],input[type=email], select, textarea {
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
    margin-left:350px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  /* When moving the mouse over the submit button, add a darker green color */
  input[type=submit]:hover {
    background-color:#f5f5f5 ;
    color: black;
  }
  
  /* Add a background color and some padding around the form */
  .contactform {
    border-radius: 5px;
    background-color: #f5f5f5;
    padding: 60px;
    height : 480px;
    width : 400px;
    margin-left : 120px;
    color:grey;

  }

  .map{
    height:550px;
    width : 500px;
    margin-left : 660px;
    position : absolute;
  }

  .total{
    margin-right: 0;
    margin-left: 0; }
    .no-gutters > .col,
    .no-gutters > [class*="col-"] {
      padding-right: 0;
      padding-left: 0; 
  }

  .row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    }

    .imag1{
        position: absolute;
        margin-top: 3px;
        margin-left: 4px;
        height: 30px;
        width:30px;
        }
        
        .imag3{
          position: absolute;
          margin-top: 6px;
          margin-left: 7px;
          height: 25px;
          width:25px;
        }
        .imag4{
          position: absolute;
          margin-top: 6px;
          margin-left: 7px;
          height: 25px;
          width:25px;
        }

       

        .adr{
            position : absolute;
            margin-top:500px;
            margin-left :30px;
            height:50px;
            width:200px;
            font-size:13px;

        }

        .tel{
            position : absolute;
            margin-top:500px;
            margin-left :230px;
            height:50px;
            width:200px;
            font-size:13px;

        }

        .email{
            position : absolute;
            margin-top:500px;
            margin-left :390px;
            height:50px;
            width:200px;
            font-size:13px;

        }

    .icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background:#a8a8a8;
      margin-top: -25px ;
      margin-bottom: 25px; }
       
      .text{
        font-family:"Comic Sans MS";
        font-weight:bold;
      }

   
</style>
</head>
<body>
<?php include 'header.html'; ?>

<?php
// Connexion à MySQL
$connection=mysqli_connect("127.0.0.1", "root", "", "site");

if (!$connection)
{ // Contrôler la connexion
    $MessageConnexion = die ("connection impossible !");
}
else 
{
    if(isset($_POST['Bouton']))
    { 
        // Autre contrôle pour vérifier si la variable $_POST['Bouton'] est bien définie
        $nom_complet=$_POST['nom_complet'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        // Requête d'insertion
        $AjouterContact="INSERT INTO contact (nom_complet,email,message) VALUES ('$nom_complet', '$email', '$message')";

        // Exécution de la reqête
        mysqli_query($connection, $AjouterContact) or die('Erreur SQL !'.$AjouterContact.'<br>'.mysqli_error($connection));

        echo "<script> alert ('message envoyé avec succès !!') </script>";
    }
}

?>


  <!-- ======= Contact Section ======= -->
<section id="contact" class="contact contact-wrap w-100 p-md-5 p-4">
<br/> <br/> 
<div class="total row"> 
    <div class="contactform col-md-7 ">
      <h3 class="mb-4">Contactez-Nous</h3>
      <form  name="formcontact" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <label for="nom_complet">Nom complet</label> <br/>
        <input type="text" id="nom_complet" name="nom_complet" placeholder="Saisir votre nom complet ..." required> <br/>

        <label for="email">Email</label> <br/>
        <input type="email" id="email" name="email" placeholder="Saisir votre email ..." required> <br/>

        <label for="message">Message</label> <br/>
        <textarea id="message" name="message" placeholder="Saisir votre message ..." style="height:200px" required></textarea> <br/>

        <input type="submit" name="Bouton" value="Envoyer">

       </form>
    </div>

    <div class="col-md-5 d-flex align-items-stretc map"> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.0685232249425!2d10.3055066147445!3d36.74492627850984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd49d905784743%3A0x20a124eda1a5d844!2sBom%20Grafico!5e0!3m2!1sfr!2stn!4v1666211239700!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="infos">

        
         <div class="adr">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="fa fa-map-marker"><img src="img/localisateur.png" class="imag1"></span>
            </div>

            <div class="text">
                <p><span>Addresse: <br/></span> Ben arous, Ezzahra 2034</p>
            </div>
        </div>

        <div class="tel">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="fa fa-phone"><img src="img/telephone-call.png" class="imag4"> </span>
            </div>

            <div class="text">
                <p><span>Téléphone: <br/> </span> +216 22 090 145</p>
            </div>
        </div>

        <div class="email">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="fa fa-paper-plane"> <img src="img/email.png" class="imag3"> </span>
            </div>

            <div class="text">
                <p><span>Email: <br/> </span> <a href="mailto:contact.bomgrafico@gmail.com">contact.bomgrafico@gmail.com</a></p>
            </div>

        </div>  
    </div>
    
</div>
<br/> <br/> <br/><br/> <br/> <br/>
</section>

<!-- End Contact Section -->
<?php include 'footer.html'; ?>
</body>
</html>
