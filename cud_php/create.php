<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conex = new PDO("mysql:host=$servername", $username, $password);
  $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE IF NOT EXISTS bob";
  $conex->exec($sql);
  echo "DB created successfully";
}
catch(PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
  }
  $conex = null;



 ?>
