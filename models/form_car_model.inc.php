<?php
declare(strict_types=1);

function formpost(object $pdo,int $userid,int $carid,string $phone){
    $query="INSERT INTO orders (userid,carid,phone, orderdate) VALUES (:userid,:carid,:phone, NOW())";
    $stmt=$pdo->prepare($query);

    $stmt->bindParam(':phone',$phone);
    $stmt->bindParam(':userid', $userid);
    $stmt->bindParam(':carid', $carid);


    return $stmt->execute();
    
}
?>