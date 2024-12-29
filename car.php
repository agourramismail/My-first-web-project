<?php
session_start();
 include 'header.php'; 
 include 'controls/select_car_contr.inc.php';
 include 'includes/dbh.inc.php';
 require_once 'includes/config_session_inc.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .car-info{
            color: red;
            font-size: larger;
            font-weight: bolder;
        }
    </style>
</head>
<body>
<div class="container-xxl py-5">
<div class="container text-center">
    <div class="col-lg-4">
        <img src="img/chat1.avif" alt=""class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/>
        <h2 class="fw-normal">decouvrez maintenant</h2>
        <p>cliquez ici pour plus d'informations</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
    </div>
    <div class="row">
    <?php foreach ($cars as $car): ?>
        <div class="col-lg-4">
            <img src="uploads/<?= htmlspecialchars($car['photo']) ?>" alt="" class="bd-placeholder-img rounded-circle" width="140" height="140">
            <h2 class="fw-normal"><span class="car-info"><?= htmlspecialchars($car['car_name']) ?></span></h2>
            <p><span class="car-info">MODEL:</span><?= htmlspecialchars($car['model']) ?>   <span class="car-info">PRIX:</span><?= htmlspecialchars($car['price']) ?> DH</p>
            <p><a class="btn btn-outline-warning" href="info_car.php?id=<?= htmlspecialchars($car['id']) ?>"">buy now</a></p>
        </div>
    <?php endforeach; ?>
</div>

    
<script src="js/bootstrap.bundle.min.js"></script>                  
</body>
</html>
<?php include 'footer.php' ?>
<span class="car-info"></span>