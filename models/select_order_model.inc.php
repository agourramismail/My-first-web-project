<?php
declare (strict_types=1);


function get_all_orders(object $pdo) {
    $stmt = $pdo->prepare
    (
        "SELECT o.id, u.nom AS user_nom, c.car_name, o.phone, o.order_date 
        FROM orders o
        LEFT JOIN users u ON o.user_id = u.id
        LEFT JOIN cars c ON o.car_id = c.id"
    );

$stmt->execute();

$result=$stmt->fetchall(PDO::FETCH_ASSOC);
return $result;
}
?>