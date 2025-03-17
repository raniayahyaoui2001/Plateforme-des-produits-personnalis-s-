
<!DOCTYPE html>
<html>
<head>
<style>
*{
    font-family:"Comic Sans MS";
}
/*--------------------------------------------------------------
# Why Us
--------------------------------------------------------------*/
.why-us{
    background:url("img/background3.jpg") center center;
}
.why-us .box {
position: relative;
margin-left: 60px;
  padding: 50px 30px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  transition: all ease-in-out 0.3s;
  background:rgba(0, 0, 0, 0.05);
  height: 300px;
  width:300px;
  font-family:"Comic Sans MS";
 
}
.imgclient{
    height: 180px;
    width: 180px;
   margin: auto;
}
.why-us .box span {
  display: block;
  font-size: 28px;
  font-weight: 700;
  font-family:"Comic Sans MS";
}

.why-us .box p {
  color: #000000;
  font-size: 15px;
  margin: 0;
  padding: 0;

}
.why-us .box:hover {
  background: #f5f5f5;
  padding: 30px 30px 70px 30px;
  box-shadow: 10px 15px 30px rgba(0, 0, 0, 0.18);
}
.why-us .box:hover span, .why-us .box:hover h4, .why-us .box:hover p {
  color: #474747;
}




</style>
</head>
<body>
<?php include 'header.html'; ?>
 <!-- ======= Clients Section ======= -->
 <section id="why-us" class="why-us">
   
    <div class="container" data-aos="fade-up">
    
    

      <div class="row">
        <table>
        <tr>
            <td> 
                <h3>Nos clients </h3>
                <h4> Ça fait plaisir de traviller avec : </h4>
            </td>
        </tr>
        <tr> 
<?php

try{
    $connex=new pdo('mysql:host=127.0.0.1;dbname=site','root','');
    $connex->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $req="select nom, image, description
          from client";
    $res=$connex-> query($req);
    $x=6;
    while($d=$res->fetch())
    {
      if($x % 3 != 0)
      {
       
        echo ' <td>   <div class="box" data-aos="zoom-in" data-aos-delay="100"> '.$d['nom'];
        $im = $d['image'];
        echo "<span class='imgclient'> <img src='img/client/$im' class='imgclient'></span></br>";
        echo "<p>".$d['description'].'</p> </div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp&nbsp; &nbsp; &nbsp; &nbsp; &nbsp&nbsp; &nbsp; &nbsp; &nbsp; &nbsp </td> ';
        
      }
      else 
      {
       
        echo '</tr> <tr> <td>   <div class="box" data-aos="zoom-in" data-aos-delay="100"> '.$d['nom'];
        $im = $d['image'];
        echo "<span class='imgclient'> <img src='img/client/$im' class='imgclient'></span><br/>";
        echo "<p>".$d['description'].'</p> </div>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp&nbsp; &nbsp; &nbsp; &nbsp; &nbsp&nbsp; &nbsp; &nbsp; &nbsp; &nbsp</td> ';
      }
      
     $x++;
    }
    
   
   
  }
  catch(PDOException $e)
  {
      echo"erreur de connexion a la base de donner\n ";
      echo $e->getMessage();
  }


?>
 </tr>
 </table>
 <!-- End Clients Section -->
 <?php include 'footer.html'; ?>

</body>
</html>
