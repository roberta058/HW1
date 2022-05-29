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
        <title> AroundTheWorld </title>
        <link rel="stylesheet" href="areaPersonale.css">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <script src="apispotif.js" defer="true"></script>
    </head>
<body>
        <nav>
        <div id="opzioni">
           <a hred="homepage.php"> home </a>
           <a href="index.html"> quiz </a>
           <a href="https://www.google.it/maps/"> maps </a>
           <a href="preferiti.php"> preferiti</a>
           <a href="news.php"> news </a>
           <a href="./logout.php"class="button">Logout</a>
</div>

           <div id="menumini">
          <div></div>
          <div></div>
          <div></div>
          </div>
        </nav>   
    
<section>
    
    <div class="api">
        <form class="spotify">
         <p> <?php print_r($_SESSION["username"]) ?> cerca un artista o una canzone </b>
          <div id="Ricerca">
            <input id='track' placeholder='Cerca' type='search' >
            <input id="submit" type="submit" value="Invia">
          </div>
          <div id="Box"></div>
        </form>
      </div>
    </section>


</section>

<footer>
      <div id="Io">
        @aroundtheworld<br>
       ✉ email: aroundtheworld@info.com<br>
       Roberta Russo 1000002423<br>
       <a href="recensioni.php">Dicono di noi</a>
      </div>
   </footer>
</body>

</html>