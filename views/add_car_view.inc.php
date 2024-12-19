<?php
declare(strict_types=1);
function check_signup_errors (){
    if(isset($_SESSION['errors_add_car'])){

        $errors = $_SESSION['errors_add_car'];

        echo "<br>";
        
        foreach($errors as $error){
            echo '<p class="form-error">' . $error . '</p>';

        }

        unset($_SESSION['errors_add_car']);
    }
}
 ?>
 <doctype html>
    <html>
        <head>
            <style>
                .form-error{
                    color: red;
                }
            </style>
        </head>
        <body>
            
        </body>
    </html>
?>