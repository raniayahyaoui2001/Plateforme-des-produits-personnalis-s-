<!DOCTYPE html>
<html>
<head>
<style>
    
    *{
                font-family:"Comic Sans MS";
            }
  .about{
    background: url("img/background2.jpg") center center;
   
  }
  
  .about .about-img {
    position: relative;
    transition: 0.5s;
  }
  .about .about-img img {
    max-width: 100%;
    border: 4px solid rgba(255, 255, 255, 0.2);
    margin-top: 8px;
    margin-left: 800px;
    top: 25px;
    width: 500px;
    height: 350px;
  }
  .about .about-img::before {
    position: absolute;
    left: 792px;
    top: 0px;
    width: 70px;
    height: 70px;
    z-index: 1;
    content: "";
    
    transition: 0.5s;
  }
  .about .about-img::after {
    position: absolute;
    right: 18px;
    bottom:-0.35em;
    width: 70px;
    height: 70px;
    z-index: 1;
    content: "";
    
    transition: 0.5s;
  }
  .about .about-img:hover {
    transform: scale(0.9);
  }
  .about .about-img:hover::before {
    left: 780px;
    top: 0.5px;
  }
  .about .about-img:hover::after {
    right: 15px;
    bottom: -0.5em;
  }

  .about .content {
    position: absolute;
    left:40px;
    top:120px;
    color:rgb(0, 0, 0);
    

  }
  .about .content h3 {
    font-weight: 600;
    font-size: 26px;
  }
  
  .about .content p:last-child {
    margin-bottom: 0;
  }
  @media (min-width: 1024px) {
    .about {
      background-attachment: fixed;
    }
  }

.para{
    text-align: justify;
    font-size: 22px;
}

ul{
    text-align: justify;
    font-size: 22px;
    list-style-type: none;
}

.imgul{
    height: 30px;
    width: 30px;
}
</style>
</head>
<body>
<?php include 'header.html'; ?>
 <!-- ======= About Section ======= -->
 <div class="about">
    <br/> <br/><br/><br/> 
    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
        <div class="about-img">
          <img src="img/3054120-removebg-preview.png" class="imag" alt="">
        </div>
      </div>
      <br/>
      
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <br/><br/> 
        <h3>Bom Gràfico .. </h3>
        <p class="para" id="para">
          Bom-Gràfico est une nouvelle agence de communication qui gère <br/>
          tous ce qui concerne la publicité digitale chez les sociétés  <br/>
          et tous personnes physiques. <br/> Elle est une entreprise spécialisée dans les conseils en communication <br/>
          pour les entreprises  qui souhaitent promouvoir leurs produits, <br/> leurs services ou leurs marques. <br/>
          
          <br/>
          Elle est spécialisée en :
        </p>
           <ul>
               <li> <img class="imgul" src="img/pngtree-green-correct-3477122-png-image_1734804-removebg-preview.png"> Charte graphique </li>
               <li>  <img class="imgul" src="img/pngtree-green-correct-3477122-png-image_1734804-removebg-preview.png"> Packaging </li>
               <li>  <img class="imgul" src="img/pngtree-green-correct-3477122-png-image_1734804-removebg-preview.png"> Shooting </li>
               <li>  <img class="imgul" src="img/pngtree-green-correct-3477122-png-image_1734804-removebg-preview.png"> Habillage </li>
               <li>  <img class="imgul" src="img/pngtree-green-correct-3477122-png-image_1734804-removebg-preview.png"> Personnalisé </li>
               <li>  <img class="imgul" src="img/pngtree-green-correct-3477122-png-image_1734804-removebg-preview.png"> Web </li>
           </ul>
          
        
        
      
      </div>
    </div>
<br/> <br/> <br/> <br/>
<br/> <br/> <br/> <br/>
<br/> <br/> <br/> <br/>
  </div>
<!-- End About Section -->
<?php include 'footer.html'; ?>

</body>
</html>
