<?php

try {
    $host = "localhost";
    $dbname = "uye-islemleri";
    $username = "recep";
    $password = "";
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    );
    
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $message) {
    echo $message->getMessage();
}

?>
