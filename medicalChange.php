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
	
	<form method="post" action="update.php?id=<?php echo $idtoedit?>">
		<input type="text" name="fName" id="fName" value="<?php echo $row['fname']; ?>" />
		<input type="text" name="lName" id="lName" value="<?php echo $row['lname']; ?>" />
		<input type="text" name="email" id="email" value="<?php echo $row['email']; ?>" />
		<input type="submit" />
	</form>
	<?php

	
		$conn->query("DELETE FROM $table WHERE id=$idtodelete");
		$conn->close();

	//header("Location: edit.php");
?>