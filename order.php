<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'includes/config_session_inc.php';
include 'includes/dbh.inc.php';
include 'models/select_order_model.inc.php';
include 'header.php';

$orders= get_all_orders($pdo);

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
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($orders as $order){ ?>
    <tr>
      <th scope="row"><?= htmlspecialchars($order['order_id']) ?></th>
      <td><?= htmlspecialchars($order['user_nom']) ?></td>
      <td><?= htmlspecialchars($order['user_email']) ?></td>
      <td><?= htmlspecialchars($order['user_phone']) ?></td>
      <td><?= htmlspecialchars($order['orders_date']) ?></td>
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