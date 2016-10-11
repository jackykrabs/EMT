<?php
$tag = $_POST['tag'];
$scenario = $_POST['scenario'];
$patient_data = $_POST['patient_data'];
$life_threat = $_POST['life_threat'];
$potential_life_threat = $_POST['potential_life_threat'];
$level_of_consciousness = $_POST['level_of_consciousness'];
$respirations = $_POST['respirations'];
$lung_sounds = $_POST['lung_sounds'];
$pulse = $_POST['pulse'];
$blood_pressure = $_POST['blood_pressure'];
$carotid_pulse = $_POST['carotid_pulse'];
$femoral_pulse = $_POST['femoral_pulse'];
$radial_pulse = $_POST['radial_pulse'];
$capillary_refill = $_POST['capillary_refill'];
$skin_temperature = $_POST['skin_temperature'];
$skin_moisture = $_POST['skin_moisture'];
$skin_color = $_POST['skin_color'];
$pupils = $_POST['pupils'];
$sao2 = $_POST['sao2'];

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

$conn->query("INSERT INTO $table (scenario, patient_data, life_threat, potential_life_threat,
level_of_consciousness, respirations, lung_sounds, pulse, blood_pressure, carotid_pulse, femoral_pulse,
radial_pulse, capillary_refill, skin_temperature, skin_moisture, skin_color, pupils, sao2, tag)
VALUES ('$scenario', '$patient_data', '$life_threat', '$potential_life_threat', '$level_of_consciousness',
'$respirations', '$lung_sounds', '$pulse', '$blood_pressure', '$carotid_pulse', '$femoral_pulse', 
'$radial_pulse', '$capillary_refill', '$skin_temperature', '$skin_moisture', '$skin_color', '$pupils',
'$sao2', '$tag')");
$conn->close();
header('Location: index.php');

?>