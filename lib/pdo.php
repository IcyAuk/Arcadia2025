<?php

//PDO.PHP IS ALWAYS REQUIRED AFTER CONFIG.PHP

$servername = "localhost";
$username = "arcadia_machine";
$password = "1234";
$dbname = "arcadia";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Catch exceptions and throw em
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "PDO: ERROR" . $e->getMessage();
}
?>
