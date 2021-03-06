<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JFC Maquinas de transfer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href=" favicooon.ico" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
</head>

<body>

    
    <!-- Começo do header  -->
    <header class="menu-bg">
        <div class="menu">
            <div class="menu-logo">
    
                <a href=""><img src="./images/logo-site.png" alt="Logo da JFC" style="width:20;height:20;">
    
            </div>

            <div class="topnav" id="myTopnav">
              <a href="seladoras.html" class="active">Seladoras</a>
              <a href="prensas.html">Prensas</a>
              <a href="sobre.html">Empresa</a>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
              </a>
            </div>
            
    
            
        </div>
    </header>

    <!-- Fim do header -->
   

    <!-- Slider  -->
    <div class="container-xxl">
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol>
      
          <!-- imagem dos slides -->
          <div class="carousel-inner">
            <div class="item active">
             <a href="seladoras.html"> <img src="./images/banner.jpeg" alt="" style="width:100%;"></a>
            </div>
      
            <div class="item">
                <a href="prensas.html">    <img src="./images/banner2.jpeg" alt="" style="width:100%;"></a>
            </div>
          
            
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <!-- Fim do Slider  -->
      <br>
      <h2 class="amostra">Nossos Produtos</h2>

      <div class="row">
        <div class="column">
          <p class="pProduto1">Conheça nossa linha de seladoras térmicas: </p>
          <a href="seladoras.html"><img class="imgSeladora" src="./images/seladora012.png" style="width:100%">
           </a>
          
          <br>
        </div>
        <div class="column2">
          <p class="pProduto2">Conheça nossa linha de prensas térmicas: </p>
          <a href="prensas.html"><img img class="imgPrensa" src="./images/prensa01.png" style="width:100%">
           </a>
        </div>
        

        

        
        <!-- Fim dos produtos  -->

        <div class="preFooter">
          <div class="linha">
          <h2 class="amostra2">Onde estamos</h2>
        </div>
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d271.9169855148553!2d-46.424020213478045!3d-23.51579758298781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc51c5dfdd44f917!2sJFC%20m%C3%A1quinas%20de%20Transfer!5e0!3m2!1spt-BR!2sbr!4v1614635594441!5m2!1spt-BR!2sbr" width="1000" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>        
        </div>
        <br>

       <!-- footer  -->
       <div class="linha">
        <h2 class="amostra2"></h2>
      </div>
       <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
        <ul class="adress">
             <span>Endereço</span>    
             <li>
              <a href="https://goo.gl/maps/ruq9AucupA39ujVH8" target="_blank"><i class="fas fa-map-marker-alt"></i> Rua Saracura-Sanã - Nº2 - São Paulo - SP </a>
              </li>
                   <br>
              <li>
                <a href="tel:(11)2511-1381"><i class="fas fa-phone-alt"></i> (11) 2511-1381 </a>
              </li>
                   <br>
              <li>
                <a href="mailto:contato@jfcmaquinasdetransfer.com.br"><i class="fas fa-envelope"></i> contato@jfcmaquinasdetransfer.com.br</a>
              </li>
              <br>
         </ul>
    </div>
    
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <ul class="contact">
             <span>Links</span>    
             
                   
              <li>
                 <a href="sobre.html">Sobre a empresa</a>
              </li>
                   <br>
              <li>
                <a href="#">Blog</a>
              </li>
                      <br>             
              
        </ul>
    </div>
    <footer class="container-fluid text-center bg-lightgray">

      <div class="copyrights" style="margin-top:25px;">
          <p>JFC Maquinas de transfer © 2021, Todos os Direitos Reservados
              <br>
              <span>Feito por: <a href="https://www.instagram.com/gfxss_dev/" target="_blank">@GFXSS_dev</a></span></p>
         
      </div>
</footer>



    
<script SameSite="None; Secure" src="https://static.landbot.io/landbot-3/landbot-3.0.0.js"></script>
<script>
  var myLandbot = new Landbot.Livechat({
    configUrl: 'https://chats.landbot.io/v3/H-894262-AOWKGITIMT0H4KQR/index.json',
  });
</script>



      






    




    








   
    <script src="./js/scripts.js"></script>

</body>
</html>