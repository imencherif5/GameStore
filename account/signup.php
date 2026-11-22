<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Créer un compte - Game Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/gamestorePHPversion/Styles.css">
  <style>
    #font{
      background-color: #4C6C8C;
    }
  </style>

  <?php
        $conn = mysqli_connect("localhost", "root", "");
        
        if(!$conn){
          die("Connexion échouée : " . mysqli_connect_error());
        }

        mysqli_select_db($conn, "gamestore"); 

        if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $check = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

            if(mysqli_num_rows($check) > 0){
                echo "<p style='color:red;'>Email déjà utilisé</p>";
            } else {
                $ajouter = mysqli_query($conn,"INSERT INTO users (nom, email, password) 
                              VALUES ('$username','$email','$password')");
                echo "<b><p style='color:green;'>Compte créé avec succès</p></b>";
                header("location: login.php");
            }
        }
  ?>
</head>
<body id="font">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/gamestore PHP version/index.php">
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
              <a class="btn btn-outline-light" href="login.php"><i class="bi bi-person-circle"></i> Profil</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4" style="width: 400px;">
      <h2 class="text-center mb-4">Créer un compte</h2>

      <form method="POST" action="">
        <div class="mb-3">
          <label for="username" class="form-label">Nom d'utilisateur</label>
          <input type="text" class="form-control" id="username" placeholder="Entrez votre nom" name="username">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Adresse e-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Entrez votre email" name="email">
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="password" placeholder="Créez un mot de passe" name="password">
        </div>

        <button type="submit" class="btn btn-primary w-100">S'inscrire</button>

        <div class="text-center mt-3">
          <small>Déjà un compte ? <a href="login.php" class="text-primary">Se connecter</a></small>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
