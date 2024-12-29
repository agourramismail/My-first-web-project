<?php
declare(strict_types=1);

function formpost(object $pdo,string $nom,string $email,string $phone){
    $query="INSERT INTO commande (nom,email,phone) VALUES (:nom,:email,:phone)";
    $stmt=$pdo->prepare($query);
    $stmt->bindParam(':nom',$nom);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':phone',$phone);


    return $stmt->execute();
    
}
?>