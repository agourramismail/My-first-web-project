<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'includes/config_session_inc.php';
require_once 'header.php';
include 'footer.php';
include 'includes/dbh.inc.php';
require_once 'models/dashboard_model.inc.php'; 
require 'controls/dashboard_contr.inc.php';
?>
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
      <td><a href="update_dashboard.php?id=<?= htmlspecialchars($user['id']) ?>" class="btn btn-outline-dark btn-md">Edit</a>
          <a href="delete_dashboard.php?id=<?= htmlspecialchars($user['id']) ?>" class="btn btn-outline-danger btn-md">Delete</a>
      </td>
    </tr>
    <?php }?>
  </tbody>
</table>
</div>
