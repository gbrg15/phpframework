<?php
try {
$pdo = new PDO('mysql:host=127.0.0.1;dbname=testframework','root','sslmnf.0');
} catch (\Exception $e) {
die('Could not connect');
};

$statement = $pdo->prepare("SELECT * FROM USERS");

$statement->execute();

$users = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
