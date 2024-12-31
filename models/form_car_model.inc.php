<?php
declare(strict_types=1);

function formpost(object $pdo,string $phone){
    $query="INSERT INTO orders (phone) VALUES (:phone)";
    $stmt=$pdo->prepare($query);

    $stmt->bindParam(':phone',$phone);


    return $stmt->execute();
    
}
?>