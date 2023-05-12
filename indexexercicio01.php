<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
        <title> Sistema escolar </title>
        
        <!-- Links Bootstrap - CSS  --> 
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
        <link href="estiloscss/bootstrap.css" rel="stylesheet">
        <link href="estiloscss/fontawesome-all.css" rel="stylesheet">
        <link href="estiloscss/swiper.css" rel="stylesheet">
        <link href="estiloscss/magnific-popup.css" rel="stylesheet">
        <link href="estiloscss/styles.css" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="./images/icone.png">
    
     </head>
     <body data-spy="scroll" data-target=".fixed-top">
         
         <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
             <div class="container">  Sistema de notas
 
                 <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                     <ul class="navbar-nav ml-auto">
                         <li class="nav-item">
                             <a class="nav-link page-scroll" href="./index.php"> Home </a>
                         </li>
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Funcionalidades do sistema </a>
                             <div class="dropdown-menu" aria-labelledby="dropdown01">
                                 <a class="dropdown-item page-scroll" href="indexexercicio01.php"> Atualizar </a>
                                 <div class="dropdown-divider"></div>
                             </div>
                         </li>
                     </ul>
                     </span>
                 </div> 
             </div> 
         </nav> 
 
         <header id="header" class="header">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
 
                     <div class="swiper-slide">
                                         
                   

                                 <div class="row">
                            <div class="col-lg-6 col-xl-7">
                             <div class="image-container">
                            <img class="img-fluid" width="408px" height="200px" src="./images/boletim.png" alt="Imagem de programação">
                                               
                             </div></div>

                                <div class="col-lg-6 col-xl-5">
                                     <div class="quadradoborda">

                                 <form method="post" action="calculo.php">

                                 <span class="texto01"> 

                                 <center> Cadastro de boletim: <br> <br> </center> 
                                 🧒🏻  Nome do aluno: <input type="text" name="nome"/> <br> <br> 
                                 1️⃣  Primeira nota: <input type="number" name="nota01"/> <br> <br> 
                                 2️⃣ Segunda nota: <input type="number" name="nota02"/> <br> <br> 
                                 3️⃣  Terceira nota: <input type="number" name="nota03"/> 

                                 <br><center><div class='justify-center'> <hr> </div></center>

                                   
                                 <input type="submit" value="Exibir boletim"/>

</form> 

                                 </span>
                     </div>
                 </div>
                                                                      
       <!-- Links Bootstrap - JS --> 
       <script src="js/jquery.min.js"></script> 
       <script src="js/bootstrap.min.js"></script> 
       <script src="js/jquery.easing.min.js"></script> 
       <script src="js/swiper.min.js"></script> 
       <script src="js/jquery.magnific-popup.js"></script> 
       <script src="js/scripts.js"></script> 
       
     </body>
 </html>