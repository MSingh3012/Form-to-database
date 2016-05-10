<?php

$firstname = $_Post['firstname'];
$lastname = $_Post['lastname'];
$gender = $_Post['gender'];
$Console = $_Post['Console'];

try {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "my_db";
    $dsn = "mysql:host=$host;dbname=$database";

    $conn = new PDO( $dsn, $username, $password );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO userprofile("
    . "firstname, lastname, sex, console" 
    . " ) VALUES (" 
    . "'" . $firstname . "',"
    . "'" . $lastname . "',"
    . "'" . $gender . "',"
    . "'" . $Console .")";

    $conn->query($sql);

    $sql = "SELECT * FROM userdata";
    $userdata = $conn-query($sql);
    echo '<table>';
    echo '<tr>';
    echo '<th>First Name</th>
          <th>Last Name</th>
          <th>Gender</th>
          <th>Console</th>';
    echo '<tr>';
    foreach ($userdata as $userdata) {
    echo '<tr>';
    echo '  <td>' . $userprofile['firstname'] . '</td>';
    echo '  <td>' . $userprofile['lastname'] . '</td>';
    echo '  <td>' . $userprofile['gender'] . '</td>';
    echo '  <td>' . $userprofile['Console'] . '</td>';
    echo '  </tr> ';
}

echo '</table>';

        $conn = null;
    }
    catch (PDOException $e) {
        $conn = null;
        exit("Connection failed: " . $e->getMessage());
    }
?>

<?php
require_once 'Connection.php';
?>