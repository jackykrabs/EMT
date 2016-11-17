<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "emt";
$table = "medical";

//create connection 
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection 
if($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}

//get the id from index.php
$id = $_POST['id'];

//pull all the individual pieces of data out of the specific row in the table 
$tag = $conn->query("SELECT tag FROM $table WHERE id = $id");
$scenario = $conn->query("SELECT scenario FROM $table WHERE id = $id");
$patient_data = $conn->query("SELECT patient_data FROM $table WHERE id = $id");
$life_threat = $conn->query("SELECT life_threat FROM $table WHERE id = $id");
$level_of_consiousness = $conn->query("SELECT level_of_consciousness FROM $table WHERE id = $id");
$respirations = $conn->query("SELECT respirations FROM $table WHERE id = $id");
$lung_sounds = $conn->query("SELECT lung_sounds FROM $table WHERE id = $id");
$pulse = $conn->query("SELECT pulse FROM $table WHERE id = $id");
$blood_pressure = $conn->query("SELECT blood_pressure FROM $table WHERE id = $id");
$carotid_pulse = $conn->query("SELECT carotid_pulse FROM $table WHERE id = $id");
$femoral_pulse = $conn->query("SELECT femoral_pulse FROM $table WHERE id = $id");
$radial_pulse = $conn->query("SELECT radial_pulse FROM $table WHERE id = $id");
$capillary_refill = $conn->query("SELECT capillary_refill FROM $table WHERE id = $id");
$skin_temperature = $conn->query("SELECT skin_temperature FROM $table WHERE id = $id");
$skin_moisture = $conn->query("SELECT skin_moisture FROM $table WHERE id = $id");
$skin_color = $conn->query("SELECT skin_color FROM $table WHERE id = $id");
$pupils = $conn->query("SELECT pupils FROM $table WHERE id = $id");
$sao2 = $conn->query("SELECT sao2 FROM $table WHERE id = $id");
$airway = $conn->query("SELECT airway FROM $table WHERE id = $id");
$respiratory = $conn->query("SELECT respiratory FROM $table WHERE id = $id");
$skeletal = $conn->query("SELECT skeletal FROM $table WHERE id = $id");
$other = $conn->query("SELECT other FROM $table WHERE id = $id");

//display all the pieces of data 
echo ("Tag: {$tag}\n");
echo ("Scenario: {$scenario}\n");
echo ("Patient Data: {$patient_data}\n");
echo ("Life Threat: {$life_threat}\n");
echo ("Level Of Consiousness: {$level_of_consciousness}\n");
echo ("Respirations: {$respirations}\n");
echo {"Lung Sounds: {$lung_sounds}\n"};
echo ("Pulse: {$pulse}\n");
echo ("Blood Pressure: {$blood_pressure}\n");
echo ("Carotid Pulse: {$carotid_pulse}\n");
echo ("Femoral Pulse: {$femoral_pulse}\n");
echo ("Raidal Pulse: {$radial_pulse}\n");
echo ("Capillary Refill: {$capillary_refill}\n");
echo ("Skin Temperature: {$skin_temperature}\n");
echo ("Skin Moisture: {$skin_moisture}\n");
echo ("Skin Color: {$skin_color}\n");
echo ("Pupils: {$pupils}\n");
echo ("SAO2: {$sao2}\n");
echo ("Airway: {$airway}\n");
echo ("Respiratory: {$respiratory}\n");
echo ("Skeletal: {$skeletal}\n");
echo ("Other: {$other}\n");

?>

<html>
<h2><a href="index.php">HOME</a></h2>
</html>

