<?php

$hostname = 'localhost';
$database = 'todotasks';
$username = 'postgres';
$password = 'postgres';

try {
  $pdo = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $e) {
  die('Connection failed: ' . $e->getMessage());
}