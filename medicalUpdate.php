<?php
$tag = $_POST['tag'];
$scenario = $_POST['scenario'];
$patient_data = $_POST['patient_data'];
$life_threat = $_POST['life_threat'];
$level_of_consciousness = $_POST['level_of_consciousness'];
$respirations = $_POST['respirations'];
$lung_sounds = $_POST['lung_sounds'];
$pulse = $_POST['pulse'];
$blood_pressure = $_POST['blood_pressure'];
$carotid_pulse = $_POST['carotid_pulse'];
$femoral_pulse = $_POST['femoral_pulse'];
$radial_pusle = $_POST['radial_pusle'];
$capillary_refill = $_POST['capillary_refill'];
$skin_temperature = $_POST['skin_temperature'];
$skin_moisture = $_POST['skin_moisture'];
$skin_color = $_POST['skin_color'];
$pupils = $_POST['pupils'];
$sao2 = $_POST['sao2'];

$fname = $_POST['fName'];
$lname = $_POST['lName'];
$email = $_POST['email'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = 'emt';
$table = 'medical';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$idtoedit = $_GET['id'];


$conn->query("UPDATE $table SET fname='$fname', lname='$lname', email='$email' WHERE id=$idtoedit");
$conn->close();


header('Location: edit.php');
?>