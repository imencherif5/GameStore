<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product</title>
    <link rel="stylesheet" href="/gamestorePHPversion/Styles.css" />
    <link rel="icon" href="/gamestorePHPversion/Assets/icon.png" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
      #submit-btn:hover{
        cursor: pointer;
      }

      .bi:hover {
        color: #0d6efd;
        transition: color 0.3s ease;
}

    </style>
</head>

<body style="background-image: linear-gradient(#03143d, #6282b5)"">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/gamestorePHPversion/index.php">
          <img src="/gamestorePHPversion/Assets/store.png" alt="Game Store Logo" class="me-2" style="margin-left: 30px;">
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

    <div style="display: flex" class="block">
        <div style="display: block">
            <div>
                <img id="game-img" src="/gamestorePHPversion/Assets/img4.png" width="420px" height="400px" style="margin-top: 20px; margin-left: 15px; margin-bottom: 5px;" /><br/>
            </div>

            <div style="width: 420px; height: 40px; background-color: #2e334d; margin-left: 15px; border-radius: 12px;">
                <span style="color: #e1e5e2; font-size: x-large; margin-left: 30px;">Add to cart</span>
                <span
                  id="game-price"
                  style="color: #9aa9c4; float: right; font-size: x-large">
                  26,95 $
                </span>
            </div>

        <img src="/gamestorePHPversion/Assets/Overview.png" style="margin-left: 15px; margin-bottom: 3px; border-radius: 12px;"/>

      </div>

      <div style="margin-left: 50px; margin-top: 20px;">
        <h2 id="game-name" style="color: white; font-family: Georgia, 'Times New Roman', Times, serif;">MINECRAFT</h2>
        <hr style="font-weight: bolder; color: aliceblue;"/>
        <p style="font-size: small; color: white">
          PS4™ | Level | 50GB | 08.06.2019 | Sony Interactive
        </p>
        <div
          id="game-description"
          style="background-color: #8f98a0; width: 520px; color: aliceblue"
        >
          A sandbox game that lets players build, explore, and survive in a
          blocky, procedurally generated world. The game offers multiple modes,
          including creative (where players can freely build) and survival
          (where they must gather resources and fend off enemies). Its endless
          possibilities have made it one of the best-selling games ever.
        </div>
        <button
          id="submit-btn"
          type="button"
          style="
            background-color: #9aa9c4;
            font-size: large;
            color: #e1e5e2;
            text-align: end;
            margin-top: 100px;
          "
        >
          Add to list
        </button>
      </div>
    </div>
    
    <!-- Footer -->
    <div class="bg-dark text-white text-center py-4 mt-5">
      <p class="mb-3">Suivez-nous</p>
      <a href="mailto:contact@gamestore.com" class="text-white me-4">
        <i class="bi bi-envelope-fill fs-5"></i>
      </a>
      <a href="https://facebook.com" target="_blank" class="text-white me-4">
        <i class="bi bi-facebook fs-5"></i>
      </a>
      <a href="https://instagram.com" target="_blank" class="text-white me-6">
        <i class="bi bi-instagram fs-5"></i>
      </a>
    </div>

    <script>
      const Data = [
        {
          id: 1,
          img: "./Assets/img2.png",
          Nom: "The Legend of Zelda Breath of the Wild",
          price: "59,99$",
          Description:
            "A groundbreaking action-adventure game where you play as Link, exploring the vast open world of Hyrule. With the freedom to approach tasks and puzzles in various ways, you must defeat Ganon to save Princess Zelda and restore peace to the land. The game features open-world exploration, puzzle-solving, combat, and a deeply immersive environment.",
        },
        {
          id: 2,
          img: "./Assets/img3.png",
          Nom: "Super Mario Odyssey",
          price: "59,99$",
          Description:
            "A colorful 3D platformer where Mario embarks on a global adventure to rescue Princess Peach from Bowser. Using his new friend Cappy, Mario can possess various objects and enemies, adding a unique twist to the classic platforming gameplay. The game is known for its creative level design and fun, varied worlds.",
        },
        {
          id: 3,
          img: "./Assets/img4.png",
          Nom: "Minecraft",
          price: " 26,95$",
          Description:
            "A sandbox game that lets players build, explore, and survive in a blocky, procedurally generated world. The game offers multiple modes, including creative (where players can freely build) and survival (where they must gather resources and fend off enemies). Its endless possibilities have made it one of the best-selling games ever.",
        },
        {
          id: 4,
          img: "./Assets/img5.png",
          Nom: "Red Dead Redemption 2",
          price: "39,99$",
          Description:
            "A story-driven open-world action game set in the late 1800s. You play as Arthur Morgan, a member of the Van der Linde gang, as you navigate the decline of the Old West. The game focuses on narrative-driven experiences, deep character development, stunning landscapes, and moral choices. It also has a vast and immersive world to explore.",
        },
        {
          id: 5,
          img: "./Assets/img6.png",
          Nom: "God of War (2018)",
          price: " 39,99$",
          Description:
            "A third-person action game where you control Kratos, the Greek god, as he navigates the world of Norse mythology with his son Atreus. The game is known for its cinematic storytelling, engaging combat system, and emotional depth. The father-son relationship is central to the game's narrative, blending mythological elements with human emotion.",
        },
        {
          id: 6,
          img: "./Assets/img7.png",
          Nom: "EA Sports FC 25",
          price: "69,99$",
          Description:
            "The latest installment in EA's sports football series, following the end of the FIFA branding. It features real-life teams, stadiums, and leagues, offering players the chance to engage in realistic football gameplay, including career modes, Ultimate Team, and online multiplayer.",
        },
        {
          id: 7,
          img: "./Assets/img8.png",
          Nom: "Monster Hunter: World",
          price: "39,99$",
          Description:
            "An action RPG where players take on the role of a 'Hunter' tasked with tracking down and slaying massive creatures in a vibrant, dynamic world. Players can craft weapons and armor from monster parts and work with friends in multiplayer mode to tackle the toughest challenges.",
        },
        {
          id: 8,
          img: "./Assets/img9.png",
          Nom: "Spider-Man: Miles Morales",
          price: "49,99$",
          Description:
            "A superhero action game where you play as Miles Morales, the new Spider-Man, taking on both classic villains and new threats. The game emphasizes Miles' unique powers, including invisibility and electricity-based attacks, with an open-world New York City to explore and plenty of web-swinging action.",
        },
        
      ];

      const idProduct = new URLSearchParams(window.location.search);
      const gameName = document.getElementById("game-name");
      const gameDescription = document.getElementById("game-description");
      const gameImage = document.getElementById("game-img");
      const gamePrice = document.getElementById("game-price");
      const submitBtn = document.getElementById("submit-btn");

      const indexofElm = Data.findIndex((e) => e.id == idProduct.get("id"));

      gameName.innerHTML = `${Data[indexofElm].Nom}`;
      gameDescription.innerHTML = `${Data[indexofElm].Description}`;
      gameImage.src = `${Data[indexofElm].img}`;
      gamePrice.innerHTML = `${Data[indexofElm].price}`;

      submitBtn.addEventListener("click", () => {
        // get data
        let dataFromLocal = JSON.parse(localStorage.getItem("Data"));
        // set data
        if (dataFromLocal == null) {
          localStorage.setItem("Data", JSON.stringify([Data[indexofElm]]));
        } else {
          localStorage.setItem(
            "Data",
            JSON.stringify([...dataFromLocal, Data[indexofElm]])
          );
        }

        alert("Produit ajouté au panier!");
      });
    </script>
  </body>
</html>