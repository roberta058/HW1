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
         <a href="relax.php#Io"> contatti </a>
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
    <p><?php print_r($_SESSION["username"]) ?>  questi sono i luoghi preferiti da altri utenti per la tipologia di viaggio da te scelta! </p>
                   
            </div>

        <div id="main" class="sectionGrid">
                <div data-city ="Bali" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Bali</p>
                         </div>
                    <img src="immagini/bali.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
             
                <div data-city ="Maldive" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Maldive </p>
                          </div>
                    <img src="immagini/maldive.jpg">
                    <p class="descrizione"> Clicca qui  per più dettagli </p>
                </div>
                
                <div data-city ="Hawaii" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Hawaii </p>
                        </div>
                    <img src="immagini/hawaii.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="Mauritius" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Mauritius</p>
                          </div>
                    <img src="immagini/mauritius.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="IsoleFiji" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Isole Fiji </p>
                        </div>
                    <img src="immagini/fiji.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Madagascar" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Mora Mora (Madagascar) </p>
                        </div>
                    <img src="immagini/madagascar.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
               
                <div data-city ="Tibet" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Tibet </p>
                          </div>
                    <img src="immagini/tibet.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
            
                <div data-city ="GrandCanyon" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Grand Canyon </p>
                          </div>
                    <img src="immagini/canyon.jpg">
                    <p class="descrizione"> Maggiori informazioni </p>
                </div>
                
                <div data-city ="Caraibi" class="sectionGridItem">
                    <div class="itemTop">
                        <p class="city"> Caraibi</p>
                         </div>
                    <img src="immagini/caraibi.jpg">
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