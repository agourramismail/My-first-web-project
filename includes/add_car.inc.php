<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $car_name= $_POST['car_name'];
    $model= $_POST['model'];
    $price= $_POST['price'];
    $photo = $_FILES['photo']['name'];
    try {
        require_once 'dbh.inc.php';
        require_once '../controls/add_car_contr.inc.php';
        require_once '../models/add_car_model.inc.php';
        require_once '../views/add_car_view.inc.php';

        $errors=[];

        if(is_input_empty($car_name,$model,$price,$photo) !== false){
            $errors['empty_imput']='Please fill in all fields';
        }


        require_once 'config_session_inc.php';
        if($errors){
            $_SESSION["errors_add_car"]= $errors;
            header("location:..dashboard.php");
            exit();
        }

        $car= add_car($pdo,$car_name,$model,$price,$photo);
        if($car){
            echo"car added!";
            header("Location: ../dashboard.php");
            exit();
        }else{
            echo"car not added";
            exit();
        }
        

    } catch (PDOException $e) {
        die ("hadhci mkhedamch: " . $e->getMessage());
    }
}
?>