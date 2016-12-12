<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = 'emt';
$table = 'trauma';

//create connection to servername
$conn = new mysqli($servername, $username, $password, $dbname);
$searchTag = $_GET['searchTag'];

//check connection
if($conn -> connect_error){
	die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM trauma WHERE tag LIKE '%$searchTag%'");
?>
<html>
	<head>
	</head>
	<body>
	<h2><a href="index.php">HOME</a></h2>
	<table border = "1">
		<h1> Results </h1>
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
	</body>
</html>