<?php
  session_start();
  $conn = mysqli_connect("localhost", "root", "", "gamestore");
  $search = "";
  if(isset($_SESSION['user'])){
    echo "<b>Bienvenue  ".$_SESSION['user']."</b>";
    echo "<br>";
    echo "<b>id:   ".$_SESSION['id']."</b>";
  }

  if(isset($_POST["search"])){
    
      $search = $_POST["search"];
      $sql = "SELECT * FROM products
              WHERE name LIKE '%$search%'";
  }else{

      $sql = "SELECT * FROM products";
  }
  $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="/gamestorePHPversion/Assets/icon.png" type="image/png">
    <title>Game Store</title>
    <link rel="stylesheet" href="/gamestorePHPversion/Styles.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body style="background-color: #4C6C8C;">
    <section>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                  <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="/gamestorePHPversion/Assets/img1.png" alt="Game Store Logo" width="90" height="40" class="me-2">
                    <h2>GAME<sub>STORE</sub></h2>
                  </a>
              
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              
                  <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ms-auto align-items-center">
                      <li class="nav-item me-3">
                        <a class="nav-link" href="/gamestorePHPversion/index.php"><i class="bi bi-house fs-5"></i> Accueil</a>
                      </li>
                      <li class="nav-item me-3">
                        <a class="nav-link" href="/gamestorePHPversion/profile.html"><i class="bi bi-cart fs-5"></i> Panier</a>
                      </li>
                      <li class="nav-item">
                        <a class="btn btn-outline-light" href="/gamestorePHPversion/account/login.php"><i class="bi bi-person-circle"></i> Profile</a>
                      </li>
                      <li class="nav-item">
                        <a href="/gamestorePHPversion/account/logout.php" style="color:red; text-decoration: underline;">Déconnexion</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </header>

        <div id="games">
          <div class="container my-4">
            <div class="d-flex justify-content-between align-items-center">
              
              <form method="POST" class="d-flex flex-grow-1 me-3" role="search" style="width: 60%;">
                <input class="form-control me-2" type="search" id="search-text" placeholder="Rechercher un jeu..." aria-label="Search" width="170px" style="margin-left: 40px;" name="search">
                <button class="btn btn-outline-primary" type="button" id="btn">
                  <i class="bi bi-search"></i>
                </button>
              </form>
        
              <div id="weather" class="ms-auto" style="color: white; font-size: 14px; text-align: right;"></div>
        
            </div>
          </div>
        </div>

        <div id="offreCarousel" class="carousel slide mb-5 container my-5" data-bs-ride="carousel" id="carouselExample">
          <h3>Highlights</h3>
          <br/>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="https://www.gog.com/en/game/doom_2016"><img src="/gamestorePHPversion/Assets/offre/offre1.jpg" class="d-block w-100" alt="Offre 1"></a>
            </div>
            <div class="carousel-item">
              <a href="https://www.gog.com/en/promo/20250506_building_promo"><img src="/gamestorePHPversion/Assets/offre/offre2.jpg" class="d-block w-100" alt="Offre 2"></a>
            </div>
            <div class="carousel-item">
              <a href="https://www.gog.com/en/promo/20250506_building_promo"><img src="/gamestorePHPversion/Assets/offre/offre3.png" class="d-block w-100" alt="Offre 3"></a>
            </div>
            <div class="carousel-item">
              <a href="https://www.gog.com/en/game/mini_settlers"><img src="/gamestorePHPversion/Assets/offre/offre4.png" class="d-block w-100" alt="Offre 4"></a>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#offreCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#offreCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
        
        
          <div class="container text-center mt-4">
            <h1>GAME<sub id="idsub">STORE</sub></h1>

            <h3 style="color: rgba(255, 255, 255, 0.918)">Nos Produits</h3>
            <a href="/gamestorePHPversion/index.php"><img src="/gamestorePHPversion/Assets/home.png" /></a>
            <div id="products-box" style="
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(280px,1fr));
                gap: 1.5rem;
                margin-top: 40px;
          "></div>
          </div>

        </div>
    </section>

    <section class="container my-5">
      <h3>Dernières Actualités Gaming</h3>
      <div id="news-container" class="row g-4"></div>
    </section>
    
    <script type="module" src="/gamestorePHPversion/script.js"></script>
    <script src="/gamestorePHPversion/api.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>