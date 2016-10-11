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
  
    
   </head>
  <body>
    <h2>Add to Medical</h2>
    <form method="post" action="medicalChange.php">
      <div class="col-md-3 col-xs-6">
        Scenario <input type="text" name="scenario" id="scenario" />
      </div>
      <div class="col-md-3 col-xs-6">
        Patient Data<input type="text" name="patient_data" id="patient_data"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Life Threat<input type="text" name="life_threat" id="life_threat"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Level of Consciousness<input type="text" name="level_of_consciousness" id="level_of_consciousness"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Respirations<input type="number" name="respirations" id="respirations" min="0" max ="10000"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Lung Sounds<input type="text" name="lung_sounds" id="lung_sounds"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Pulse<input type="number" name="pulse" id="pulse" min="0" max ="10000"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Blood Pressure<input type="text" name="blood_pressure" id="blood_pressure"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Carotid Pulse<input type="text" name="carotid_pulse" id="carotid_pulse"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Femoral Pulse<input type="text" name="femoral_pulse" id="femoral_pulse"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Radial Pulse<input type="text" name="radial_pulse" id="radial_pulse"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Capillary Refill<input type="text" name="capillary_refill" id="capillary_refill"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Skin Temperature<input type="text" name="skin_temperature" id="skin_temperature"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Skin Moisture<input type="text" name="skin_moisture" id="skin_moisture"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Skin Color<input type="text" name="skin_color" id="skin_color"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Pupils<input type="text" name="pupils" id="pupils"/>
      </div>
      <div class="col-md-3 col-xs-6">
        SaO2<input type="text" name="sao2" id="sao2"/>
      </div>
      <div class="col-md-3 col-xs-6">
        Tag<input type="text" name="tag" id="tag"/>
      </div>
      <input type="submit" />
    </form>
    <table border="1">
      <br/>
      <h2>Medical</h2>
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
    </table>
  </body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
		echo '<tr>';
		
		echo '<td>'.$row['id'].'</td>';
		echo '<td>'.$row['scenario'].'</td>';
		echo '<td>'.$row['patient_data'].'</td>';
		echo '<td>'.$row['life_threat'].'</td>';
    echo '<td>'.$row['level_of_consciousness'].'</td>';
		echo '<td>'.$row['respirations'].'</td>';
		echo '<td>'.$row['lung_sounds'].'</td>';
		echo '<td>'.$row['pulse'].'</td>';
    echo '<td>'.$row['blood_pressure'].'</td>';
		echo '<td>'.$row['carotid_pulse'].'</td>';
		echo '<td>'.$row['femoral_pulse'].'</td>';
		echo '<td>'.$row['radial_pulse'].'</td>';
    echo '<td>'.$row['capillary_refill'].'</td>';
		echo '<td>'.$row['skin_temperature'].'</td>';
    echo '<td>'.$row['skin_moisture'].'</td>';
		echo '<td>'.$row['skin_color'].'</td>';
		echo '<td>'.$row['pupils'].'</td>';
		echo '<td>'.$row['sao2'].'</td>';
		
		echo '<td><a href="change.php?id='.$row['id'].'">Edit</a></td>';
		echo '<td><a href="delete.php?id='.$row['id'].'">Delete</a></td>';
		
		echo '</tr>';
    }
} 

?>



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

$result = $conn->query("SELECT * FROM $table");


?>
<h2>Add to Trauma</h2>
    <form method="post" action="traumaProcess.php">
      Scenario <input type="text" name="scenario" id="scenario" />
      Patient Data<input type="text" name="patient_data" id="patient_data"/>
      Life Threat<input type="text" name="life_threat" id="life_threat"/>
      Level of Consciousness<input type="text" name="level_of_consciousness" id="level_of_consciousness"/>
      Respirations<input type="number" name="respirations" id="respirations" min="0" max ="10000"/>
      Lung Sounds<input type="text" name="lung_sounds" id="lung_sounds"/>
      Pulse<input type="number" name="pulse" id="pulse" min="0" max ="10000"/>
      Blood Pressure<input type="text" name="blood_pressure" id="blood_pressure"/>
      Carotid Pulse<input type="text" name="carotid_pulse" id="carotid_pulse"/>
      Femoral Pulse<input type="text" name="femoral_pulse" id="femoral_pulse"/>
      Radial Pulse<input type="text" name="radial_pulse" id="radial_pulse"/>
      Capillary Refill<input type="text" name="capillary_refill" id="capillary_refill"/>
      Skin Temperature<input type="text" name="skin_temperature" id="skin_temperature"/>
      Skin Moisture<input type="text" name="skin_moisture" id="skin_moisture"/>
      Skin Color<input type="text" name="skin_color" id="skin_color"/>
      Pupils<input type="text" name="pupils" id="pupils"/>
      SaO2<input type="text" name="sao2" id="sao2"/>
      Airway<input type="text" name="airway" id="airway"/>
      Respiratory<input type="text" name="respiratory" id="respiratory"/>
      Skeletal<input type="text" name="skeletal" id="skeletal"/>
      Other<input type="text" name="other" id="other"/>
      Tag<input type="text" name="tag" id="tag"/>


      <input type="submit" />
    </form>
<table border="1">
  <br/>
  <h2>Trauma</h2>
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
</table>
        <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
		echo '<tr>';
		
		echo '<td>'.$row['id'].'</td>';
		echo '<td>'.$row['scenario'].'</td>';
		echo '<td>'.$row['patient_data'].'</td>';
		echo '<td>'.$row['life_threat'].'</td>';
    echo '<td>'.$row['level_of_consciousness'].'</td>';
		echo '<td>'.$row['respirations'].'</td>';
		echo '<td>'.$row['lung_sounds'].'</td>';
		echo '<td>'.$row['pulse'].'</td>';
    echo '<td>'.$row['blood_pressure'].'</td>';
		echo '<td>'.$row['carotid_pulse'].'</td>';
		echo '<td>'.$row['femoral_pulse'].'</td>';
		echo '<td>'.$row['radial_pulse'].'</td>';
    echo '<td>'.$row['capillary_refill'].'</td>';
		echo '<td>'.$row['skin_temperature'].'</td>';
    echo '<td>'.$row['skin_moisture'].'</td>';
		echo '<td>'.$row['skin_color'].'</td>';
		echo '<td>'.$row['pupils'].'</td>';
		echo '<td>'.$row['sao2'].'</td>';
		
		echo '<td><a href="traumaChange.php?id='.$row['id'].'">Edit</a></td>';
		echo '<td><a href="traumaDelete.php?id='.$row['id'].'">Delete</a></td>';
		
		echo '</tr>';
    }
} 

?>


      