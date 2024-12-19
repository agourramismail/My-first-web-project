<?php 
include 'header.php';
include 'includes/add_car.inc.php';
include 'includes/config_session_inc.php';
include 'dashboard.php';
?>

<form action="includes/add_car.inc.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="car_name" class="form-label">Nom de la Voiture</label>
        <input type="text" class="form-control" id="car_name" name="car_name" placeholder="Entrez le nom de la voiture" required>
    </div>
    <div class="mb-3">
        <label for="model" class="form-label">Modèle</label>
        <input type="text" class="form-control" id="model" name="model" placeholder="Entrez le modèle ou l'année" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prix</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Entrez le prix en dollars" required>
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label">Photo de la Voiture</label>
        <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

