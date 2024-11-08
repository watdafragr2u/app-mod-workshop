<?php
// Configurazione del database
$db_host = '34.136.87.226';
$db_name = 'image_catalog';
$db_user = 'user';
$db_pass = 'mypassword';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore di connessione: " . $e->getMessage());
}

session_start();
?>
