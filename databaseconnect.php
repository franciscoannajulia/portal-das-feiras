<?php
include"pdoconfig.php";
require_once 'pdoconfig.php';
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    echo "Não conectado a $dbname em $host com sucesso.";
    die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
}
?>