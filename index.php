<?php

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

// Create database
$sql = "CREATE DATABASE emt";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

$result = $conn->query("SELECT * FROM $table");

?>
<html>
  <head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").toggle();
    });
});
</script>

<<<<<<< HEAD
<link rel="stylesheet" href="CSS/styles.css">

    
=======
>>>>>>> origin/master
   </head>
  <body>
  <!-- Container that holds the content and gives it margins--!>
  <div class="container">
    <h2>Add to Medical</h2>
    <form method="post" action="medicalProcess.php">
	 <!-- The divs give each field a certain width depending on the screen width--!>
      <div class="col-md-6 col-xs-12">
        Scenario</br><input type="text" name="scenario" id="scenario" />
      </div>
      <div class="col-md-6 col-xs-12">
        Patient Data</br><input type="text" name="patient_data" id="patient_data"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Potential Life Threat</br><input type="text" name="potential_life_threat" id="potential_life_threat"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Level of Consciousness</br><input type="text" name="level_of_consciousness" id="level_of_consciousness"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Respirations</br><input type="number" name="respirations" id="respirations" min="0" max ="10000"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Lung Sounds</br><input type="text" name="lung_sounds" id="lung_sounds"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Pulse</br><input type="number" name="pulse" id="pulse" min="0" max ="10000"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Blood Pressure</br><input type="text" name="blood_pressure" id="blood_pressure"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Carotid Pulse</br><input type="text" name="carotid_pulse" id="carotid_pulse"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Femoral Pulse</br><input type="text" name="femoral_pulse" id="femoral_pulse"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Radial Pulse</br><input type="text" name="radial_pulse" id="radial_pulse"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Capillary Refill</br><input type="text" name="capillary_refill" id="capillary_refill"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Skin Temperature</br><input type="text" name="skin_temperature" id="skin_temperature"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Skin Moisture</br><input type="text" name="skin_moisture" id="skin_moisture"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Skin Color</br><input type="text" name="skin_color" id="skin_color"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Pupils</br><input type="text" name="pupils" id="pupils"/>
      </div>
      <div class="col-md-3 col-xs-6">
        SaO2</br><input type="text" name="sao2" id="sao2"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Tag</br><input type="text" name="tag" id="tag"/>
      </div>
      <input type="submit" />
    </form>
    <table border="1">
      <br/>
      <h2>Medical Scenarios</h2>
      <br/>
	  <!--Table header--!>
      <tr>
        <th>ID</th>
        <th>Scenario</th>
        <th>Patient Data</th>
        <th>Life Threat</th>
        <th>Category</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Details</th>
      </tr>

<?php
//Check if table is empty
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

		echo '<tr>';
		//table row content
		echo '<td>'.$row['id'].'</td>';
		echo '<td>'.$row['scenario'].'</td>';
		echo '<td>'.$row['patient_data'].'</td>';
		echo '<td>'.$row['life_threat'].'</td>';
		echo '<td>'.$row['tag'].'</td>';
		//table row functions
		echo '<td><a href="medicalChange.php?id='.$row['id'].'">Edit</a></td>';
		echo '<td><a href="medicalDelete.php?id='.$row['id'].'">Delete</a></td>';
		echo '<td><a href="medicalDetails.php?id='.$row['id'].'">Details</a></td>';


		echo '</tr>';
    }
}

?>
 </table>
  </body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>


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

$result = $conn->query("SELECT * FROM $table");


?>
<html>
  <head>

  </head>
  <body>
    <h2>Add to Trauma</h2>
    <form method="post" action="traumaProcess.php">
	  <!-- The divs give each field a certain width depending on the screen width--!>
      <div class="col-md-6 col-xs-12">
        Scenario</br><input type="text" name="scenario" id="scenario" />
      </div>
      <div class="col-md-6 col-xs-12">
        Patient Data</br><input type="text" name="patient_data" id="patient_data"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Life Threat</br><input type="text" name="life_threat" id="life_threat"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Level of Consciousness</br><input type="text" name="level_of_consciousness" id="level_of_consciousness"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Respirations</br><input type="number" name="respirations" id="respirations" min="0" max ="10000"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Lung Sounds</br><input type="text" name="lung_sounds" id="lung_sounds"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Pulse</br><input type="number" name="pulse" id="pulse" min="0" max ="10000"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Blood Pressure</br><input type="text" name="blood_pressure" id="blood_pressure"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Carotid Pulse</br><input type="text" name="carotid_pulse" id="carotid_pulse"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Femoral Pulse</br><input type="text" name="femoral_pulse" id="femoral_pulse"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Radial Pulse</br><input type="text" name="radial_pulse" id="radial_pulse"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Capillary Refill</br><input type="text" name="capillary_refill" id="capillary_refill"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Skin Temperature</br><input type="text" name="skin_temperature" id="skin_temperature"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Skin Moisture</br><input type="text" name="skin_moisture" id="skin_moisture"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Skin Color</br><input type="text" name="skin_color" id="skin_color"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Pupils</br><input type="text" name="pupils" id="pupils"/>
      </div>
      <div class="col-md-3 col-xs-6">
        SaO2</br><input type="text" name="sao2" id="sao2"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Airway</br><input type="text" name="airway" id="airway"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Respiratory</br><input type="text" name="respiratory" id="respiratory"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Skeletal</br><input type="text" name="skeletal" id="skeletal"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Other</br><input type="text" name="other" id="other"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Tag</br><input type="text" name="tag" id="tag"/>
      </div>

      <input type="submit" />
    </form>
	 <!-- Dislays the table headers--!>
    <table border="1">
      <br/>
      <h2>Trauma Scenarios</h2>
      <br/>
      <tr>
        <th>ID</th>
        <th>Scenario</th>
        <th>Patient Data</th>
        <th>Life Threat</th>
        <th>Category</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Details</th>
      </tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

		echo '<tr>';

		//table content for each row
		echo '<td>'.$row['id'].'</td>';
		echo '<td>'.$row['scenario'].'</td>';
		echo '<td>'.$row['patient_data'].'</td>';
		echo '<td>'.$row['life_threat'].'</td>';
		echo '<td>'.$row['tag'].'</td>';

		//table row functions
		echo '<td><a href="traumaChange.php?id='.$row['id'].'">Edit</a></td>';
		echo '<td><a href="traumaDelete.php?id='.$row['id'].'">Delete</a></td>';
		echo '<td><a href="traumaDetails.php?id='.$row['id'].'">Details</a></td>';


		echo '</tr>';
    }
}

?>

  </table>
  </div>
  </body>
</html>
