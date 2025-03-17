<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

.gallery{
    background:url('img/background4.jpg') center center;
}
.box {
position: relative;
margin-left: 60px;
  padding: 10px 10px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  transition: all ease-in-out 0.3s;
  background:rgba(0, 0, 0, 0.05);
  height: 180px;
  width:200px;
 
}
.imgproduit{
    height: 150px;
    width: 150px;
    padding: 10px ;
   margin-top: -2px;
}
.suiv{
    position:absolute;
    margin-left:1250px;
  }

  i{
    margin-left:180px;
   
  }
  
  .preced{
    position:absolute;
    margin-left:5px;
  }
</style>
</head>
<body>
<section id="gallery" class="gallery">
<?php include 'header.html'; ?>
<table>
        <tr>
            <td> 
                <h3>Shooting </h3>
                
            </td>
        </tr>
        <tr> 
<?php
$connex=new pdo('mysql:host=127.0.0.1;dbname=site','root','');
$connex->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

require_once("produit.php");
$produit = new produit ();
$les_prod=$produit->editAll();
$nbr=count($les_prod);

$x = 0;
foreach ($les_prod as $row)
{  
  if ($row[3]==3)
   {
     if($x % 4 !=0)
     {
        echo '<td> <div class="box" data-aos="zoom-in" data-aos-delay="100"> ';
        $im = $row[2];
        echo "<span class='imgproduit'> <img src='img/galerie/shooting/$im' class='imgproduit'/> <br/> 
        <a href='favoris_action.php?dd=$row[0]' ><i class='fa fa-heart' style='color:red'></i></a></span>";
        echo "</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp&nbsp; &nbsp; &nbsp; &nbsp; &nbsp&nbsp; &nbsp; &nbsp; &nbsp; &nbsp </td> ";
        $x++;
     }
     else
     {
        echo '</tr> <tr> <td> <div class="box" data-aos="zoom-in" data-aos-delay="100"> ';
        $im = $row[2];
        echo "<span class='imgproduit'> <img src='img/galerie/shooting/$im' class='imgproduit'/> <br/> 
        <a href='favoris_action.php?dd=$row[0]' ><i class='fa fa-heart' style='color:red'></i></a></span>";
        echo "</div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp&nbsp; &nbsp; &nbsp; &nbsp; &nbsp&nbsp; &nbsp; &nbsp; &nbsp; &nbsp </td> ";
        $x++;
     }
    } 
}

?>
 </tr>
 </table>
 <div class="preced"><a href="habillage2.php"> Habillage </a></div>
 <div class="suiv"><a href="personnalise2.php"> Personnalisé </a></div>
 <br/>
 <?php include 'footer.html'; ?>
</section>
</body>
</html>
