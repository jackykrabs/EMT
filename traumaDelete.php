<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = 'emt';
$table = 'trauma';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$idtodelete = $_GET['id'];

$conn->query("DELETE FROM $table WHERE id=$idtodelete");
$conn->close();

header("Location: index.php");

?>

