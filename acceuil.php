
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title> Bom Gràfico </title>
  
  <style>

*{
                font-family:"Comic Sans MS";
            }

    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
    width: 100%;
    height: 100vh;
    background: url("img/background2.jpg") top center;
    background-size: cover;
    position: relative;
    padding: 0;
  }
  #hero:before {
    content: "";
    
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
  }
  #hero .container {
    padding-top: 200px;
    padding-left: 150px;
  }
  @media (max-width: 992px) {
    #hero .container {
      padding-top: 98px;
    }
  }
  #hero h1 {
    margin: 0;
    font-size: 48px;
    font-weight: 700;
    line-height: 56px;
    color: rgb(0, 0, 0);
    font-family: "Poppins", sans-serif;
  }
  #hero h1 span {
    color: #0c6453;
    font-family:"Comic Sans MS";
  }
  #hero h2 {
    color: rgb(0, 0, 0);
    margin-left:50px;
    font-size: 22px;
    font-family:"Comic Sans MS";
  }
  #hero .btns {
    margin-top: 30px;
    margin-left:150px;
    
  }
  #hero .btn-menu {
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    display: inline-block;
    padding: 12px 30px;
    border-radius: 50px;
    transition: 0.3s;
    line-height: 1;
    color: white;
    border: 2px solid rgb(255, 50, 135);
  }

  
  #hero .play-btn {
    width: 94px;
    height: 94px;
    background: radial-gradient( #0c6453 50%, #0c6453 52%);
    border-radius: 50%;
    display: block;
    position: relative;
    margin-left: 900px;
    overflow: hidden;
  }
  #hero .play-btn::after {
    content: "";
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translateX(-40%) translateY(-50%);
    width: 0;
    height: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 15px solid #fff;
    z-index: 100;
    transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
  }
  #hero .play-btn::before {
    content: "";
    position: absolute;
    width: 120px;
    height: 120px;
    -webkit-animation-delay: 0s;
    animation-delay: 0s;
    -webkit-animation: pulsate-btn 2s;
    animation: pulsate-btn 2s;
    -webkit-animation-direction: forwards;
    animation-direction: forwards;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-timing-function: steps;
    animation-timing-function: steps;
    opacity: 1;
    border-radius: 50%;
    border: 5px solid #0c6453;
    top: -15%;
    left: -15%;
    background: #0c6453;
  }
  #hero .play-btn:hover::after {
    border-left: 15px solid #0c6453;
    transform: scale(20);
  }
  #hero .play-btn:hover::before {
    content: "";
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translateX(-40%) translateY(-50%);
    width: 0;
    height: 0;
    border: none;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 15px solid #fff;
    z-index: 200;
    -webkit-animation: none;
    animation: none;
    border-radius: 0;
  }
  @media (min-width: 1024px) {
    #hero {
      background-attachment: fixed;
    }
  }
  @media (max-width: 992px) {
    #hero .play-btn {
      margin-top: 30px;
    }
  }
  @media (max-height: 500px) {
    #hero {
      height: auto;
    }
    #hero .container {
      padding-top: 130px;
      padding-bottom: 60px;
    }
  }
  @media (max-width: 768px) {
    #hero h1 {
      font-size: 28px;
      line-height: 36px;
    }
    #hero h2 {
      font-size: 18px;
      line-height: 24px;
    }
  }
  
  @-webkit-keyframes pulsate-btn {
    0% {
      transform: scale(0.6, 0.6);
      opacity: 1;
    }
    100% {
      transform: scale(1, 1);
      opacity: 0;
    }
  }
  
  @keyframes pulsate-btn {
    0% {
      transform: scale(0.6, 0.6);
      opacity: 1;
    }
    100% {
      transform: scale(1, 1);
      opacity: 0;
    }
  }

    </style>
</head>
<body>
    <?php include 'header.html'; ?>
    
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Bom-Gràfico</span></h1>
          <h2>More than 10 years of expériences </h2>          
        </div>
        
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->


    <?php include 'footer.html'; ?>
</body>
</html>