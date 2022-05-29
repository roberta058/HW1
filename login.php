<?php
  include 'auth.php';
  if (checkAuth()) {
      header('Location: home.php');
      exit;
  }
  

  if(!empty($_POST["username"]) && !empty($_POST["password"]))
   {     
     $conn=mysqli_connect("localhost","root","","around");
     $username=mysqli_real_escape_string($conn, $_POST["username"]);
     $password=mysqli_real_escape_string($conn, $_POST["password"]);
     $query="SELECT username, password FROM account WHERE username='$username'";
     $res= mysqli_query($conn, $query) or die(mysqli_error($conn));;
     if(mysqli_num_rows($res)>0)
     {
      $login = mysqli_fetch_assoc($res);
      if (password_verify($_POST['password'], $login['password'])) {
        $_SESSION["username"]=$_POST["username"];
        $_SESSION['log']=$login['id'];
        header("Location: homepage.php");
        mysqli_free_result($res);
        mysqli_close($conn);
        exit;
      }
      else{
        $error=true;
      }
     }
     else{
       $error=true;
     }
        
   }
?>
<!DOCTYPE html>
<html>
  <head>
  <head>
      <meta charset="utf-8">
        <title> AroundTheWorld </title>
        <link rel="stylesheet" href="access.css">
    <!--    <link href="https://fonts.googleapis.com/css2?family=Carter+One+Light&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
       <script src="login.js" defer="true"></script> 
     
    </head>
  </head>
  <body>
    <section>
      <main>
            <?php
                // Verifica la presenza di errori
                if(isset($error))
                {
                    echo "Credenziali Sbagliate";    
                }
            ?>
          
            <form action="" name="login" method="POST">
               
              <label></label><br>
              <input type="text" placeholder='username'name="username" >
               <br>
              
              <label></label><br>
              <input type="password" placeholder='password' name="password" >
               <br>
               <br>
                <input type="submit" name="submit" id="submit" value="Login" action="home.php">
                
            </form>
            <br>
        
          <form action="signup.php" name="iscriviti" method="POST">
            <label>Non sei ancora iscritto?</label><br>
            <input type="submit" name="iscrizione" id="iscrizione" value="Iscriviti">
              </form>
          
        </main>
    </section> 
    
    <footer>
      <div id="Io">
       ✉ email: aroundtheworld@info.com<br>
       Roberta Russo 1000002423
      </div>
   </footer>
  </body>
</html>