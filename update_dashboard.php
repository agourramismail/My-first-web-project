<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'includes/config_session_inc.php';
require_once 'includes/dbh.inc.php';
require_once 'models/dashboard_model.inc.php';
include 'dashboard.php';

 
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $user = get_user_by_id($pdo, $id);

    if (!$user) {
        echo "User not found!";
        exit();
    }
} else {
    echo "Invalid request!";
    exit();
}
?>

<div class="container my-5">
    <div class="row">
        <form action="includes/update_dashboard.inc.php" method="POST">

            <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">

            
            <input type="hidden" name="update_user" value="1">

            <div class="mb-3">
                <label for="nom" class="form-label">Username</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="NomComplet" value="<?= htmlspecialchars($user['nom']) ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email address" value="<?= htmlspecialchars($user['email']) ?>">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password</label>
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="New Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
