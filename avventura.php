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
         <a href="avventura.php#Io"> contatti </a>
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
                <p><strong><?php print_r($_SESSION["username"]) ?></strong> questi sono i luoghi preferiti da altri utenti per la tipologia di viaggio da te scelta! </p>
                   
            </div>
            <div id="main" class="sectionGrid">
                <div data-city ="Patagonia" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Patagonia </p>
                      </div>
                    <img src="immagini/patagonia.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="Kenya" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Kenya </p>
                         </div>
                    <img src="immagini/kenya.jpg">
                    <p class="descrizione"> Clicca qui  per più dettagli </p>
                </div>
                
                <div data-city ="CostaRica" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Costa Rica</p>
                       </div>
                    <img src="immagini/rica.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="Antartide" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Ghiacciai Antartide </p>
                          </div>
                    <img src="immagini/antartide.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Amazzonica" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Foresta Amazzonica </p>
                        </div>
                    <img src="immagini/amazzonia.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="Sahara" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Deserto del Sahara</p>
                      </div>
                    <img src="immagini/sahara.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="SriLanka" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Sri Lanka </p>
                    </div>
                    <img src="immagini/lanka.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
              
                <div data-city ="Tanzania" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Tanzania </p>
                       </div>
                    <img src="immagini/tanzania.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Galapagos" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Isole Galapagos</p>
                        </div>
                    <img src="immagini/galapagos.jpg">
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