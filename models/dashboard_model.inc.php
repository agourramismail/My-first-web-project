<?php
declare(strict_types=1);
function get_all_users(object $pdo):array{
    $query="SELECT * FROM users";
    $stmt=$pdo-> prepare($query);
    $stmt ->execute();

    $result= $stmt-> fetchall(PDO::FETCH_ASSOC);
    return $result;
}
function update_users(object $pdo, int $id, string $username, string $email, string $password): bool {
    
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $query = "UPDATE users SET nom = :nom, email = :email, password = :pwd WHERE id = :id";
    $stmt = $pdo->prepare($query);

    // Bind the parameters to the query
    $stmt->bindParam(":nom", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pwd", $hashedPassword);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT); 

    
    return $stmt->execute();
}
