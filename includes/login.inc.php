<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['nom'];
    $password = $_POST['pwd'];
    try {

        require_once 'dbh.inc.php';  
        require_once '../models/login_model.inc.php';  
        require_once '../controls/login_contr.inc.php'; 
        
                // gestion dial les erreurs
                $errors = [];

                if (is_input_empty($username,$password) !== false) {
                    $errors["empty_input"] = "Please fill in all fields.";
                }
                
                $result= get_user($pdo,$username);
                
                if(is_username_wrong($result)){
                    $errors["wrong_username"] = "Username is wrong.";
                }
                if((!is_username_wrong($result) && is_password_wrong($password,$result["pwd"]))){
                    $errors["wrong_password"] = "Password is wrong.";
                }
        
                require_once 'config_session_inc.php';
               
                if ($errors) {
                    $_SESSION["errors_signup"] = $errors;
                    header("Location: ../index.php");
                    die();
                }

                $newSessionId= session_create_id();
                $sessionid = $newSessionId . "_" . $result["id"];
                session_id($sessionid);

                $_SESSION["user_id"] = $result["id"];
                $_SESSION["user_username"] = htmlspecialchars($result["nom"]) ;
                $_SESSION["user_email"] = htmlspecialchars($result["email"]);
                $_SESSION["last_regeneration"] = time();
                
                header("location: ../acceuil.php?loginn=success");
                $pdo=null;
                $statement=null;

                die();
    } catch (PDOException $e) {
        die ("query failed". $e->getMessage());
    }
} else {
    header("location:../index.php");
    exit();
} 
?>