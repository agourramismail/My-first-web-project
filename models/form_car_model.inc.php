<?php
declare(strict_types=1);

function formpost(object $pdo,string $phone,int $user_id){
    $query="INSERT INTO orders (user_id, phone, order_date) VALUES (:user_id,:phone, NOW())";
    $stmt=$pdo->prepare($query);

    $stmt->bindParam(':user_id',$user_id);
    $stmt->bindParam(':phone',$phone);


    return $stmt->execute();
    
}
?>