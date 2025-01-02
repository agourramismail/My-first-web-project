<?php
session_start();
 include 'header.php';
 include 'includes/dbh.inc.php';
 include 'includes/config_session_inc.php';
 require 'models/info_car_model.php';
if(isset($_GET['id'])){
    $carid = $_GET['id'];
    $_SESSION['car_id']= $_GET['id'];
    $car = get_car_info($pdo,$carid);
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
        .car-info-border{
            border-style: solid;
            border-color: black;
            border-radius: 100px;
            padding: 40px;
            margin-right: 80px;
        }
        .next-btn{
            width: 100px;
        }
    </style>
</head>
<body style="margin-top: 200px;">
<div class="container ">
    <div class="row car-info-border">

        <div class="col car-info-border">
        <h2 class="text-center">You Are Ordering : <span class="car-info"><?= htmlspecialchars($car['car_name']) ?></span> </h2>
        <div class="text-center">
            <img src="uploads/<?= htmlspecialchars($car['photo']) ?>" alt="" class="bd-placeholder-img rounded-circle " width="400" height="200">
        </div>
        <h2 class="text-center">MODEL: <span class="car-info"><?= htmlspecialchars($car['model']) ?></span></h2>
        <h2 class="text-center">Prix/Jour: <span class="car-info"><?= htmlspecialchars($car['price']) ?></span> </h2>
        <p class="text-center"><a class="btn btn-outline-warning next-btn "  href="form_car.php?id=<?= htmlspecialchars($car['id']) ?>"">Next STEP</a></p>
        </div>
    </div>

    <?php include 'footer.php'?>
</body>
</html>