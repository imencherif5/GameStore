<?php
$conn = mysqli_connect("localhost", "root", "", "gamestore");
if(!$conn){
    die("Connexion échouée : " . mysqli_connect_error());
}

if(isset($_POST["submit"])){
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $adresse = $_POST["adresse"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $paiement = $_POST["paiement"];
    $total = $_POST["total"];

    if(!empty($prenom) && !empty($nom) && !empty($adresse) && !empty($email) && !empty($tel) && !empty($paiement)){
        $sql = "INSERT INTO commandes(prenom, nom, adresse, email, telephone, mode_paiement, total, date_commande)
                VALUES('$prenom', '$nom', '$adresse', '$email', '$tel', '$paiement', '$total', NOW())";
        
        if(mysqli_query($conn, $sql)) {
            $id_commande = mysqli_insert_id($conn);
        } else {
            die("Erreur lors de l'enregistrement : " . mysqli_error($conn));
        }
    } else {
        die("Veuillez remplir tous les champs !");
    }
} else {
    die("Accès refusé.");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Facture</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
  <link rel="icon" href="/gamestorePHPversion/Assets/icon.png" type="image/png">
  <style>
    .arrow{ margin-top: 10px; margin-left: 10px; }
  </style>
</head>
<body class="bg-light">

  <div class="arrow">
    <a href="/gamestorePHPversion/profile.html" class="text-black me-9"><i class="bi bi-arrow-left fs-3"></i></a>
  </div>

  <div class="container my-5">
    <h2 class="mb-4">Bon de commande N° <span><?php echo $id_commande; ?></span></h2>

    <div id="client-info" class="mb-4 p-4 bg-white rounded shadow-sm">
        <p><strong>Nom :</strong> <?php echo $nom; ?></p>
        <p><strong>Prénom :</strong> <?php echo $prenom; ?></p>
        <p><strong>Adresse :</strong> <?php echo $adresse; ?></p>
        <p><strong>Email :</strong> <?php echo $email; ?></p>
        <p><strong>Téléphone :</strong> +216 <?php echo $tel; ?></p>
        <p><strong>Mode de paiement :</strong> <?php echo $paiement; ?></p>
    </div>

    <div class="bg-white p-4 rounded shadow-sm">
      <h4 id="montant-nombre">Montant à payer : <?php echo $total; ?> $</h4>

      <a href="/gamestorePHPversion/index.php"><button class="btn btn-success" onclick="confirmerCommande()">Confirmer la commande</button></a>
      <a href="/gamestorePHPversion/index.php"><button class="btn btn-danger" onclick="annulerCommande()">Annuler</button></a>
    </div>
  </div>

  <script>
    const total = "<?php echo $total; ?>";
  
    function confirmerCommande() {
      alert("Commande confirmée ! Merci pour votre achat.");
    }
    function annulerCommande() {
      alert("Commande annulée !");
    }
  </script>
</body>
</html>