<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'includes/config_session_inc.php';
include 'header.php';
include 'footer.php';
include 'includes/dbh.inc.php';
require_once 'models/dashboard_model.inc.php'; 
require 'controls/dashboard_contr.inc.php';
require 'controls/select_car_contr.inc.php';
?>

<!-- Table Users -->
<div class="container">
<table class="table" style="margin-top: 150px;" >
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user){ ?>
    <tr>
      <th scope="row"><?= htmlspecialchars($user['id']) ?></th>
      <td><?= htmlspecialchars($user['nom']) ?></td>
      <td><?= htmlspecialchars($user['email']) ?></td>
      <td><?= htmlspecialchars($user['pwd']) ?></td>
      <!-- Update users-->
      <td><a href="update_dashboard.php?id=<?= htmlspecialchars($user['id']) ?>" class="btn btn-outline-dark btn-md">Edit</a>
      <!-- Delete Users -->
          <a href="delete_dashboard.php?id=<?= htmlspecialchars($user['id']) ?>" class="btn btn-outline-danger btn-md">Delete</a>
      </td>
    </tr>
    <?php }?>

  </tbody>
</table>
    </div>


    <br> <br>

    <!-- Add Cars -->
    <p class="fs-4 text-center">Ajouter Une voiture ici: <a href="add_car.php" class="btn btn-outline-success">Ajouter</a></p>

    <!-- Table Cars -->
    <div class="container mt-5">
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

