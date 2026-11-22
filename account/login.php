<?php
  session_start();
  $conn = mysqli_connect("localhost", "root", "", "gamestore");

  if(isset($_POST['submit'])) {

      $username = $_POST['username'];
      $password = $_POST['password'];

      if(empty($username) || empty($password)){
          echo "<p style='color:red;'>Veuillez remplir les champs</p>";
      }elseif($username == "admin" && $password == "admin"){
          $_SESSION['admin'] = "admin";
          header("Location: /gamestorePHPversion/admin/admin.php");
      }else {
          $sql = "SELECT * FROM users WHERE nom='$username' AND password='$password'";
          $result = mysqli_query($conn, $sql);

          if(mysqli_num_rows($result) > 0){
              $_SESSION['user'] = $username;
              $_SESSION['id'] = session_id();
              header("Location: /gamestorePHPversion/index.php");


          } else {
              echo "<p style='color:red;'>Login incorrect</p>";
          }
      }
  }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion - Game Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/gamestorePHPversion/Styles.css">
  <style>
    #font{
      background-color: #4C6C8C;
    }
  </style>

</head>
<body id="font">

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/gamestorePHPversion/index.php">
          <img src="/gamestorePHPversion/Assets/img1.png" alt="Game Store Logo" class="me-2" style="margin-left: 30px;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav ms-auto align-items-center">

            <li class="nav-item me-3">
              <a class="nav-link" href="/gamestorePHPversion/profile.html"><i class="bi bi-cart fs-5"></i> Panier</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-outline-light" href="/gamestorePHPversion/account/login.php"><i class="bi bi-person-circle"></i> Profil</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4" style="width: 400px;">
      <h2 class="text-center mb-4">Connexion</h2>

      <form id="login" method="POST" action="">
        <div class="mb-3">
          <label for="username" class="form-label">Nom d'utilisateur</label>
          <input type="text" class="form-control" id="username" placeholder="Entrer votre nom" name="username">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" name="password">
        </div>

        <button type="submit" class="btn btn-primary w-100" name="submit">Se connecter</button>

        <div class="text-center mt-3">
          <small>Pas encore de compte ? <a href="signup.php" class="text-primary">Créer un compte</a></small>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
