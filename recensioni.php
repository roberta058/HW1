<?php
 session_start();
 if(!isset($_SESSION["username"])) {
    header("Location: login.php"); 
    exit; 
  }

  if(isset($_POST["recensione"]))
  { 
    $conn = mysqli_connect("localhost", "root", "", "around")or die ("Errore: " .mysqli_connect_error());
    $username=$_SESSION['username'];
    $recensione = mysqli_real_escape_string($conn, $_POST["recensione"]);
    $query = "INSERT INTO recensioni(username, recensione) values('$username', '$recensione')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    mysqli_close($conn);
  }

?>

<!DOCTYPE html>
<html>
    <head>
        <title> AroundTheWorld </title>
        
        <link rel="stylesheet" href="rec.css">
        <link href="https://fonts.googleapis.com/css2?family=Carter+One+Light&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <script src="recensioni.js" defer> </script>
       
    </head>
<body>
 <nav>
        <div id="opzioni">
        <a href="homepage.php"> home </a>
           <a href="https://www.google.it/maps/"> mappa </a>
           <a href="preferiti.php"> preferiti </a>
           <a href="news.php"> news </a>  
           <a href="spotif.php"> spotify </a>
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
    <div class="recensioni">
    <form action="" name="rece" method="POST">
    <strong> <label> <?php print_r($_SESSION["username"]) ?> lascia la tua recensione o il tuo suggerimento!</label></strong><br><br>
       <textarea id="addComment" placeholder='Scrivi qui..' ></textarea>
      <input type="submit" name="recensione" id="recensione" value="Invia">
    </div>
    <br>
    <br> 

<section class="reviews"> 
<h2> Recensioni di altri utenti </h2>
<div class="RECE">

      <div class="one">
            <img src="immagini/star.png" class="star">
            <img src="immagini/star.png" class="star">
            <img src="immagini/star.png" class="star">
            <img src="immagini/star.png" class="star">
            <img src="immagini/star.png" class="star">
            <p>Ottimo - <strong>account99</strong></p> 
      </div>

      <div class="one">
         
         <img src="immagini/star.png" class="star">
            <img src="immagini/star.png" class="star">
            <img src="immagini/star.png" class="star">
            <img src="immagini/star.png" class="star">
          <p>very good - <strong>jack</strong></p>
      </div>

      <div class="one">
         <div class="stars">
         <img src="immagini/star.png" class="star">
         <img src="immagini/star.png" class="star">
         
         <p> Bei panorami - <strong>franco126</strong></p>
         
         </div>
      </div>

      <div class="one">
            <img src="immagini/star.png" class="star">
            <img src="immagini/star.png" class="star">
            <img src="immagini/star.png" class="star">
            <img src="immagini/star.png" class="star">
         
         <p>Bello - <strong>utente06</strong></p>
       
      </div>

      <div class="one">
        
         <img src="immagini/star.png" class="star">
            <img src="immagini/star.png" class="star">
            <img src="immagini/star.png" class="star">
            <img src="immagini/star.png" class="star">
        
         <p>Fantastico - <strong>account99</strong></p>
      </div>

</div>

</section>
</section>
   <footer>
      <div id="Io">
       @AroundTheWorld<br>
       ✉ email: aroundtheworld@info.com<br>
       Roberta Russo 1000002423<br>
      </div>
   </footer>
</body>
</html>