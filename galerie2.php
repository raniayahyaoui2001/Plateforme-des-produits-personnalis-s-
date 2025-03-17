<!DOCTYPE html>
<html>
<head>
<style>

/************************/
/*--------------------------------------------------------------
# Gallery
--------------------------------------------------------------*/
*{
                font-family:"Comic Sans MS";
            }

  h1{
    font-size: 20px;
    margin-left: 10px;
    color:black;
    opacity: 1;
    position:absolute;
    margin-top:-700px;
    font-family:"Comic Sans MS";
  }
  .gallery{
        background: url("img/background3.jpg") center center;
        background-size: cover;
        position: relative;
        padding: 2px 0;
}
.photo-gallery{
    width: 15%;
    margin: 10px;
    display: grid;
    grid-template-columns: repeat(6,2fr);
    grid-gap: 20px;
    margin-left:10px;
    font-family:"Comic Sans MS";
}

.pic{
    position: relative;
    height: 200px;
    width: 300px;
    border-radius:10px ;
    cursor: pointer;

}

.pic img{
    width: 300px;
    height: 200px;
    border-radius:10px ;
    margin-left:150px;

}


  .hoverimg{
    position: absolute;
    visibility: hidden;
    top: 15px;
    height:50px;
    width: 120px;
    z-index: 8;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.5s ease;
    margin-left:150px;

   
  h3{
    font-size: 15px;
    margin-left: 5px;
    color:black;
    opacity: 1;
  }
  

  
</style>
</head>
<body>
<?php include 'header.html'; ?>
<section id="gallery" class="gallery">

<table>
        <tr>
            <td> 
                <h1>Notre catalogue </h1> 
                
            </td>
        </tr>
        <tr> 
        <br/> <br/> <br/><br/> <br/> <br/>
        <div class="photo-gallery">

            
<?php

try{
    $connex=new pdo('mysql:host=127.0.0.1;dbname=site','root','');
    $connex->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $req="select * from categorie";

    $res=$connex-> query($req);

    while($d=$res->fetch())
    {
        $id= $d['id_categorie'];
        if ($id==1)
        {
            $im = $d['image'];
            echo" <br/> <br/> <a href='charte2.php'> <div class='pic charte'>
            <div class='hoverimg'><h3>Charte graphique </h3></div>";
            echo "<img src='img/$im' ></div></a>";
        }
        elseif($id==2)
        {
            $im = $d['image'];
            echo" <br/> <br/> <a href='packaging2.php'> <div class='pic packaging'>
            <div class='hoverimg'><h3>Packaging</h3></div>";
            echo "<img src='img/$im' ></div></a>";

        }
        elseif($id==4)
        {
            $im = $d['image'];
            echo" <br/> <br/> <a href='habillage2.php'> <div class='pic habillage'>
            <div class='hoverimg'><h3>Habillage</h3></div>";
            echo "<img src='img/$im' ></div></a>";

        } 
        elseif($id==3)
        {
            $im = $d['image'];
            echo" <br/> <br/> <a href='shooting2.php'> <div class='pic shooting'>
            <div class='hoverimg'><h3>Shooting</h3></div>";
            echo "<img src='img/$im' ></div></a>";

        } 
        elseif($id==5)
        {
            $im = $d['image'];
            echo" <br/> <br/> <a href='personnalise2.php'> <div class='pic personnalise'>
            <div class='hoverimg'><h3>Personnalisé</h3></div>";
            echo "<img src='img/$im' ></div></a>";

        }    
        elseif($id==6)
        {
            $im = $d['image'];
            echo" <br/> <br/> <a href='web2.php'> <div class='pic web'>
            <div class='hoverimg'><h3>  Web</h3></div>";
            echo "<img src='img/$im' ></div></a>";

        }          
       
        
    }
    
   
   
  }
  catch(PDOException $e)
  {
      echo"erreur de connexion a la base de donnée \n ";
      echo $e->getMessage();
  }


?>
</div>
 </tr>
 </table>

<br/><br/> <br/><br/> <br/>
 <?php include 'footer.html'; ?>
</section>
</body>
</html>
