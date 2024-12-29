<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'includes/config_session_inc.php';
include 'header.php';
include 'includes/dbh.inc.php';
require_once 'models/dashboard_model.inc.php'; 
require 'controls/dashboard_contr.inc.php';
require 'controls/select_car_contr.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="margin-top: 50px;">

  <!-- Table Users -->
  <div class="row">
    <div class="col-sm-4">
    <?php 
include 'sidebar.php';
?>
    </div>
    <div class="col-sm-8">
    <table class="table" >
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
  </div>



<?php 
include 'footer.php';
?>
</body>
</html>



