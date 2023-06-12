<?php 
try {
    $db = new PDO(
        'mysql:host=localhost;dbname=library;charset=utf8',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
        ]
    );
} catch (Exception $e) {
    echo "Connexion refusée à la base de données";
    exit();
}
?>