<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="style.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body> 
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Ningeundphoto</label>
      <ul>
        <li><a class="active" href="#index.php"><i class="fas fa-home"></i></a></li>
         <li><a href="#son"><i class="fas fa-music"></i></a></li>
          <li><a href="#film.php"><i class="fas fa-film"></i></a></li>
           <li><a href="#photo.php"><i class="fas fa-images"></i></a></li>
          <li><a href="layout.php"><button style="font-size:24px">Déconnexion<i class="material-icons"></i></button></a></li>
      </ul>
    </nav>

    <p>bienvenue<?php $_SESSION['username'];?></p>
  </body>
</html>