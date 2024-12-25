<?php
function get_car_info(object $pdo, int $id): array {
    $stmt = $pdo->prepare("SELECT * FROM cars WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result; 
}
?>
