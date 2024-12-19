<?php
declare(strict_types=1);

function add_car (object $pdo,string $car_name,string $model,int $price,string$photo ){
    $query="INSERT INTO cars (car_name,model,price,photo) VALUES(:car_name, :model, :price, :pwd) ";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':car_name', $car_name);
    $stmt->bindParam(':model',$model);
    $stmt->bindParam(':price',$price);
    $stmt->bindParam('photo',$photo);

    return $stmt-> execute();
}
?>