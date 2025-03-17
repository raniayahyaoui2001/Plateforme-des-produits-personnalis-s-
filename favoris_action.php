<?php
session_start();
$vid_prod = $_REQUEST['dd'];
$vid_user = $_SESSION['id_user'];

require_once("favori.php");
$favori = new favori();
$conn=mysqli_connect("127.0.0.1", "root", "", "site");
$select = mysqli_query($conn, "SELECT * FROM favoris WHERE id_produit = $vid_prod and id_user = $vid_user ");

    if(mysqli_num_rows($select))
    {
        echo '<script language="Javascript">
            alert("Déjà favoris" );
            </script>';
        

    }
    else 
    {
        $favori->setIdUser($vid_user);
        $favori->setIdProd($vid_prod);

        $retour=$favori->ajouter();
        
    }

    header("Location:dashboard-user.php?retour=$retour");

?>

