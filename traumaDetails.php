<html>
<h2><a href="index.php">HOME</a></h2>
</html>

<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "emt";
$table = "trauma";

//create connection 
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection 
if($conn->connect_error) {
	die("Connection failed: ". $conn->connect_error);
}

//get the id from index.php
$id = $_GET['id'];
//echo ("$id");

//pull all the individual pieces of data out of the specific row in the table 
$row = $conn->query("SELECT * FROM $table WHERE id = $id");
$results = $row->fetch_assoc();
echo "Test ID: " . $results['id'] . "<br>";
echo "Category: " . $results['tag'] . "<br>";
echo "Scenario: " . $results['scenario'] . "<br>";
echo "Patient Data: " . $results['patient_data'] . "<br>";
echo "Life Threat: " . $results['life_threat'] . "<br>";
echo "Level Of Consiousness: " . $results['level_of_consiousness'] . "<br>";
echo "Respirations: " . $results['respirations'] . "<br>";
echo "Lung Sounds: " . $results['lung_sounds'] . "<br>";
echo "Pulse: " . $results['pulse'] . "<br>";
echo "Blood Pressure: " . $results['blood_pressure'] . "<br>";
echo "Carotid Pulse: " . $results['carotid_pulse'] . "<br>";
echo "Femoral Pulse: " . $results['femoral_pulse'] . "<br>";
echo "Radial Pulse: " . $results['radial_pulse'] . "<br>";
echo "Capillary Refill: " . $results['capillary_refill'] . "<br>";
echo "Skin Temperature: " . $results['skin_temperature'] . "<br>";
echo "Skin Moisture: " . $results['skin_moisture'] . "<br>";
echo "Skin Color: " . $results['skin_color'] . "<br>";
echo "Pupils: " . $results['pupils'] . "<br>";
echo "SAO2: " . $results['sao2'] . "<br>";
echo "Airway: " . $results['airway'] . "<br>";
echo "Respiratory: " . $results['respiratory'] . "<br>";
echo "Skeletal: " . $results['skeletal'] . "<br>";
echo "Other: " . $results['other'] . "<br>";

?>



