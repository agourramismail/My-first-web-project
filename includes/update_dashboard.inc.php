<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_user'])) {
    require_once '../models/dashboard_model.inc.php';
    require_once '../includes/dbh.inc.php';

    $id =$_POST['id'];
    $username = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    require_once '../controls/dashboard_contr.inc.php'; 

    // gestion dial les erreurs
    $errors = [];


    if (is_input_empty($username, $email, $password) !== false) {
        $errors["empty_input"] = "Please fill in all fields.";
    }
    if (is_email_invalid($email)) {
        $errors["invalid_email"] = "Invalid email.";
    }
    if (is_username_taken($pdo, $username)) {
        $errors["username_taken"] = "Username already taken.";
    }
    if (is_email_registred($pdo, $email)) {
        $errors["email_registred"] = "Email already registered.";
    }


    require_once 'config_session_inc.php';


    if ($errors) {
        $_SESSION["errors_signup"] = $errors;
        header("Location: ../dashboard.php");
        exit();
    }

    if (update_users($pdo, $id, $username, $email, $password)) {
        header("Location: ../dashboard.php?edit=success");
    } else {
        header("Location: ../dashboard.php?edit=error");
    }
    exit();
}
