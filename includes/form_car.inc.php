<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    try {
        require_once 'dbh.inc.php';
        require_once '../models/form_car_model.inc.php';
        require_once '../controls/form_car_contr.inc.php';

    $formpost= formpost($pdo,$nom,$email,$phone);
    if ($formpost) {
        echo "Formulair envoyé avec succès,on va vous contactez dans les plus bref délais";
        header("location:../form_car_valid.php");
    }else{
        echo "Erreur lors de l'envoi du formulaire";
        header("location:../car.php");
        exit();
    }
    } catch (PDOException $e) {
        die("mouchkil f post method dial formcar " . $e->getMessage());
    }
} 
?>