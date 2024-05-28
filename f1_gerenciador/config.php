<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=f1_gerenciador", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Belligol";
} catch(PDOException $erro) {
  echo "Connection failed: " . $erro->getMessage();
}