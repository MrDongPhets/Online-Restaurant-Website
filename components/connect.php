<?php


$dbServername = "localhost";
$db_name = 'fooddb';
$user_name = 'root';
$user_password = '';

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$dbServername;dbname=$db_name", $user_name, $user_password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>


