<?php
declare(strict_types=1);
function get_all_users(object $pdo):array{
    $query="SELECT * FROM users";
    $stmt=$pdo-> prepare($query);
    $stmt ->execute();

    $result= $stmt-> fetchall(PDO::FETCH_ASSOC);
    return $result;
}

function get_user_by_id(object $pdo, int $id): ?array {
    $query = "SELECT * FROM users WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result ?: null;
}


function update_users(object $pdo, int $id, string $username, string $email, string $password): bool {
    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $query = "UPDATE users SET nom = :nom, email = :email, pwd = :pwd WHERE id = :id";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":id", $id, PDO::PARAM_INT); 
    $stmt->bindParam(":nom", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pwd", $hashedPassword);
   
    return $stmt->execute();    
}

function delete_user(object $pdo, int $id): bool {
    $query = "DELETE FROM users WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);

    return $stmt->execute();
}
function get_username(object $pdo, string $username) {
    $query="SELECT nom FROM users WHERE nom = :nom ";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":nom", $username);
    $stmt-> execute();
}
function get_email(object $pdo, string $email) {
    $query="SELECT nom FROM users WHERE email = :email ";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt-> execute();

    $result= $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}


