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

      </head>
</html>

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

$idtoedit = $_GET['id'];


if($idtoedit != '')
{
	$result = $conn->query("SELECT * FROM $table WHERE id=$idtoedit");
	$row = $result->fetch_assoc();
}
	?>
<body>
<div class="container">
  <form method="post" action="medicalUpdate.php">
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
      Airway<input type="text" name="ariway" id="airway"/>
    </div>
    <div class="col-md-3 col-xs-6">
      Respiratory<input type="text" name="respiratory" id="respiratory"/>
    </div>
    <div class="col-md-3 col-xs-6">
      Skeletal<input type="text" name="skeletal" id="skeletal"/>
    </div>
    <div class="col-md-3 col-xs-6">
      Other<input type="text" name="other" id="other"/>
    </div>
    <div class="col-md-3 col-xs-6">
      Tag<input type="text" name="tag" id="tag"/>
    </div>
    <input type="submit" />
  </form>

</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
	<?php


	//header("Location: index.php");
?>