<?php

  session_start();

  if(!isset($_SESSION['admin'])){
      die("Access Denied!");
  }

  $conn = mysqli_connect("localhost","root","","gamestore");

  if(isset($_POST["submit"])){

      $name = $_POST['name'];
      $price = $_POST['price'];
      $image = $_POST['image'];
      $description = $_POST['description'];

      if(!empty($name) && !empty($price)&& !empty($image) && !empty($description)){

          $sql = "INSERT INTO products(name, price, image, description)
          VALUES('$name', '$price', '$image', '$description')";
          mysqli_query($conn, $sql);
          echo "<p style='color:green;'>Produit ajouté !</p>";
      } else {

          echo "<p style='color:red;'>Veuillez remplir tous les champs</p>";
      }
  }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Game Store</title>
  <link rel="icon" href="/gamestorePHPversion/Assets/icon.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #4C6C8C;
      color: white;
    }
    .admin-section {
      background-color: white;
      color: black;
      padding: 20px;
      border-radius: 12px;
      margin-top: 30px;
    }
    .preview-img {
      width: 150px;
      margin: 10px;
      border-radius: 8px;
      border: 2px solid #ddd;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="/gamestorePHPversion/index.php">
        <img src="/gamestorePHPversion/Assets/img1.png" alt="Game Store Logo" width="90" height="40" class="me-2">
        <h2>GAME<sub>STORE</sub></h2>
      </a>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="admin-section">
      <h3>Ajouter un nouveau jeu</h3>
      <form method="POST" action="">
        <div class="mb-3">
          <label for="gameName" class="form-label">Nom du jeu</label>
          <input type="text" class="form-control" id="gameName" name="name" required>
        </div>

        <div class="mb-3">
          <label for="gamePrice" class="form-label">Prix</label>
          <input type="text" class="form-control" id="gamePrice" name="price" required>
        </div>

        <div class="mb-3">
          <label for="gameImage" class="form-label">Image</label>
          <input type="text" class="form-control" id="gameImage" accept="image/*" name="image" required>
        </div>
        
        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" class="form-control" id="gameDesc" name="description" required>
        </div>

        <button type="submit" class="btn btn-success" name="submit"><i class="bi bi-plus-circle"></i> Ajouter</button>
      </form>
    </div>

    <div class="admin-section mt-4">
      <h4>Jeux ajoutés</h4>
      <div id="gamesList" class="d-flex flex-wrap"></div>
    </div>
  </div>
</body>
</html>