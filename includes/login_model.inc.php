<?php
declare(strict_types=1);
function get_user(object $pdo,string $username){
    $query="SELECT * FROM users WHERE nom = :nom; ";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":nom", $username);
    $stmt-> execute();

    $result= $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
} 
?>