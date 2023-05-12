<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
        <title> Sistema escolar </title>

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
        <link href="estiloscss/bootstrap.css" rel="stylesheet">
        <link href="estiloscss/fontawesome-all.css" rel="stylesheet">
        <link href="estiloscss/swiper.css" rel="stylesheet">
        <link href="estiloscss/magnific-popup.css" rel="stylesheet">
        <link href="estiloscss/styles.css" rel="stylesheet">

        <link rel="icon" href="./images/icone.png">
    
     </head>
     <body data-spy="scroll" data-target=".fixed-top">
         
         <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
             <div class="container">
             
                  Sistema de notas  
 
                 <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                     <ul class="navbar-nav ml-auto">
                         <li class="nav-item">
                             <a class="nav-link page-scroll" href="./index.php"> Home </a>
                         </li>
         
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Funcionalidades do sistema </a>
                             <div class="dropdown-menu" aria-labelledby="dropdown01">
                                 <a class="dropdown-item page-scroll" href="indexexercicio01.php"> Cadastrar notas </a>
                                 <div class="dropdown-divider"></div>
                         </li>
                     </ul>
 
                     </span>
                 </div> 
             </div> 
         </nav> 

         <br><br> <br><br>
         <h1>  <center> 📃 Boletim 📃 </center> </h1>
          <div class="quadradoborda">


          <span class="texto01"> 
            
<?php 

$nome = $_POST['nome'];
$nota01 = $_POST['nota01'];
$nota02 = $_POST['nota02'];
$nota03 = $_POST['nota03'];

$notatotal = ($nota01 + $nota02 + $nota03) / 3 ;


echo "🧒🏻  Nome do aluno: $nome <br> <br> ";
echo "1️⃣ Menção 01 do aluno:  $nota01  <br> <br> ";
echo "2️⃣ Menção 02 do aluno:  $nota02  <br> <br> ";
echo "3️⃣ Menção 03 do aluno: $nota03   <br> <br> <br> ";

echo "📑 Média total do aluno: $notatotal   <br> <br> ";


echo "Situação: <br> <br> ";
if ($notatotal >= 7){
    echo "📜 $nome foi aprovado!";
}
else{
    echo "📜 $nome foi reprovado!";
}


?>

</span><br><center><div class='justify-center'> <hr> </div></center>

       

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