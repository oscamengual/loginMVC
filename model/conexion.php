<?php
    include 'config.php';
    try {
        $dsn = "mysql:host=".SERVIDOR.";port=3307;dbname=".BD;
        $dbh = new PDO($dsn, USER,PASSWORD);
        echo "<script> alert('Conexión establecida')</script>";
    } catch (PDOException $e){
        echo $e->getMessage();
    }
?>