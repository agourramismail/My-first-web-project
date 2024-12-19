<?php
declare(strict_types=1);

function get_all_cars(object $pdo):array{
    $stmt = $pdo->prepare("SELECT * FROM cars");
    $stmt->execute();

    $result=$stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}
?>