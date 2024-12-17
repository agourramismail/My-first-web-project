<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_user'])) {
    require_once '../models/dashboard_model.inc.php';
    require_once '../includes/dbh.inc.php';

    $id =$_POST['id'];
    $username = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['pwd']; // Optional password

    if (update_users($pdo, $id, $username, $email, $password)) {
        header("Location: ../dashboard.php?edit=success");
    } else {
        header("Location: ../dashboard.php?edit=error");
    }
    exit();
}
