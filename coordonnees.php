<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Informations client</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="/gamestorePHPversion/Assets/icon.png" type="image/png">
</head>

<body class="bg-light">
  <div class="container mt-5">
    <h2 class="mb-4">Informations de facturation</h2>
    
    <form method="POST" action="/gamestorePHPversion/facture.php" id="checkout-form" onsubmit="return valider()">
      <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" name="prenom" class="form-control" id="prenom" required>
      </div>
      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" name="nom" class="form-control" id="nom" required>
      </div>
      <div class="mb-3">
        <label for="adresse" class="form-label">Adresse</label>
        <input type="text" name="adresse" class="form-control" id="adresse" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" required>
      </div>
      <div class="mb-3">
        <label for="telephone" class="form-label">Téléphone</label>
        <div id="alert"></div>
        <input type="tel" name="tel" class="form-control" id="telephone" required>
      </div>
      <div class="mb-3">
        <label for="modePaiement" class="form-label">Mode de paiement</label>
        <select id="modePaiement" name="paiement" class="form-select" required>
          <option>Carte Bancaire</option>
          <option>PayPal</option>
          <option>Stripe</option>
          <option>Especes</option>
        </select>
      </div>

      <input type="hidden" name="total" id="total">
      <div class="mb-3">
        <h4>Total à payer : <span id="total-display"></span></h4>
      </div>
    
      <button type="submit" name="submit" class="btn btn-primary">Valider</button>
    </form>
  </div>

  <script>
    const total = localStorage.getItem("total");
    document.getElementById("total-display").textContent = total ? `${total} $` : "0 $";
    document.getElementById("total").value = total;

    function valider(){
      let number = document.getElementById('telephone').value.trim();
      let alert = document.getElementById('alert');

      if(number.length !== 8 || isNaN(number)){
        alert.innerHTML = `<div class="alert alert-danger" role="alert">
          numéro invalide
          </div>`;
        document.getElementById('telephone').focus(); 
        return false;
      }

      alert.innerHTML = '';
      return true;
    }
  </script>
</body>
</html>