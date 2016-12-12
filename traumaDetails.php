<html>
 <head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
      integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<link rel="stylesheet" href="CSS/styles.css">

    
   </head>

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
//pull all the individual pieces of data out of the specific row in the table 
$row = $conn->query("SELECT * FROM $table WHERE id = $id");
$results = $row->fetch_assoc();

?>
<div class="container details">
	<div class="top col-xs-12 row">
		<h2><a href="index.php">HOME</a></h2>
		<h2>Medical Scenario: Case # <?php echo $results['id'];?></h2>
	</div>
	<div class="scenarioDetails col-xs-12 row">
		<h3>Scenario</h3>
		<p><?php echo $results['scenario'];?></p>
	</div>
	<div class="patientDataDetails col-xs-12 row">
		<h3>Patient Data</h3>
		<p><?php echo $results['patient_data'];?></p>
	</div>
	<div class="lifeThreatDetails col-xs-12 row">
		<div class="box col-xs-12 col-md-6">
				<h4>Life Threat</h4>
				<h4>Potential Life Threat</h4>
		</div>
		<div class="box rightBox col-xs-12 col-md-6">
				<p><?php echo $results['life_threat'];?></p>
				<p><?php echo $results['potentail_life_threat']
		</div>
	</div>
	<div class="vital_signs col-xs-12">
		<h3>Vital Signs</h3>
		<div class="row border border_top">
			<div class="box col-xs-12 col-md-6">
				<h4>Level of Consciousness</h4>
			</div>
			<div class="box rightBox col-xs-12 col-md-6">
				<p><?php echo $results['level_of_consciousness'];?></p>
			</div>
		</div>
		<div class="row border">
			<div class="box col-xs-12 col-md-6">
				<h4>Respirations</h4>
			</div>
			<div class="box rightBox col-xs-12 col-md-6">
				<p><?php echo $results['respirations'];?></p>
			</div>
		</div>
		<div class="row border">
			<div class="box col-xs-12 col-md-6">
				<h4>Lung Sounds</h4>
			</div>
			<div class="box rightBox col-xs-12 col-md-6">
				<p><?php echo $results['lung_sounds'];?></p>
			</div>
		</div>
		<div class="row border">
			<div class="box col-xs-12 col-md-6">
				<h4>Pulse</h4>
			</div>
			<div class="box rightBox col-xs-12 col-md-6">
				<p><?php echo $results['pulse'];?></p>
			</div>
		</div>
		<div class="row border">
			<div class="box col-xs-12 col-md-6">
				<h4>Blood Pressure
				<ul>
					<li>Carotid Pulse</li>
					<li>Femoral Pulse</li>
					<li>Radial Pulse</li>
				<ul>
			</h4>
			</div>
			<div class="box rightBox col-xs-12 col-md-6">
				<p><?php echo $results['blood_pressure'];?></p>	
				<p><?php echo $results['carotid_pulse'];?></p>	
				<p><?php echo $results['femoral_pulse'];?></p>	
				<p><?php echo $results['radial_pulse'];?></p>	
			</div>
		</div>
		<div class="row border">
			<div class="box col-xs-12 col-md-6">
				<h4>Capillary Refill</h4>
			</div>
			<div class="box rightBox col-xs-12 col-md-6">
				<p><?php echo $results['capillary_refill'];?></p>
			</div>
		</div>
		<div class="row border">
			<div class="box col-xs-12 col-md-6">
				<h4>Skin Temperature
					<ul>
						<li>Moisture</li>
						<li>Color</li>
					<ul>
				</h4>
			</div>
			<div class="box rightBox col-xs-12 col-md-6">
				<p><?php echo $results['skin_temperature'];?></p>	
				<p><?php echo $results['skin_moisture'];?></p>	
				<p><?php echo $results['skin_color'];?></p>	
			</div>
		</div>
		<div class="row border">
			<div class="box col-xs-12 col-md-6">
				<h4>Pupils</h4>
			</div>
			<div class="box rightBox col-xs-12 col-md-6">
				<p><?php echo $results['pupils'];?></p>
			</div>
		</div>
		<div class="row border">
			<div class="box col-xs-12 col-md-6">
				<h4>SAO2</h4>
			</div>
			<div class="box rightBox col-xs-12 col-md-6">
				<p><?php echo $results['sao2'];?></p>
			</div>
		</div>
		<div class="row border">
			<div class="box col-xs-12 col-md-6">
				<h4>Airway</h4>
			</div>
			<div class="box rightBox col-xs-12 col-md-6">
				<p><?php echo $results['airway'];?></p>
			</div>
		</div>
		<div class="row border">
			<div class="box col-xs-12 col-md-6">
				<h4>Respiratory</h4>
			</div>
			<div class="box rightBox col-xs-12 col-md-6">
				<p><?php echo $results['respiratory'];?></p>
			</div>
		</div>
		<div class="row border">
			<div class="box col-xs-12 col-md-6">
				<h4>Skeletal</h4>
			</div>
			<div class="box rightBox col-xs-12 col-md-6">
				<p><?php echo $results['skeletal'];?></p>
			</div>
		</div>
		<div class="row border">
			<div class="box col-xs-12 col-md-6">
				<h4>Other</h4>
			</div>
			<div class="box rightBox col-xs-12 col-md-6">
				<p><?php echo $results['other'];?></p>
			</div>
		</div>
	</div>
</div>

</html>