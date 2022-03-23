<?php
  require_once 'config.php';
  echo $user . $password . $host . $password . $port . '<br>';
  try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$db_name;";

    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    if ($pdo) {
      echo "Connected to the $db database successfully!";
    }
  } catch (PDOException $e) {
    die($e->getMessage());
  } finally {
    if ($pdo) {
      $pdo = null;
    }
  }
?>