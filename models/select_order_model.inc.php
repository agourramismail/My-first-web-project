<?php
declare (strict_types=1);


function get_all_orders(object $pdo) {
    $stmt = $pdo->prepare
    ("SELECT o.id as order_id, u.nom as username, o.phone, o.orderdate, c.car_name  FROM orders o
        join users u on o.userid= u.id
        join cars c on o.carid= c.id"
    );

$stmt->execute();

$result=$stmt->fetchall(PDO::FETCH_ASSOC);
return $result;
}
?>