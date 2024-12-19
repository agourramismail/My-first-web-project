<?php
require_once 'includes/dbh.inc.php';
require_once 'models/select_car_model.inc.php';
$cars=get_all_cars($pdo);
?>