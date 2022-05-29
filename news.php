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
        <link rel="stylesheet" href="api2.css">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <script src="apinew.js" defer="true"></script>
    </head>
<body>
        <nav>
        <div id="opzioni">
           <a href="homepage.php"> home </a>
           <a href="index.html"> quiz </a>
           <a href="https://www.google.it/maps/"> maps </a>
           <a href="preferiti.php"> preferiti </a>
           <a href="spotif.php"> spotify </a>
           <a href="news.php#Io"> contatti</a>

           <a href="./logout.php"class="button">Logout</a>
</div>
           <div id="menumini">
          <div></div>
          <div></div>
          <div></div>
          </div>
        </nav>   
    
<section id="news">
      <h4> Cerca un argomento e leggi le ultime news! </h4>
       <form>
            <input type='text' id='key_news'>
            <input type='submit' value='Cerca'>
        </form>
    <div class="articoli"></div>

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