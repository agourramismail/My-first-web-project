<?php 
declare(strict_types=1);
function is_input_empty(string $car_name, string $model, int $price, string $photo): bool {
    return empty($car_name) || empty($model) || empty($price) || empty($photo);
}
function upload_file($targetdir,$photo,$targetfile){
    $targetdir = 'uploads/';
    $photo = $_FILES['photo']['name'];
    $targetfile = $targetdir . basename($photo);
    return move_uploaded_file($_FILES['photo']['tmp_name'], $targetfile);;
}
?>