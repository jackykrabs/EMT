

<html>
<h2><a href="index.php">HOME</a></h2>
</html>

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
$id = $_GET['id'];
//echo ("$id");

//pull all the individual pieces of data out of the specific row in the table 
$row = $conn->query("SELECT * FROM $table WHERE id = $id");
$results = $row->fetch_assoc();
echo $results['scenario'];


?>



