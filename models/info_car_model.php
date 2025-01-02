<?php
function get_car_info(object $pdo, int $carid): array {
    $stmt = $pdo->prepare("SELECT * FROM cars WHERE id = :carid");
    $stmt->bindParam(':carid', $carid, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result; 
}
?>
