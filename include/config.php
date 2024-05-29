<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'myayla';


// veritabanı bağlantısı yaptım 
try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    // USERS TABLOSU 
    $conn = $db->prepare("SELECT * FROM users WHERE id = 1");
    $conn->execute();
    $users = $conn->fetch(PDO::FETCH_ASSOC);
    

    // ABOUT TABLOSU 
    $conn = $db->prepare("SELECT * FROM about WHERE id = 1");
    $conn -> execute();
    $about = $conn->fetch(PDO::FETCH_ASSOC);

    // SKİLLS TABLOSU
    $conn = $db->prepare("SELECT * FROM skills WHERE id = 1");
    $conn -> execute();
    $skills = $conn->fetch(PDO::FETCH_ASSOC);

    

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
