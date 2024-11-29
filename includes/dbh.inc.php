<?php
$host= 'localhost';
$dbname= 'boottuto';
$dbusername= 'root';
$dbpassword= 'root';

try {
    $pdo= new PDO("mysql:host=$host;dbname=$dbname",$dbusername,$dbpassword);
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
} catch (PDOException $e) {
    die(" conexion dial la base de données mkhedamach" . $e->getMessage());
}
?>