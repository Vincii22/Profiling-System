<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "brgy";

try {
    // Correctly form the DSN string
    $dsn = "mysql:host=$host;dbname=$db";

    // Pass the DSN, username, and password; the fourth argument should be an array or null
    $con = new PDO($dsn, $user, $pass);

    // Set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo ""; 
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
