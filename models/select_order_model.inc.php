<?php
declare (strict_types=1);


function get_all_orders(object $pdo) {
    $stmt = $pdo->prepare("SELECT 
    orders.id AS order_id,
    users.nom AS user_nom,
    users.email AS user_email,
    orders.phone AS user_phone,
    cars.car_name AS car_name,
    orders.order_date
FROM 
    orders
LEFT JOIN 
    users ON orders.user_id = users.id
LEFT JOIN 
    cars ON orders.car_id = cars.id;

");

$stmt->execute();

$result=$stmt->fetchall(PDO::FETCH_ASSOC);
return $result;
}
?>