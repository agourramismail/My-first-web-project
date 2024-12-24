<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    try {
        require_once 'dbh.inc.php';  
        require_once '../models/signup_model.inc.php';  
        require_once '../controls/signup_contr.inc.php'; 

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
            header("Location: ../index.php");
            exit();
        }


        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $active = 1;
        $type = 'user';
        $query = "INSERT INTO users (nom, email, pwd, type, active) VALUES (:nom, :email, :pwd, :type, :active)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':nom', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pwd', $hashedPassword);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':active', $active);

        $stmt->execute();

        header("Location: ../index.php");
        exit();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("location:../index.php");
    exit();
}
?>
