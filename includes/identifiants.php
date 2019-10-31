<?php
 // Connexion à la base de données
try {
    $dbh = new PDO("mysql:host=mysql-dotpot420.alwaysdata.net;dbname=dotpot420_test", "dotpot420", "utoplab13",[
        PDO::ATTR_EMULATE_PREPARES => false, 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}