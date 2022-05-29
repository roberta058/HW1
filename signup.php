<?php
  include 'auth.php';
  if (checkAuth()) {
      header('Location: home.php');
      exit;
  }
  
  if(!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["nome"]) && !empty($_POST["cognome"] && !empty($_POST["email"])))
   { 
     $error= array();
     $conn = mysqli_connect("localhost", "root", "", "around");
     $username = mysqli_real_escape_string($conn, $_POST["username"]);
     $query = "SELECT username FROM account WHERE username = '$username'";
     $res = mysqli_query($conn, $query) or die(mysqli_error($conn));;
     if (mysqli_num_rows($res) > 0) {
        $error= "Username già utilizzato";
     }else{
        $password=mysqli_real_escape_string($conn,$_POST["password"]);
        $password = password_hash($password, PASSWORD_BCRYPT);
        $nome=mysqli_real_escape_string($conn,$_POST["nome"]);
        $cognome=mysqli_real_escape_string($conn,$_POST["cognome"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $query="INSERT INTO account (nome, cognome, email, username, password) VALUES('$nome','$cognome','$email','$username','$password')";
        echo $query;
        if( mysqli_query($conn,$query))
        {
          $_SESSION["iscrizione"]=true;
            header("Location: login.php");
            mysqli_close($conn);
            exit;
        }
      }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> AroundTheWorld </title>
        <link rel="stylesheet" href="registrazion.css">
        <link href="https://fonts.googleapis.com/css2?family=Carter+One+Light&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <script src="signup.js" defer="true"></script>
    </head>
<body>
    
    <section>

    <div id="iscriviti">

        <form action="" name="iscriviti2" method="POST">
    
      <label></label><br>
      <input type="text"placeholder='Nome' name="nome" pattern="[A-Za-z ]{2,20}$" title="Il nome deve contenere solo lettere, deve avere una lunghezza minima di 2 e massima di 20">
    <br>
      <label></label><br>
      <input type="text"placeholder='Cognome' name="cognome" pattern="[A-Za-z ]{2,20}$" title="Il cognome deve contenere solo lettere, deve avere una lunghezza minima di 2 e massima di 20">
    <br>
    <label> </label><br>
      <input type="text"placeholder='Email' name="email"  title="">
    <br>
    
      <label> </label><br>
      <input type="text" placeholder='Username'id="username" name="username" pattern="[A-Za-z0-9]{6,20}$" title="L'username deve contenere solo caratteri alfanumerici, deve avere una lunghezza minima di 6 e massima di 20">
    <br>
    <?php
      if (isset($error)) {
          echo "<span class='error'>*Username già in uso</span><br>";
      }
    ?>
      <label> </label><br>
      <div class="password"><input type="password"placeholder='Password' name="password" id="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$" title="La password deve contenere minimo 8, massimo 20 caratteri tra cui: una lettera maiuscola, una minuscola, un numero e un carattere speciale">
     </div>
      <br>
      <input type="submit" name="iscrizione" id="iscrizione" value="Iscriviti">
    </form>
    <br>
    <div class="signup">Hai un account? <a href="login.php">Accedi</a>
    </div>
   
    </section>

<footer>
      <div id="Io">
       ✉ email: aroundtheworld@info.com<br>
       Roberta Russo 1000002423
      </div>
   </footer>
</body>
</html>