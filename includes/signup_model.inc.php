<?php
declare(strict_types=1);

function get_username(object $pdo, string $username) {
    $query="SELECT nom FROM users WHERE nom = :nom ";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":nom", $username);
    $stmt-> execute();

    $result= $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function get_email(object $pdo, string $email) {
    $query="SELECT nom FROM users WHERE email = :email ";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt-> execute();

    $result= $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
 ?>