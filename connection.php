<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "my_db";
$dsn = "mysql:host=$host;dbname=$database";
try {
$conn = new PDO( $dsn, $username, $password );
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//$conn = null;
}
catch (PDOException $e) {
$conn = null;
exit("Connection failed: " . $e->getMessage());
}
?>