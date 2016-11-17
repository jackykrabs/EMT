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
		<link rel="stylesheet" href = "CSS/styles.css">
      </head>
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

$idtoedit = $_GET['id'];


if($idtoedit != '')
{
	$result = $conn->query("SELECT * FROM $table WHERE id=$idtoedit");
	$row = $result->fetch_assoc();
}
	?>
<body>
<div class="container">
  <form method="post" action="traumaUpdate.php">
    <div class="col-xs-12">
	<h2> Row: <?php echo $_GET['id']; ?></h2> <input type="hidden" name ="id" id="id" value = "<?php echo $_GET['id']; ?>" />
	</div>
    <div class="col-md-6 col-xs-12">
      <div class="field_title">Scenario</div><input type="text" name="scenario" id="scenario" 
	  value="<?php echo $row['scenario']; ?>"/>
    </div>
    <div class="col-md-6 col-xs-12">
      <div class="field_title">Patient Data</div><input type="text" name="patient_data" id="patient_data"
	   value="<?php echo $row['patient_data']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Life Threat</div><input type="text" name="life_threat" id="life_threat"
	   value="<?php echo $row['life_threat']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Level of Consciousness</div><input type="text" name="level_of_consciousness" id="level_of_consciousness"
	   value="<?php echo $row['level_of_consciousness']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Respirations</div><input type="number" name="respirations" id="respirations" min="0" max ="10000"
	   value="<?php echo $row['respirations']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Lung Sounds</div><input type="text" name="lung_sounds" id="lung_sounds"
	   value="<?php echo $row['lung_sounds']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Pulse</div><input type="number" name="pulse" id="pulse" min="0" max ="10000"
	   value="<?php echo $row['pulse']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Blood Pressure</div><input type="text" name="blood_pressure" id="blood_pressure"
	   value="<?php echo $row['blood_pressure']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Carotid Pulse</div><input type="text" name="carotid_pulse" id="carotid_pulse"
	   value="<?php echo $row['carotid_pulse']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Femoral Pulse</div><input type="text" name="femoral_pulse" id="femoral_pulse"
	   value="<?php echo $row['femoral_pulse']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Radial Pulse</div><input type="text" name="radial_pulse" id="radial_pulse"
	   value="<?php echo $row['radial_pulse']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Capillary Refill</div><input type="text" name="capillary_refill" id="capillary_refill"
	   value="<?php echo $row['capillary_refill']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Skin Temperature</div><input type="text" name="skin_temperature" id="skin_temperature"
	   value="<?php echo $row['skin_temperature']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Skin Moisture</div><input type="text" name="skin_moisture" id="skin_moisture"
	   value="<?php echo $row['skin_moisture']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Skin Color</div><input type="text" name="skin_color" id="skin_color"
	   value="<?php echo $row['skin_color']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Pupils</div><input type="text" name="pupils" id="pupils"
	   value="<?php echo $row['pupils']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">SaO2</div><input type="text" name="sao2" id="sao2"
	   value="<?php echo $row['sao2']; ?>"/>
    </div>
	<div class="col-md-3 col-xs-6">
      <div class="field_title">Airway</div><input type="text" name="airway" id="airway"
	   value="<?php echo $row['airway']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Respiratory</div><input type="text" name="respiratory" id="respiratory"
	   value="<?php echo $row['respiratory']; ?>"/>
    </div>
    <div class="col-md-3 col-xs-6">
      <div class="field_title">Skeletal</div><input type="text" name="skeletal" id="skeletal"
	   value="<?php echo $row['skeletal']; ?>"/>
    </div>
    
	<div class="col-md-3 col-xs-6">
      <div class="field_title">Respiratory</div><input type="text" name="respiratory" id="respiratory"
	   value="<?php echo $row['respiratory']; ?>"/>
    </div>
	<div class="col-md-3 col-xs-6">
      <div class="field_title">Other</div><input type="text" name="other" id="other"
	   value="<?php echo $row['other']; ?>"/>
    </div>
	<div class="col-md-3 col-xs-6">
      <div class="field_title">Category</div><input type="text" name="tag" id="tag"
	   value="<?php echo $row['tag']; ?>"/>
    </div>
    <input class="submit" type="submit" />
  </form>

</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

