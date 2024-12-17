<?php
require_once 'includes/dbh.inc.php';
require_once 'models/dashboard_model.inc.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    if (delete_user($pdo, $id)) {
        header("Location: dashboard.php?delete=success");
    } else {
        header("Location: dashboard.php?delete=error");
    }
} else {
    echo "Invalid request!";
    exit();
}
?>
