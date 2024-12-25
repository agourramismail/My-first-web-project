<?php include 'header.php';
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
</head>
<body style="margin-top: 200px;">
    <?php ($cars= $car) ?>
<div class="container py-5">
        <h2 class="text-center"><?= htmlspecialchars($car['car_name']) ?> </h2>
        <form action="process_buy_car.php" method="POST" class="mt-4">
            <!-- User Information -->
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
            </div>
    <?php include 'footer.php'?>
</body>
</html>