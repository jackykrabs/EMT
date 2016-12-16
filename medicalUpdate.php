<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = 'emt';
$table = 'medical';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$idtoedit = $_POST['id'];
$tag = $_POST['tag'];
$scenario = $_POST['scenario'];
$patient_data = $_POST['patient_data'];
$potential_life_threat = $_POST['potential_life_threat'];
$life_threat = $_POST['life_threat'];
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

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->query("UPDATE $table SET scenario = '$scenario', patient_data = '$patient_data',
potential_life_threat = '$potential_life_threat', life_threat = '$life_threat', level_of_consciousness = '$level_of_consciousness',
respirations = '$respirations', lung_sounds = '$lung_sounds' , pulse = '$pulse',
blood_pressure='$blood_pressure' , carotid_pulse = '$carotid_pulse', femoral_pulse='$femoral_pulse' ,
radial_pulse = '$radial_pulse' , capillary_refill = '$capillary_refill', skin_temperature ='$skin_temperature',
skin_moisture = '$skin_moisture',skin_color = '$skin_color', pupils = '$pupils' ,sao2= '$sao2', tag = '$tag' WHERE id=$idtoedit");

$conn->close();

header("Location: index.php");

?>
