<?php
$host = 'localhost'; 
$username = 'root';  
$password = '123';
$database = 'uts';  

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
