<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'header.php';
include 'includes/dbh.inc.php';
require_once 'includes/config_session_inc.php';
require 'models/info_car_model.php';
require 'includes/form_car.inc.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $car = get_car_info($pdo,$id);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .car-info{
            color: red;
            font-size: larger;
            font-weight: bolder;
        }
    </style>
</head>
<body style="margin-top: 200px;">
<h2 class="text-center">Client : <span class="car-info"><?= htmlspecialchars($_SESSION['user_username']) ?></span> </h2>
<h2 class="text-center">You Are Ordering : <span class="car-info"><?= htmlspecialchars($car['car_name']) ?></span> </h2>
<h2 class="text-center">You Are Ordering : <span class="car-info"><?= htmlspecialchars($car['id']) ?></span> </h2>

<div class="col car-info-border container-xl">
        <form action="includes/form_car.inc.php" method="POST" class="mt-4">
        <input type="tex" name="car_id" value="<?= htmlspecialchars($car['id'] ?? '') ?>" disabled>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
<?php 
include 'header.php';
?>
</body>
</html>