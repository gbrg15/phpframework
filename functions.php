<?php
function connecttoDB()
{
  try {
return new PDO('mysql:host=127.0.0.1;dbname=testframework','root','sslmnf.0');
  } catch (\Exception $e) {
  die('Could not connect');
  }
}

function fetchAllUsers($pdo)
{
  $statement = $pdo->prepare("SELECT * FROM USERS");

  $statement->execute();

  return $statement->fetchAll(PDO::FETCH_CLASS,'User');
}
?>
