<?php
    $host = '127.0.0.1';
    $port = '4306';
    $username = 'root';
    $password = '';
    $database = 'sitiowebphpp';

    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$database;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
    die("Connection Failed: " . $e->getMessage());
    }
?>
ff
