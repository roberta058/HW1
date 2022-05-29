<?php
 session_start();
 if(!isset($_SESSION["username"])) {
    header("Location: login.php"); 
    exit; 
  }

?>


<!DOCTYPE html>
<html>
    <head>
    <head>
        <meta charset="utf-8">
        <title> AroundTheWorld  </title>
        <link rel="stylesheet" href="mhw1.css" />
        <link rel="stylesheet" href="mhw.css" />
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="descrizioni.js" defer> </script>
        <script src="cerc.js" defer> </script>
    </head>
    
    <body>

        <nav>
            <div id="opzioni">
            <a href="homepage.php"> home </a>
            <a href="https://www.google.it/maps/"> maps </a>
          <a href="preferiti.php"> preferiti </a>
          <a href="news.php"> news </a>  
          <a href="spotif.php"> spotify </a>
          <a href="divertimento.php#Io"> contatti </a>
           <a href="./logout.php"class="button">Logout</a>
        </div>
        
               <div id="menumini">
              <div></div>
              <div></div>
              <div></div>
              </div>
            </nav>   
        <header>
            <div id="trasparenza">
            <h1>
               <strong>AroundTheWorld</strong>
           </h1>
        </div>
        </header>

  <section>
        <div class="top">
                <p><strong><?php print_r($_SESSION["username"])?> </strong> questi sono i luoghi preferiti da altri utenti per la tipologia di viaggio da te scelta! </p>   
            </div>

            <div id="main" class="sectionGrid">

                <div data-city ="Ibiza" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city">Ibiza</p>
                        </div>
                    <img src="immagini/ibiza.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
            
                <div data-city ="Milano" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Milano </p>
                        </div>
                    <img src="immagini/milano.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="Malta" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Malta </p>
                       </div>
                    <img src="immagini/malta.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Zante" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Zante </p>
                          </div>
                    <img src="immagini/zante.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>

                <div data-city ="Amsterdam" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Amsterdam </p>
                       </div>
                    <img src="immagini/amsterdam.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="Lloretdemar" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Lloret de mar </p>
                       </div>
                    <img src="immagini/lloret.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Bangkok" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city">Bangkok</p>
                        </div>
                    <img src="immagini/bangkok.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
            
                <div data-city ="Mykonos" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Mykonos </p>
                       </div>
                    <img src="immagini/mykonos.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Londra" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Londra </p>
                       </div>
                    <img src="immagini/londra.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
            </div>
        </section>

       
        <footer>
        <div id="Io">
       @AroundTheWorld<br>
       ✉ email: aroundtheworld@info.com<br>
       Roberta Russo 1000002423<br>
       <a href="recensioni.php">Dicono di noi</a>
      </div>
        </footer> 
          
    </body>
</html>