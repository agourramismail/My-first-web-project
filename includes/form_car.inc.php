<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
if($_SERVER['REQUEST_METHOD']=='POST'){

    $phone = $_POST['phone'];
    try {
        require_once '../includes/dbh.inc.php';
        require_once '../models/form_car_model.inc.php';
        require_once '../controls/form_car_contr.inc.php';
        require_once '../includes/config_session_inc.php';

        $userid=$_SESSION['user_id'];
        $carid=$_SESSION['car_id'];



    $formpost= formpost($pdo,$userid,$carid, $phone);

    if ($formpost) {
        header("location:../form_car_valid.php");
        echo "Formulair envoyé avec succès,on va vous contactez dans les plus bref délais";
    }else{
        header("location:../car.php");
        echo "Erreur lors de l'envoi du formulaire";
        exit();
    }
    } catch (PDOException $e) {
        die("mouchkil f post method dial form car " . $e->getMessage());
    }
} 
?>