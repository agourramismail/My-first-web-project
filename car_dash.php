<?php
session_start();

include 'includes/config_session_inc.php';
include 'includes/dbh.inc.php';
require 'controls/select_car_contr.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="padding-top: 60px;">
<?php  include 'header.php'; ?>

        <div class="row">
            <div class="col-sm-4">
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-sm-8">
                
    <!-- Add Cars -->
    <p class="fs-4 text-center">Ajouter Une voiture ici: <a href="add_car.php" class="btn btn-outline-success">Ajouter</a></p>

<!-- Table Cars -->

<h2>Liste des Voitures</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Modèle</th>
            <th scope="col">Prix</th>
            <th scope="col">Photo</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cars as $car): ?>
            <tr>
                <th scope="row"><?= htmlspecialchars($car['id']) ?></th>
                <td><?= htmlspecialchars($car['car_name']) ?></td>
                <td><?= htmlspecialchars($car['model']) ?></td>
                <td><?= htmlspecialchars($car['price']) ?></td>
                <td><img src="uploads/<?= htmlspecialchars($car['photo']) ?>" alt="Photo de la voiture" style="width:100px; height:auto;"></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
            </div>   
</body>
      

</html>
